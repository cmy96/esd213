DROP DATABASE IF EXISTS Payment;
CREATE DATABASE IF NOT EXISTS Payment DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE Payment;

CREATE TABLE Payments (
  PaymentID INT AUTO_INCREMENT PRIMARY KEY,
  SessionID int(11) NOT NULL,
  BID int(11) NOT NULL,
  timeslot datetime NOT NULL,
  Amount float(200,2) NOT NULL
);

INSERT INTO `payments`(`SessionID`, `BID`, `timeslot`, `Amount`) VALUES (1,1,'2002-05-30 09:00:00',15.00);
INSERT INTO `payments`(`SessionID`, `BID`, `timeslot`, `Amount`) VALUES (1,1,'2004-05-30 10:00:00',33.00);

