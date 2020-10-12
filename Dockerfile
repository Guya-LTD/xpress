# FROM php:8.0-rc-fpm-alpine AS production

FROM php:8.0.0rc1-alpine AS production

# Create app directory
ENV WORK_DIR /usr/src/app
WORKDIR ${WORK_DIR}

COPY . ./

RUN composer install

CMD php -S 0.0.0.0:5000 -t public