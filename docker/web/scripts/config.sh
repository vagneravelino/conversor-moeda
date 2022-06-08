#!/bin/bash

a2enmod rewrite

cd /var/www/html

composer install

chmod -R 777 /var/www/html/storage
echo yes | npm install && npm run dev

chown -R www-data:www-data /var/www/html

service apache2 restart