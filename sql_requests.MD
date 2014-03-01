== Requêtes SQL ==

-- Création d'un utilisateur SQL --

CREATE USER 'etiennev'@'%' IDENTIFIED BY  '***';

GRANT SELECT , 
INSERT ,

UPDATE ,
DELETE ,
CREATE ,
DROP ,
ALTER ,
SHOW DATABASES ,
SHOW VIEW ON * . * TO  'etiennev'@'%' IDENTIFIED BY  '***' WITH MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0 ;

-- Création de tables --

CREATE TABLE musician(
id INT PRIMARY KEY NOT NULL ,
firstname VARCHAR( 50 ) ,
lastname VARCHAR( 50 ) ,
biography TEXT
);

ALTER TABLE  `musician` CHANGE  `id`  `id` INT( 11 ) NOT NULL AUTO_INCREMENT ;

CREATE TABLE group_of_musicians(
id INT PRIMARY KEY NOT NULL ,
label VARCHAR( 50 ) ,
description TEXT,
have_to_be_posted BOOLEAN
);

ALTER TABLE  `group_of_musicians` CHANGE  `id`  `id` INT( 11 ) NOT NULL AUTO_INCREMENT ;

CREATE TABLE to_be_part_of(
id_musician INT NOT NULL ,
id_group_of_musicians INT NOT NULL ,
PRIMARY KEY ( id_musician, id_group_of_musicians )
);

-- insertion --

INSERT INTO  `etienne_vincent_database`.`musician` (
`id` ,
`firstname` ,
`lastname` ,
`biography`
)
VALUES (
NULL ,  'etienne',  'vincent', 'Etienne Vincent commence la guitare rock à treize ans et découvre ensuite le jazz grâce au guitariste Gilles Trial. Il suit son enseignement à Jazz Action Valence jusqu'' en 1999, puis étudie à l''ENM de Villeurbanne et au CNR de Lyon. Il y obtient son DEM jazz en 2004.'
), (
NULL ,  'Noé',  'Macary', 'Noé Macary, pianiste/claviériste, joue dans de nombreuses formations pour lesquelles il arrange et compose. Son penchant pour les musiques dansantes et populaires l''a amené à fonder (ou à se fondre dans...) plusieurs projets aux esthétiques bien différentes, allant de la pop-rock anglaise des années 70 (A*Song & the B*sides) au groove des musiques actuelles (Trio Magochi), en passant par la musique traditionnelle réunionnaise (Fonnzié)...et le jazz (Raphaël Reiter trio), véritable racine commune à toutes ses recherches stylistiques.'
);

INSERT INTO  `etienne_vincent_database`.`group_of_musicians` (
`id` ,
`label` ,
`description` ,
`have_to_be_posted`
)
VALUES (
NULL ,  'etienne vincent', NULL ,  '0'
), (
NULL ,  'etienne vincent quartet', 'Nouveau projet du guitariste Etienne Vincent, adepte d’une musique vivante, mélodique et nuancée. Privilégiant l''écoute et le dialogue, le quartet joue une musique de l’instant, où les influences du guitariste (Peter Bernstein, John Abercrombie...) se fondent dans un univers très personnel.', '1'
);

INSERT INTO  `etienne_vincent_database`.`to_be_part_of` (
`id_musician` ,
`id_group_of_musicians`
)
VALUES (
'1',  '2'
), (
'2',  '2'
);