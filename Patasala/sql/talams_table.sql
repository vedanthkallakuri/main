USE tracksongsdb;
CREATE table talams_table
(
    talam_id int AUTO_INCREMENT primary key,
    talam_name varchar(100) NOT NULL,
    talam_notation varchar(100) NOT NULL,
    student_user_id int,
    foreign key(student_user_id) references userData(user_id)

)ENGINE innoDb;