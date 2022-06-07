#!/bin/bash

a2enmod rewrite

cd /var/www/html

composer create-project --prefer-dist laravel/laravel /var/www/html "7.*"
composer require laravel/ui:^2.4
composer require lcobucci/jwt:^3.3.3
composer require spatie/laravel-permission:3.17.0
php artisan ui vue --auth

chmod -R 777 /var/www/html/storage
echo yes | npm install && npm run dev

chown -R www-data:www-data /var/www/html

service apache2 restart