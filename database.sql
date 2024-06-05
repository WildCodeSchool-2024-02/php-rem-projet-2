CREATE DATABASE template_projet2

USE template_projet2;

CREATE TABLE item (
    id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    title VARCHAR(255) NOT NULL
);

INSERT INTO item (title) VALUES ('test1'), ('test2');