# Test Web Programmer

Aplikasi Klinik ini dikembangkan untuk keperluan Tes Web Programmer di PT. Inova Medika Solusindo

1. **role**

    -admin
    -semua akses

    -operator + kasir
    -fitur administrasi

    -dokter
    -dapat input data hasil diagnosa pasien

2. **CRUD**
   -alamat
   -user akses
   -pegawai
   -tindakan
   -obat

3. **pendaftaran pasien**
   -pasien bisa daftar mandiri
   -pasien bisa di daftarkan oleh petugas, dll karena berada di halaman home web
   -pasien bisa memilih poli
   -pasien bisa memilih tanggal

4. **transaksi tindakan obat**
   -tindakan medis atau diagnosa
   -racikan obat
   -data input masuk ke dasboard dokter dan operator

5. **menu pembayaran terdapat di staff/doketr**
   -terdapat tagihan pembayaran
   -resep
   -nama dokter dan diagnosa
   -nama poli

6. **menu laporan**
   -pilih tanggal awal dan pilih tanggal akhir akan di generet semua

7. **login dengan**
   user: aria@admin.com
   password: Aria123

8. -php versi 8.1
   -laravel 10
   -xampp
   -composer
   -vite
   -mysql

9. **database masih kosong**
   composer install

php artisan key:generte

php artisan storage:link

php artisan migrate

php artisan db:seed

php artisan serve

login ada di atas

Pada halaman awal saya menggunkaan template bootstrap untuk mendesign register agar terlihat rapih.

Saya menggunakan relasi untuk menghubungkan antara table pasien dan tabel dokter.

Saya hanya mampu menghasilkan seperti ini. Apabila terdapat kekurangannya atau belum sesuai dengan harapan Bapak/Ibu, saya mohon maaf dan akan menjadikannya sebagai bahan perbaikan ke depannya. Terimakasih
