CREATE DATABASE IF NOT EXISTS date_time;

USE date_time;

CREATE TABLE datetimedata(
  id    int       NOT NULL AUTO_INCREMENT,
  date_name    char(100)  NULL ,
  note_name     char(100)  NULL ,
  PRIMARY KEY (id)
) ENGINE=InnoDB;

