<?php
$user = "http://192.168.99.100:8081/";
$salon = "http://192.168.99.100:8080/";
$bookings = "http://192.168.99.100:8082/";
$notification = "???";
$payment = "???";

// docker run -i -p 8080:8080 -e DB_USERNAME=bwce -e DB_PASSWORD= -e DB_URL=jdbc:mysql://192.168.56.1:3306/db_salon chuamingyu/salon:1.0.0
// docker run -i -p 8081:8080 -e DB_USERNAME=bwce -e DB_PASSWORD= -e DB_URL=jdbc:mysql://192.168.56.1:3306/db_users chuamingyu/user:1.0.0
// docker run -i -p 8082:8080 -e DB_USERNAME=bwce -e DB_PASSWORD= -e DB_URL=jdbc:mysql://192.168.56.1:3306/bookings chuamingyu/bookings:1.0.0
// docker run -i -p 8083:8080 -e DB_USERNAME=bwce -e DB_PASSWORD= -e DB_URL=jdbc:mysql://192.168.56.1:3306/payment chuamingyu/payment:1.0.0
// 
?>