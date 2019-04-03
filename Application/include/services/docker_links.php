<?php
$user = "http://192.168.99.100:8084/";
$salon = "http://192.168.99.100:8087/";
$bookings = "http://192.168.99.100:8086/";
$notification = "???";
$payment = "???";

// docker run -i -p 8080:8080 -e DB_USERNAME=bwce -e DB_PASSWORD= -e DB_URL=jdbc:mysql://192.168.56.1:3306/db_salon chuamingyu/salon:1.0.0
// docker run -i -p 8081:8080 -e DB_USERNAME=bwce -e DB_PASSWORD= -e DB_URL=jdbc:mysql://192.168.56.1:3306/db_users chuamingyu/user:1.0.0
// docker run -i -p 8082:8080 -e DB_USERNAME=bwce -e DB_PASSWORD= -e DB_URL=jdbc:mysql://192.168.56.1:3306/bookings chuamingyu/bookings:1.0.0
// docker run -i -p 8083:8080 -e DB_USERNAME=bwce -e DB_PASSWORD= -e DB_URL=jdbc:mysql://192.168.56.1:3306/payment chuamingyu/payment:1.0.0
// docker run -i -p 8084:8080 -e DB_USERNAME=bwce -e DB_PASSWORD= -e DB_URL=jdbc:mysql://192.168.56.1:3306/db_users my/user:1.0.0
// docker run -i -p 8085:8080 -e DB_USERNAME=bwce -e DB_PASSWORD= -e DB_URL=jdbc:mysql://192.168.56.1:3306/payment my/payment:1.0.0
// docker run -i -p 8086:8080 -e DB_USERNAME=bwce -e DB_PASSWORD= -e DB_URL=jdbc:mysql://192.168.56.1:3306/bookings -e AMQP_PORT=192.168.56.1:5672 -e AMQP_USERNAME=guest -e AMQP_PASSWORD=guest my/bookings:1.0.1
// docker run -i -p 8087:8080 -e DB_USERNAME=bwce -e DB_PASSWORD= -e DB_URL=jdbc:mysql://192.168.56.1:3306/db_salon my/salon:1.0.2
?>