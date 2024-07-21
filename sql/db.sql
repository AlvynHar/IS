-- Active: 1719285786335@@127.0.0.1@3306@is
CREATE TABLE users(  
    `id` INT NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(255) NOT NULL,
    `username` VARCHAR(20) NOT NULL,
    `password` TEXT NOT NULL,
    `email` VARCHAR(200) NOT NULL,
    PRIMARY KEY (`id`)
);

CREATE TABLE contact(  
    `id` INT NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(20) NOT NULL,
    `email` VARCHAR(200) NOT NULL,
    `phone` INT(20) NOT NULL,
    `subject` VARCHAR(100) NOT NULL,
    `message` VARCHAR(300) NOT NULL,
    PRIMARY KEY (`id`)
);

CREATE TABLE admi(  
    `id` INT NOT NULL AUTO_INCREMENT,
    `username` VARCHAR(20) NOT NULL,
    `name` VARCHAR(255) NOT NULL,
    `passwrd` TEXT NOT NULL,
    PRIMARY KEY (`id`)
);


UPDATE users
SET username = 'testerr',
    email = 'testerr@gmail.com',
    password = 'cc03e747a6afbbcbf8be7668acfebee5',
    role = 'Admin'
WHERE id = 8;