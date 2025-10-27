# Sử dụng image Node.js chính thức
FROM node:18

# Đặt thư mục làm việc
WORKDIR /app

# Sao chép toàn bộ file vào container
COPY . .

# Cài đặt dependencies
RUN npm install

# Mở cổng
EXPOSE 3000

# Chạy ứng dụng
CMD ["npm", "start"]
