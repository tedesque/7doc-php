FROM ubuntu:latest

ENV DEBIAN_FRONTEND noninteractive
ENV TZ=UTC

RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone

RUN apt-get update
RUN apt-get -y install software-properties-common
RUN add-apt-repository ppa:ondrej/php
RUN apt-get update 
RUN apt-get -y install php8.2
RUN apt-get -y install composer
RUN cd /var/www/html/ && composer create-project davidmeth/scuba-php:0.0.1

WORKDIR /var/www/html/scuba-php

CMD [ "php", "-S", "0.0.0.0:4242" ]


EXPOSE 4242

