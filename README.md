# Ecommerce App (Laravel)

This is a Laravel-based authentication app designed to demonstrate cross-domain login using Sanctum with a paired app: [foodpanda-app](https://github.com/yourname/foodpanda-app).

## ⚙ Requirements

- PHP 8.2+
- Composer
- Laravel 11
- MySQL

## 🛠 Setup Instructions

```bash
git clone https://github.com/yourname/ecommerce-app.git
cd ecommerce-app
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan db:seed  # Optional
php artisan serve
