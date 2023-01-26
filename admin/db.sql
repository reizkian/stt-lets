-- USER
CREATE TABLE user(id int not null auto_increment primary key, username varchar(50), password varchar(50));

-- STAFF
CREATE TABLE staff(id int not null auto_increment primary key, staff_name varchar(50), staff_role varchar(50), email varchar(50), staff_subject LONGTEXT, data_order int, file_name varchar(50));

-- HOME
CREATE TABLE home(id int not null auto_increment primary key, identifier varchar(50), content varchar(1000));

-- INFORMATION
CREATE TABLE information(id int not null auto_increment primary key, author varchar(50), title varchar(50), content LONGTEXT, created varchar(50), file_name varchar(50));

-- EDUCATION
CREATE TABLE head(id int not null auto_increment primary key, head_name varchar(50), head_role varchar(50), head_message LONGTEXT, file_name varchar(50));
INSERT INTO head(head_name, head_role, head_message, file_name) VALUES ("Rachmat T Manullang", "Ketua STT LETS", "Kekayaan suatu bangsa bukanlah sumber daya alamnya, tetapi manusianya. Manusia yang kaya bukanlah mereka yang hanya memiliki kepintaran atau karunia tetapi mereka yang memiliki panggilan, karakter dan kompetensi. Di tengah globalisasi yang dipenuhi dengan filosofi humanis dan relativisme umat Tuhan ditantang untuk membuktikan philosophy kerajaan Allah di atas semuanya.", "head.png");


-- PROGRAM
CREATE TABLE program(id int not null auto_increment primary key, program_level varchar(50), program_name varchar(100), program_description LONGTEXT, program_picture varchar(50), program_document varchar(50));