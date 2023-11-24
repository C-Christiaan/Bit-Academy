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