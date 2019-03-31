DROP DATABASE IF EXISTS Notifications;
CREATE DATABASE IF NOT EXISTS Notifications;
USE Notifications;

CREATE TABLE Telegram (
  MessageID INT AUTO_INCREMENT PRIMARY KEY,
  TelegramID varchar(200) NOT NULL,
  TextMessage varchar(99999) NOT NULL
);

CREATE TABLE Email (
  MessageID INT AUTO_INCREMENT PRIMARY KEY,
  emailAddress varchar(200) NOT NULL,
  textMessage varchar(99999) NOT NULL
);

