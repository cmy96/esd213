# esd213
A-Cut-Above Application
Contains codes for consumer website

UI
Put the codes found in the application folder in the wamp folder and ensure that wamp is running.
Open up the file - docker-links.php and edit the url parameters of all the services inside to the correct one that is running on the local host

Microservices
Please build a base image using the AMQP plugins found in the AMQP folder

Then in each of the individual folders for the microservice, import in the sql scripts

Then build the base images for each of the microservice, ensuring that Notification and Bookings both use the base image with the AMQP plugin

Then run the images with the following commands

User - docker run -i -p 8084:8080 -e DB_USERNAME=bwce -e DB_PASSWORD= -e DB_URL=jdbc:mysql://192.168.56.1:3306/db_users my/user:1.0.0
Salon - docker run -i -p 8087:8080 -e DB_USERNAME=bwce -e DB_PASSWORD= -e DB_URL=jdbc:mysql://192.168.56.1:3306/db_salon my/salon:1.0.0
Notification - docker run -i -p 8085:8080 -e DB_USERNAME=bwce -e DB_PASSWORD= -e DB_URL=jdbc:mysql://192.168.56.1:3306/notifications -e AMQP_PORT=192.168.56.1:5672 -e AMQP_USERNAME=bwce -e AMQP_PASSWORD=bwce my/notification:1.0.0
Payment - docker run -i -p 8090:8080 -e DB_USERNAME=bwce -e DB_PASSWORD= -e DB_URL=jdbc:mysql://192.168.56.1:3306/payment my/payment:1.0.0
Bookings - docker run -i -p 8091:8080 -e DB_USERNAME=bwce -e DB_PASSWORD= -e DB_URL=jdbc:mysql://192.168.56.1:3306/bookings -e AMQP_PORT=192.168.56.1:5672 -e AMQP_USERNAME=bwce -e AMQP_PASSWORD=bwce my/bookings:1.0.0

After running the dockers, expose the ports that is running the User microservice using Ngrok. Then use apigee to configure a reverse proxy to the port.

