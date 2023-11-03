USE tracksongsdb;
CREATE table ragas_table
(
    raga_id int AUTO_INCREMENT primary key,
    raga_name varchar(75) NOT NULL,
    raga_arohanam varchar(100) NOT NULL,
    raga_avarohanam varchar(100) NOT NULL,
    student_user_id int,
    foreign key(student_user_id) references userData(user_id)
)ENGINE innoDb;