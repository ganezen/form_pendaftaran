<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peserta extends CI_Controller {

    public function __construct(){

        parent::__construct();
        $this->load->model('Peserta_model');

    }

	public function index(){
	
		$data['title'] = 'Data Peserta';
        $data['peserta'] = $this->Peserta_model->get_data('tbl_peserta')->result();


		$this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('peserta', $data);
        $this->load->view('templates/footer');
	}

    //menambah data peserta
    public function tambah(){
        $data['title'] = 'Tambah Peserta';
        
		$this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('tambah_peserta');
        $this->load->view('templates/footer');

    }

    public function tambah_action(){
        $this-> _rules();

        if ($this->form_validation->run() == FALSE){
            $this->tambah();
        } else {
            $data = array(
                'nama_peserta' => $this->input->post('nama_peserta'),
                'kelas_peserta' => $this->input->post('kelas_peserta'),
                'alamat_peserta' => $this->input->post('alamat_peserta'),
                'nomor_telepon' => $this->input->post('nomor_telepon')
            );

            $this->Peserta_model->insert_data($data, 'tbl_peserta');
            $this->session->set_flashdata('pesan', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                                                    Data Berhasil ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    </div>');
            redirect('peserta');

        }

    }

    public function edit($id_peserta){
        $this->_rules();

        if ($this->form_validation->run() == FALSE){
            $this->index();
        } else {
            $data = array(
                'id_peserta' => $id_peserta,
                'nama_peserta' => $this->input->post('nama_peserta'),
                'kelas_peserta' => $this->input->post('kelas_peserta'),
                'alamat_peserta' => $this->input->post('alamat_peserta'),
                'nomor_telepon' => $this->input->post('nomor_telepon')
            );
        }
            $this->Peserta_model->update_data($data, 'tbl_peserta');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                                    Data Berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    </div>');
            redirect('peserta');

    
    }

     public function _rules(){
        $this->form_validation->set_rules('nama_peserta', 'Nama Peserta', 'required', array(
            'required' => '%s Mohon isi data'
        ));
        $this->form_validation->set_rules('kelas_peserta', 'Kelas Peserta', 'required', array(
            'required' => '%s Mohon isi data'
        ));
        $this->form_validation->set_rules('alamat_peserta', 'Alamat Peserta', 'required', array(
            'required' => '%s Mohon isi data'
        ));
        $this->form_validation->set_rules('nomor_telepon', 'Nomor Telepon', 'required', array(
            'required' => '%s Mohon isi data'
        ));
    }

   public function delete($id){

    $where = array('id_peserta' => $id);

     $this->Peserta_model->delete($where, 'tbl_peserta');
     $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    Data Berhasil dihapus <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>');
    redirect('peserta');

    
   }
}
