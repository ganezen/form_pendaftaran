###################
lsp_ci3
###################

Reuse_Codeigniter 3 Adalah sebuah aplikasi berbasis web untuk menyimpan data dari peserta lomba menggunakan system CRUD dengan menggunakan Framework Codeigniter 3.Aplikasi ini dibuat menggunakan text editor Microsoft Visual Studio dan XAMPP.Untuk database menggunakan phpMyAdmin dan untuk template views dari header, sidebar, dan footer menggunakan tampilan dari boostrap 4.6x.

*******************
Konfigurasi Koneksi database pada codeigniter
*******************

Pada gambar potongan syntax dibawah ini menampilkan konfigurasi untuk database dengan nama database pendaftaran.


Pada Table yang digunakan adalah tbl_peserta yang berisikan id_peserta, nama_peserta, kelas_peserta, alamat_peserta dan nomor_telepon.
//SS
/SS


**************************
Fungsi CRUD pada Controller
**************************

Pada potongan gambar dibawah ini memperlihatkan fungsi dari index untuk menampilkan data yang diambil dari model Peserta_model.Kemudian membuat parsing data untuk title dan peserta dengan mengambil data dari fungsi get_data yang ada pada model Peserta_model pada table tbl_peserta.
//SS

Pada potongan gambar selanjutnya menampilkan fungsi dari tambah yang digunakan untuk menambahkan/memasukkan data dari peserta dengan membuat data penampung title untuk nama page nya.
//SS
Pada potongan gambar dibawah ini menunjukkan fungsi dari _rules yang digunakan untuk validasi data apa saja yang harus atau diwajibkan untuk diisikan, jika data yang harus diisi dikosongkan maka data tidak akan bisa di tambahkan dan akan menampilkan tulisan Mohon isi data.
//SS

Pada potongan gambar dibawah ini menampilkan fungsi dari tambah_action dengan menggunakan fungsi _rules sebagai aturan validasi yang harus diinputkannya.
//SS

Pada potongan gambar dibawah ini adalah fungsi untuk mendelete data yang diambil berdasarkan dari id_peserta pada table tbl_peserta.Kemudian membuat flash data berupa pesan yang akan muncul Ketika data berhasil di hapus.
//SS

*******************
Model Model_peserta
*******************
Pada potongan gambar dibawah ini adalah fungsi dari get_data yang digunakan untuk mengambil data dari table yang ada pada database.
//SS

Pada potongan gambar dibawah ini adalah fungsi dari insert_data yang digunakan untuk memasukkan data dari table yang nantinya akan dipanggil menggunakan controller pada fungsi tambah_action.
//SS

Dilanjutkan dengan potongan gambar dibawah ini, yaitu untuk menampung nilai dari update data yang dimana data akan diambil berdasarkan dari id_peserta.
//SS

Selanjutnya ada function delete yang akan digunakan untuk menghapus nilai pada database yang diambil menggunakan id_peserta.
//SS


*******
Template View dari file peserta untuk data table yang ada pada halaman home
*******
//SS

************
Template View dari file peserta untuk form edit data pada halaman home
************
//SS



*********
Uji Coba Program Halaman Utama
*********
Pada halaman utama tidak ada data yang ditampilkan dikarenakan database masih kosong belum di insert datanya.
/SS


***************
Uji Coba Program Halaman Tambah
***************
//SS

Berdasarkan validasi yang ada fungsi rules sebelumnya, Semua data wajib diisikan tidak boleh kosong, jika ada data yang dikosongkan maka data tidak akan masuk dan muncul alert atau pemberitahuan data harus di isi seperti pada gambar dibawah ini

//SS

Jika data berhasil dimasukkan maka halaman akan langsung berpindah ke halaman home dan data akan tampil pada tablenya .Data juga akan tersimpan pada database.

//SS
//SS

***************
Uji Coba Program Update Data
***************
Jika menekan icon update data maka akan muncul sebuah form untuk update data
//SS

Jika data berhasil di update maka akan memunculkan pesan data berhasil diubah.

//SS

***************
Uji Coba program Delete Data
***************
Jika menekan icon delete data, maka data akan langsung dihapuskan dari table dan database kemudian menampilkan pesan data berhasil di hapus.

//SS

***************
Flowchart
***************
Ketika aplikasi dijalankan maka akan menampilkan data dari table.Pada halaman home terdapat button tambah data yang Ketika ditekan akan berpindah ke halaman tambah data yang nantinya akan diminta untuk memasukkan nama peserta,kelas peserta, alamat peserta, dan nomor telepon.Jika data ada yang dikosongkan maka data tidak akan tersimpan dan akan Kembali ke halaman input tambah data.

Kemudian jika data berhasil ditambahkan akan muncul dua buah button yaitu delete dan edit data.Untuk button edit data akan menampilkan form yang berisikan inputan yang sama seperti pada halaman tambah data.Kemudian jika data sudah di update maka data akan tersimpan di dalam database dan Kembali ke halaman utama.Untuk button delete akan menghapus data yang ada pada database dan Kembali ke halaman utama.

//SS
