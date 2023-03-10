-- USER
CREATE TABLE user(id int not null auto_increment primary key, username varchar(50), password varchar(50));

-- STAFF
CREATE TABLE staff(id int not null auto_increment primary key, staff_name varchar(50), staff_role varchar(50), email varchar(50), staff_subject LONGTEXT, data_order int, file_name varchar(50));

-- HOME
CREATE TABLE home(id int not null auto_increment primary key, identifier varchar(50), content varchar(1000));

-- INFORMATION
CREATE TABLE information(id int not null auto_increment primary key, author varchar(50), title varchar(50), content LONGTEXT, created varchar(50), file_name varchar(50));