**************************
lsp_ci3
**************************

Reuse_Codeigniter 3 Adalah sebuah aplikasi berbasis web untuk menyimpan data dari peserta lomba menggunakan system CRUD dengan menggunakan Framework Codeigniter 3.Aplikasi ini dibuat menggunakan text editor Microsoft Visual Studio dan XAMPP.Untuk database menggunakan phpMyAdmin dan untuk template views dari header, sidebar, dan footer menggunakan tampilan dari boostrap 4.6x.

*******************
Konfigurasi Koneksi database pada codeigniter
*******************

Pada gambar potongan syntax dibawah ini menampilkan konfigurasi untuk database dengan nama database pendaftaran.
![koneksi database](https://user-images.githubusercontent.com/62431769/177008738-d37c0dca-6be2-4d95-a01f-752a3b5f0293.png)

Pada Table yang digunakan adalah tbl_peserta yang berisikan id_peserta, nama_peserta, kelas_peserta, alamat_peserta dan nomor_telepon.

![image](https://user-images.githubusercontent.com/62431769/177008749-0ffbc9df-0430-4af4-a055-0d95d1476831.png)
![image](https://user-images.githubusercontent.com/62431769/177008759-d31da058-18e3-47b6-b4ac-9d4c17e611c8.png)




**************************
Fungsi CRUD pada Controller
**************************

Pada potongan gambar dibawah ini memperlihatkan fungsi dari index untuk menampilkan data yang diambil dari model Peserta_model.Kemudian membuat parsing data untuk title dan peserta dengan mengambil data dari fungsi get_data yang ada pada model Peserta_model pada table tbl_peserta.
![image](https://user-images.githubusercontent.com/62431769/177008764-a7f0e779-870a-42f4-a822-3afd0a52c927.png)


Pada potongan gambar selanjutnya menampilkan fungsi dari tambah yang digunakan untuk menambahkan/memasukkan data dari peserta dengan membuat data penampung title untuk nama page nya.
![image](https://user-images.githubusercontent.com/62431769/177008776-31db016c-df60-4385-a934-7e9663e906f8.png)


Pada potongan gambar dibawah ini menunjukkan fungsi dari _rules yang digunakan untuk validasi data apa saja yang harus atau diwajibkan untuk diisikan, jika data yang harus diisi dikosongkan maka data tidak akan bisa di tambahkan dan akan menampilkan tulisan Mohon isi data.
![image](https://user-images.githubusercontent.com/62431769/177008781-19b90718-5aca-4382-9adc-13e474070cd0.png)


Pada potongan gambar dibawah ini menampilkan fungsi dari tambah_action dengan menggunakan fungsi _rules sebagai aturan validasi yang harus diinputkannya.
![image](https://user-images.githubusercontent.com/62431769/177008794-5af56c15-adfa-4800-8a10-a7b0f8f88d16.png)


Pada potongan gambar dibawah ini adalah fungsi untuk mendelete data yang diambil berdasarkan dari id_peserta pada table tbl_peserta.Kemudian membuat flash data berupa pesan yang akan muncul Ketika data berhasil di hapus.
![image](https://user-images.githubusercontent.com/62431769/177008799-e159e88b-437a-44f8-af35-b5adb4d13259.png)


*******************
Model Model_peserta
*******************
Pada potongan gambar dibawah ini adalah fungsi dari get_data yang digunakan untuk mengambil data dari table yang ada pada database.
![image](https://user-images.githubusercontent.com/62431769/177008801-6acf7355-788b-45df-8e84-3c2b455d109d.png)


Pada potongan gambar dibawah ini adalah fungsi dari insert_data yang digunakan untuk memasukkan data dari table yang nantinya akan dipanggil menggunakan controller pada fungsi tambah_action.
![image](https://user-images.githubusercontent.com/62431769/177008808-c9156261-59c6-423b-bc2e-3c356e0cd887.png)


Dilanjutkan dengan potongan gambar dibawah ini, yaitu untuk menampung nilai dari update data yang dimana data akan diambil berdasarkan dari id_peserta.

![image](https://user-images.githubusercontent.com/62431769/177008815-fe78e22b-6888-4d8d-a946-001818a573de.png)


Selanjutnya ada function delete yang akan digunakan untuk menghapus nilai pada database yang diambil menggunakan id_peserta.
![image](https://user-images.githubusercontent.com/62431769/177008817-a6757fa2-5a27-4338-b930-dfa692038508.png)



*******
Template View dari file peserta untuk data table yang ada pada halaman home
*******
![image](https://user-images.githubusercontent.com/62431769/177008825-825146c5-153d-48e7-84d4-2c2e56dab7f9.png)


************
Template View dari file peserta untuk form edit data pada halaman home
************
![image](https://user-images.githubusercontent.com/62431769/177008828-c6a2d7c9-e21a-4c4c-8d9f-6d14881c3dfb.png)




*********
Uji Coba Program Halaman Utama
*********
Pada halaman utama tidak ada data yang ditampilkan dikarenakan database masih kosong belum di insert datanya.
![image](https://user-images.githubusercontent.com/62431769/177008834-23f9b7d4-f8ac-4c20-b2a3-c849ae27e433.png)



***************
Uji Coba Program Halaman Tambah
***************
![image](https://user-images.githubusercontent.com/62431769/177008839-9006dcd6-a09a-4699-9eb5-9a9ebee6660c.png)


Berdasarkan validasi yang ada fungsi rules sebelumnya, Semua data wajib diisikan tidak boleh kosong, jika ada data yang dikosongkan maka data tidak akan masuk dan muncul alert atau pemberitahuan data harus di isi seperti pada gambar dibawah ini

![image](https://user-images.githubusercontent.com/62431769/177008843-ef57778e-7990-4a6b-94c2-cf48597956b6.png)


Jika data berhasil dimasukkan maka halaman akan langsung berpindah ke halaman home dan data akan tampil pada tablenya .Data juga akan tersimpan pada database.

![image](https://user-images.githubusercontent.com/62431769/177008846-63768e04-8186-4cd0-89ed-663a2c7fa4b3.png)

![image](https://user-images.githubusercontent.com/62431769/177008851-e6e88884-0772-43f0-8ff7-3007f74eb1ad.png)


***************
Uji Coba Program Update Data
***************
Jika menekan icon update data maka akan muncul sebuah form untuk update data
![image](https://user-images.githubusercontent.com/62431769/177008855-865bb525-e2e0-41a5-b9cb-0503809a59fc.png)


Jika data berhasil di update maka akan memunculkan pesan data berhasil diubah.

![image](https://user-images.githubusercontent.com/62431769/177008859-d91f3d71-de3f-4f17-8e2d-b45c86355307.png)


***************
Uji Coba program Delete Data
***************
Jika menekan icon delete data, maka data akan langsung dihapuskan dari table dan database kemudian menampilkan pesan data berhasil di hapus.

![image](https://user-images.githubusercontent.com/62431769/177008861-04ed7cdd-029e-4a9d-a26a-f40c90abc848.png)
![image](https://user-images.githubusercontent.com/62431769/177008868-14955435-9d1f-430e-a1a7-981ad7f8d0f7.png)



***************
Flowchart
***************
Ketika aplikasi dijalankan maka akan menampilkan data dari table.Pada halaman home terdapat button tambah data yang Ketika ditekan akan berpindah ke halaman tambah data yang nantinya akan diminta untuk memasukkan nama peserta,kelas peserta, alamat peserta, dan nomor telepon.Jika data ada yang dikosongkan maka data tidak akan tersimpan dan akan Kembali ke halaman input tambah data.

Kemudian jika data berhasil ditambahkan akan muncul dua buah button yaitu delete dan edit data.Untuk button edit data akan menampilkan form yang berisikan inputan yang sama seperti pada halaman tambah data.Kemudian jika data sudah di update maka data akan tersimpan di dalam database dan Kembali ke halaman utama.Untuk button delete akan menghapus data yang ada pada database dan Kembali ke halaman utama.

![image](https://user-images.githubusercontent.com/62431769/177008875-72f0f618-42f3-4d06-aa5f-ed57083e07c8.png)

