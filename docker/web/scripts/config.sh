#!/bin/bash

a2enmod rewrite

cd /var/www/html

composer install
composer dump-autoload

chmod -R 777 /var/www/html/storage
chmod -R 777 /var/www/html/bootstrap

echo yes | npm install && npm run dev

cp .env.app .env

chown -R www-data:www-data /var/www/html

service apache2 restart