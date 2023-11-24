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

TRUNCATE TABLE planeten;

ALTER TABLE planeten ADD (diameter int(11),
                          afstand int(11), 
                          massa int(11));

INSERT INTO planeten (naam, diameter, afstand, massa)
VALUES  ("Zon", 1392000, 0, 332.46),
        ("Mercurius", 4880, 57910000, 0),
        ("Venus", 12104, 108208930, 1),
        ("Aarde", 12756, 149597870, 1),
        ("Mars", 6794, 227936640, 0);

ALTER TABLE planeten
MODIFY naam varchar(255) NOT NULL;

ALTER TABLE planeten
MODIFY diameter int(11) NOT NULL;

ALTER TABLE planeten
MODIFY afstand int(11) NOT NULL;

ALTER TABLE planeten
MODIFY massa int(11) NOT NULL;

ALTER TABLE planeten 
ADD bezoek_datum DATE NULL;

INSERT INTO planeten (naam, diameter, afstand, massa, bezoek_datum)
VALUES ("Maan", 3476, 228000000, 0, '1969-07-20');