# Dùng image PHP + Apache
FROM php:8.2-apache

# Cài extension PHP cho MySQL (PDO + mysqli)
RUN docker-php-ext-install pdo pdo_mysql mysqli

# (Tuỳ chọn) Bật mod_rewrite và cho phép .htaccess hoạt động
RUN a2enmod rewrite \
 && sed -i 's/AllowOverride None/AllowOverride All/g' /etc/apache2/apache2.conf

# Thư mục làm việc của web
WORKDIR /var/www/html

# Copy source vào container
COPY . /var/www/html

# (Tuỳ chọn) Cài composer & build nếu có composer.json
# RUN apt-get update && apt-get install -y git unzip \
#   && curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer \
#   && if [ -f composer.json ]; then composer install --no-dev --optimize-autoloader; fi

EXPOSE 80

CMD ["apache2-foreground"]
