# Image PHP + Apache
FROM php:8.2-apache

# Copy mã nguồn vào DocumentRoot của Apache
COPY . /var/www/html/

# Bật mod_rewrite (không bắt buộc nếu chỉ có index.php)
RUN a2enmod rewrite

# Apache mặc định chạy bằng lệnh apache2-foreground (đã có trong base image)
EXPOSE 80
