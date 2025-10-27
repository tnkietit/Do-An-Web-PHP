# Dùng image PHP chính thức
FROM php:8.2-apache

# Copy toàn bộ mã nguồn vào thư mục web
COPY . /var/www/html/

# Mở port 80
EXPOSE 80

# Bật mod_rewrite nếu cần
RUN a2enmod rewrite
