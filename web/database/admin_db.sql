DROP DATABASE IF EXISTS admin_db;
CREATE DATABASE admin_db;
USE admin_db;
CREATE TABLE IF NOT EXISTS user (
	id INT NOT NULL AUTO_INCREMENT,
	username VARCHAR(255),
	email VARCHAR(255),
	rang ENUM('administrator','standarduser','moderator','blocked'),
	PRIMARY KEY(id,username);
);

INSERT INTO user VALUES('Daniel Novotny','a@b.com','administrator');
INSERT INTO user VALUES('Florian Kibler','a@c.com','moderator');
INSERT INTO user VALUES('Janusz Gradonski','a@e.com','standarduser');
INSERT INTO user VALUES('Klaus Ableiting','e@r.com','blocked');