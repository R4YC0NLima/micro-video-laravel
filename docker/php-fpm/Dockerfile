#FROM jpaulolxm/php-7.4-fpm:1.6
FROM jpaulolxm/php-8-fpm:1.0.0

# xdebug with VSCODE
ENV XDEBUG_VERSION=3.0.4
RUN apk --no-cache add --virtual .build-deps \
        g++ \
        autoconf \
        make && \
    pecl install xdebug-${XDEBUG_VERSION} && \
    docker-php-ext-enable xdebug && \
    apk del .build-deps && \
    rm -r /tmp/pear/* && \
    echo -e "xdebug.mode=develop\n\
        xdebug.start_with_request=yes\n\
        xdebug.discover_client_host=false\n\
        xdebug.client_host=172.17.0.1\n\
        xdebug.client_port=9003\n\
        xdebug.idekey=\"PHPSTORM\"\n\
        xdebug.log=/var/www/html/www/xdebug.log" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini


# Change TimeZone
RUN apk add --update tzdata
ENV TZ=America/Manaus

# Expose ports
EXPOSE 9000
EXPOSE 9003

COPY entrypoint.sh /entrypoint.sh

RUN chmod +x /entrypoint.sh

WORKDIR /var/www/html
