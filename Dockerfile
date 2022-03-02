FROM php:8.1.1-fpm-alpine
WORKDIR /app

RUN apk --update upgrade
RUN apk add --no-cache \
		acl \
		fcgi \
		file \
		gettext \
		git \
		gnu-libiconv \
	;

RUN apk add --update bash


RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN curl -sS https://get.symfony.com/cli/installer | bash && mv /root/.symfony/bin/symfony /usr/local/bin/symfony

COPY ./ /var/www/symfony

