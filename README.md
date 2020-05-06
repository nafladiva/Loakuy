# Loakuy
---

## How to use
Clone this repository
```console
git clone https://github.com/nafladiva/Loakuy.git
```

Navigate to the directory
```console
cd Loakuy
```

Run composer install
```console
composer install
```

Copy .env file with example .env.example
```console
copy .env.example .env
```

Generate new key for Laravel Application
```console
php artisan key:generate
```

Create new database in phpmyadmin and its name is 'Loakuy'

Set the database in .env file

Run migration
```console
php artisan migrate
php artisan db:seed
```

Run the application
```console
php artisan serve
```

User login
- Email : test@test.com
- Password : 12345678