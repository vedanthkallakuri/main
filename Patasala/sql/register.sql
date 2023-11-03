CREATE DATABASE tracksongsdb;

USE tracksongsdb;

CREATE TABLE userData(
    user_id int NOT NULL AUTO_INCREMENT,
    user_firstname char(50) NULL, 
    user_lastname char(50) NULL, 
    user_email char(50) NULL, 
    user_username char(50) NULL, 
    user_password char(100) NULL, 
    user_isteacher boolean NOT NULL,
    teacher_code varchar(20),
    PRIMARY KEY (user_id)) 
    ENGINE = InnoDB;
)