
USE tracksongsdb;
CREATE table song_info
(
    song_id int AUTO_INCREMENT primary KEY,
    song_name varchar(50) NOT NULL,
    raga_id int NOT NULL,
    talam_id int NOT NULL,
    song_author varchar(100),
    song_composer varchar(100),
    song_date date NOT NULL,
    -- these two aren't actually correct, but to be able to upload a file into mysql will take time. also idk what the data type would be.
    -- we can have it so we store a link of the file in the database. hope that helps. empty set means it works :) 
    song_lyrics varchar(3000), 
    song_record varchar(8000),
    student_user_id int NOT NULL,
    teacher_user_id int NOT NULL,
    foreign key (student_user_id) references userData(user_id) -- int NOT NULL,
    -- teacher_user_id int NOT NULL
)ENGINE innoDb;