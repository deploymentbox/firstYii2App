FROM debian:jessie

MAINTAINER Vincent Composieux <vincent.composieux@gmail.com>

RUN apt-get update && apt-get install -y nginx

ADD nginx.conf /etc/nginx/
ADD yii2.conf /etc/nginx/sites-available/

RUN ln -s /etc/nginx/sites-available/yii2.conf /etc/nginx/sites-enabled/yii2
RUN rm /etc/nginx/sites-enabled/default

RUN echo "upstream php-upstream { server php:9000; }" > /etc/nginx/conf.d/upstream.conf

RUN usermod -u 1000 www-data

CMD ["nginx"]

EXPOSE 80
EXPOSE 443
