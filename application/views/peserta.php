 <?= $this->session->flashdata('pesan'); ?>
 <div class="card">
    <div class="card-header">
       <a href="<?= base_url('peserta/tambah') ?>" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Tambah Peserta</a>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr class="text-center">
                    <th>No</th>
                    <th>Nama Peserta</th>
                    <th>Kelas Peserta</th>
                    <th>Alamat Peserta</th>
                    <th>Nomor Telepon</th>
                    <th>Action</th>
                </tr>
                </thead>
                <?php $no=1;
                foreach($peserta as $pserta) :?>
                <tbody>
                    <tr class="text-center">
                        <td><?= $no++ ?></td>
                        <td><?= $pserta->nama_peserta ?></td>
                        <td><?= $pserta->kelas_peserta ?></td>
                        <td><?= $pserta->alamat_peserta ?></td>
                        <td><?= $pserta->nomor_telepon ?></td>
                        <td>
                            <button data-toggle="modal" data-target="#edit<?= $pserta->id_peserta ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></button>
                            <a href="<?= base_url('peserta/delete/' . $pserta->id_peserta )?>" class="btn btn-danger btn-sm" ><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                </tbody>
                <?php endforeach ?>
            </table>
        </div>
    </div>

    <!-- Menggunakan Template Bootstrap Versi 4.6x-->
    <!-- Modal Edit -->
<?php foreach($peserta as $pserta) :?>
<div class="modal fade" id="edit<?= $pserta->id_peserta ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Peserta</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <!--SYNTAX FORM EDIT PESERTA -->
                        <form action="<?= base_url('peserta/edit/' . $pserta->id_peserta) ?>" method="POST">
                            <div class="form-group">
                                <label>Nama Peserta</label>
                                <input type="text" name="nama_peserta" class="form-control" value="<?= $pserta->nama_peserta ?>">
                                <?= form_error('nama_peserta', '<div class="text-small text-danger">', '</div>'); ?>
                            </div>

                            <div class="form-group">
                                <label>Kelas Peserta</label>
                                <input type="text" name="kelas_peserta" class="form-control" value="<?= $pserta->kelas_peserta ?>">
                                <?= form_error('kelas_peserta', '<div class="text-small text-danger">', '</div>'); ?>
                            </div>

                            <div class="form-group">
                                <label>Alamat Peserta</label>
                                <textarea name="alamat_peserta" class="form-control"><?= $pserta->alamat_peserta ?></textarea>
                                <?= form_error('alamat_peserta', '<div class="text-small text-danger">', '</div>'); ?>
                            </div>

                            <div class="form-group">
                                <label>Nomor Telepon</label>
                                <input type="text" name="nomor_telepon" class="form-control" value="<?= $pserta->nomor_telepon ?>">
                                <?= form_error('nomor_telepon', '<div class="text-small text-danger">', '</div>'); ?>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Save</button>
                                <button type="reset" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Reset</button>
                            </div>
                    </form>
                        <!-- AKHIR SYNTAX EDIT PESERTA -->
             </div>
        </div>
    </div>
</div>
<?php endforeach ?>
