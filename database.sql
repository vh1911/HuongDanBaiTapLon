CREATE DATABASE tutorial_database;

USE tutorial_database;

CREATE TABLE tutorials (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    description TEXT,
    reg_date TIMESTAMP
);

INSERT INTO tutorials (title, description)
VALUES ('C Programming', 'Learn the basics of C programming language'),
       ('C++ Programming', 'Master object-oriented programming with C++');
