# untuk pertama-pertama lakukan migrasi dengan seeder, lalu jalankan server dan coba login

# halaman admin :
email : admin@gmai.com
password : password

# halaman user :
email : user@gmai.com
password : password

# dan agar gambar dapat muncul 
ubah FILESYSTEM_DISK=public di .env menjadi public
lalu tetikan php artisan storage:link pada terminal

