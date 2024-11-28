docker build -t php-app .
docker run -d -p 8080:80 php-app
