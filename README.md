<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## Bagaimana  Menjalankan project?

1. Pull Repo atau download dahulu
- Link repo `https://github.com/Mabot17/praktikum_paw.git`
- Link Download `https://github.com/Mabot17/praktikum_paw/archive/refs/heads/main.zip`

2. Setelah Itu masuk ke root folder
- Buka Terminal Anda menggunakan GIT Bash, CMD, PowerShell atau sejenisnya
- Kemudian install paket composer dengan mengetikkan `composer install`
- Dalam folder root/.env ganti koneksi DATABASE isinya sesuai kebutuhan kalian

3. Menjalankan Database
- Buka root/update_db, ambil sql paling terakhir
- jalankan di phpmyadmin / server mysql kalian

4. Setelah itu jalankan project
- Ketikkan di terminal `php artisan serve` pada root folder
