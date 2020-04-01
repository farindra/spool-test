## Instalasi

 1. Clone repo
 2. masuk ke project folder instal via composer `composer install`
 3. copy `.env.example`	menjadi `.env`
 4. jalankan migrasi `php artisan migrate:fresh --seed`
 5. jalankan aplikasi `php artisan serve` atau langsung menuju host local anda masing masing

#### Arsitektur, prinsip, pendekatan, atau hal lainnya yang digunakan dalam pengembangan aplikasi ini :
Arsitektur menggunakan MVC, pirnsip nya semua data yang dibutuhkan oleh view dikelola mandiri pada setiap model dan controler hanya sebagai kontrol transaksi antara keduanya.

#### Kekurangan dari aplikasi yang dibangun ini dalam beberapa aspek berikut :
 1. Fitur
	 - Belum ada modul login, input data post dan comment
	 - Belum ada modul social share post
	 - Halaman dan data masih statik
 2. Performa
	 - Belum ada pagination page dan cached 
 3. Kualitas Kode
	 - kode hanya support php versi 7.1 ke atas


## License

The Laravel framework is open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT).
# spool-test
