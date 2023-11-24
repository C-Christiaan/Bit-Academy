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