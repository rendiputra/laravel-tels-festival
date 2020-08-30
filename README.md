# laravel-tels-festival
>Aplikasi berbasis web dibuat untuk kegiatan event Telesandi Festival yang diselenggarakan oleh **SMK Telekomunikasi Telesandi Bekasi**

dibuat menggunakan framework **Laravel 5.8**
### 1. Ubah code pada file app/providers/AppService/Provider.php dan(atau) public/index.php

```bash
$this->app->bind('path.public', function() {
          return base_path().'/../public_html';
        });
```
**jadi**

```bash
$this->app->bind('path.public', function() {
          return base_path().'/public';
        });
```
### 2. Dumping db telsfest_ival.sql

### 3. Configurasi env
```bash
$ cp .env.example .env
```

### 4. Install semua depency menggunakan composer

```bash 
$ composer install
```

### 5. Generate a new application key and  a new JWT authentication secret key
```bash 
$ php artisan key:generate
$ php artisan jwt:generate
```

### 6. Start the local development server
```bash
$ php artisan serve
```
# Rangkuman command


```bash 
$ git clone https://github.com/rendiputra/laravel-tels-festival.git
$ cd laravel-tels-festival
$ composer install
$ cp .env.example .env
$ php artisan key:generate
$ php artisan jwt:generate
$ php artisan serve
```
