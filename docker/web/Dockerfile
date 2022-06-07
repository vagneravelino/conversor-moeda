FROM php:7.4-apache

WORKDIR /root

RUN apt update -y && \
    apt install apt-utils build-essential systemd net-tools curl locales git zip unzip nano vim -y

RUN apt install -y libpq-dev libfreetype6-dev libpng-dev zlib1g-dev \
        libzip-dev graphviz libpspell-dev aspell-en libmcrypt-dev libicu-dev libxml2-dev libldap2-dev  \
        libssl-dev libxslt-dev libkrb5-dev libldb-dev libcurl3-dev \
        libsnmp-dev librecode0 librecode-dev libbz2-dev libc-client-dev 

RUN docker-php-ext-configure gd 
RUN docker-php-ext-install gd
RUN docker-php-ext-install -j$(nproc) gd    

# Instalar Extensões  
RUN docker-php-ext-install opcache
RUN yes | pecl install xdebug \
    && echo "zend_extension=$(find /usr/local/lib/php/extensions/ -name xdebug.so)" > /usr/local/etc/php/conf.d/xdebug.ini \
    && echo "xdebug.remote_enable=on" >> /usr/local/etc/php/conf.d/xdebug.ini \
    && echo "xdebug.remote_autostart=off" >> /usr/local/etc/php/conf.d/xdebug.ini
RUN docker-php-ext-install soap
RUN docker-php-ext-install ftp
RUN docker-php-ext-install xsl
RUN docker-php-ext-install bcmath
RUN docker-php-ext-install calendar
RUN docker-php-ext-install ctype
RUN docker-php-ext-install dba
RUN docker-php-ext-install dom
RUN docker-php-ext-install zip
RUN docker-php-ext-install session
RUN docker-php-ext-configure ldap --with-libdir=lib/x86_64-linux-gnu
RUN docker-php-ext-install ldap
RUN docker-php-ext-install json
RUN docker-php-ext-install sockets
RUN docker-php-ext-install pdo
RUN docker-php-ext-install tokenizer
RUN docker-php-ext-install pdo_mysql 
RUN docker-php-ext-install intl
RUN docker-php-ext-install mysqli
RUN docker-php-ext-install curl
RUN docker-php-ext-install exif
RUN docker-php-ext-install fileinfo
RUN docker-php-ext-install gettext
RUN docker-php-ext-install iconv
RUN docker-php-ext-install pcntl
RUN docker-php-ext-install phar
RUN docker-php-ext-install posix
RUN docker-php-ext-install pspell
RUN docker-php-ext-install shmop
RUN docker-php-ext-install simplexml
RUN docker-php-ext-install snmp
RUN docker-php-ext-install sysvmsg
RUN docker-php-ext-install sysvsem
RUN docker-php-ext-install sysvshm
# RUN docker-php-ext-install tidy
RUN docker-php-ext-install xml
RUN docker-php-ext-install xmlrpc
RUN docker-php-ext-install xmlwriter             
RUN docker-php-ext-install bz2
RUN docker-php-ext-configure imap --with-kerberos --with-imap-ssl
RUN docker-php-ext-install imap

RUN    cd ~ && \
    curl -sS https://getcomposer.org/installer -o composer-setup.php && \
    php composer-setup.php --install-dir=/usr/local/bin --filename=composer

RUN curl -sL https://deb.nodesource.com/setup_12.x | bash - && \
    apt install -y nodejs

# Limpar Cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

RUN mkdir -p /home/www/scripts

RUN groupadd -g 1000 www
RUN useradd -u 1000 -ms /bin/bash -g www www

RUN passwd -d www

COPY --chown=www:www . /var/www/html

WORKDIR /var/www/html
