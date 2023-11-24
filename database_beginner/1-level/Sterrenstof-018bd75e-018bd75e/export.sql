DROP DATABASE IF EXISTS `sterrenstelsel`;

CREATE DATABASE `sterrenstelsel`;

USE `sterrenstelsel`;

CREATE TABLE `planeten` (
	naam varchar(255)
);

INSERT INTO `planeten` (naam)
VALUES ("Zon");

INSERT INTO `planeten` (naam)
VALUES ("Mercurius");

INSERT INTO `planeten` (naam)
VALUES ("Venus");

INSERT INTO `planeten` (naam)
VALUES ("Aarde");

INSERT INTO `planeten` (naam)
VALUES ("Mars");

SELECT *
FROM planeten;

