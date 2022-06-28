FROM php
RUN --mount=type=tmpfs,destination=/var/cache/apt \
    --mount=type=tmpfs,destination=/var/lib/apt \
    apt-get update; \
    apt-get install -y git unzip
RUN docker-php-ext-install pdo_mysql pdo
COPY --from=composer/composer /usr/bin/composer /usr/local/bin/composer
WORKDIR /var/www/html
