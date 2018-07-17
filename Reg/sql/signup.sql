mysql -u root -p; 
create database docker;
use docker;
create table signup ( id int(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,  FirstName varchar(255) NOT NULL,  MiddelName varchar(255) NOT NULL,  LastName varchar(255) NOT NULL,  EmailID varchar(50), Password varchar(50), Mobile int(10), Red_date TIMESTAMP);
