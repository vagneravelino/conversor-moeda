FROM mysql:8.0.19

SHELL ["/bin/bash", "-c"]

ENV MYSQL_ROOT_PASSWORD 1q2w3e4r

RUN apt-key adv --keyserver keyserver.ubuntu.com --recv-keys 467B942D3A79BD29
RUN apt update -y && \
    apt install apt-utils build-essential systemd net-tools curl locales git zip unzip vim -y

RUN echo "default_authentication_plugin=mysql_native_password" >> /etc/mysql/my.cnf

WORKDIR /root

RUN mkdir -p /root/scripts

EXPOSE 3306/tcp

CMD ["mysqld"]