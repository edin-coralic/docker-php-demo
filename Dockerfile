FROM php:alpine
ADD . /app
WORKDIR /app
EXPOSE 80
HEALTHCHECK --interval=10s --timeout=5s CMD /app/healthcheck.sh
CMD ["php", "-S", "0.0.0.0:80", "app.php", "2>&1"]
