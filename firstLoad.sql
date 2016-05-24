DROP TABLE IF EXISTS scp_user;
CREATE TABLE scp_user(
    user_id int(11) unsigned NOT NULL AUTO_INCREMENT primary key,
    user_username varchar(30) NOT NULL,
    user_email varchar(30) NOT NULL,
    user_password varchar(255) NOT NULL,
    user_role int(2) NOT NULL,
    
    user_fname varchar(60) NOT NULL,
    user_lname varchar(60) NOT NULL,
    user_gender int(2) NOT NULL,
    user_birthday time NOT NULL
);