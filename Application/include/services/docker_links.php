<?php
$user = "http://192.168.99.100:8084/";
// $user = "http://adrianchang2017-eval-test.apigee.net/";
$salon = "http://192.168.99.100:8087/";
// $bookings = "http://192.168.99.100:8091/";
$bookings = "http://ZENBOOKMY:8082/";
$notification_link = "http://192.168.99.100:8085/";
// $notification_link = "http://ZENBOOKMY:8080/";
$payment_link = "http://192.168.99.100:8090/";
$uid = 1;
$businessID = 1;
// docker run -i -p 8084:8080 -e DB_USERNAME=bwce -e DB_PASSWORD= -e DB_URL=jdbc:mysql://192.168.56.1:3306/db_users my/user:1.0.0
// docker run -i -p 8087:8080 -e DB_USERNAME=bwce -e DB_PASSWORD= -e DB_URL=jdbc:mysql://192.168.56.1:3306/db_salon my/salon:1.0.2
// docker run -i -p 8085:8080 -e DB_USERNAME=bwce -e DB_PASSWORD= -e DB_URL=jdbc:mysql://192.168.56.1:3306/notifications -e AMQP_PORT=192.168.56.1:5672 -e AMQP_USERNAME=bwce -e AMQP_PASSWORD=bwce my/notification:1.0.1
// docker run -i -p 8090:8080 -e DB_USERNAME=bwce -e DB_PASSWORD= -e DB_URL=jdbc:mysql://192.168.56.1:3306/payment my/payment:1.0.0
// docker run -i -p 8091:8080 -e DB_USERNAME=bwce -e DB_PASSWORD= -e DB_URL=jdbc:mysql://192.168.56.1:3306/bookings -e AMQP_PORT=192.168.56.1:5672 -e AMQP_USERNAME=bwce -e AMQP_PASSWORD=bwce my/bookings:1.0.2
// docker run -i -p 8092:8080 -e DB_USERNAME=bwce -e DB_PASSWORD= -e DB_URL=jdbc:mysql://192.168.56.1:3306/bookings -e AMQP_PORT=192.168.56.1:5672 -e AMQP_USERNAME=bwce -e AMQP_PASSWORD=bwce -e HTTPHOSTNAME=ZENBOOKMY -e HTTPHOSTPORT=8087 my/bookings:1.0.3
?>