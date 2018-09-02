FROM php:alpine
ADD . /app
WORKDIR /app
EXPOSE 80
CMD ["php", "-S", "0.0.0.0:80", "app.php", "2>&1"]
