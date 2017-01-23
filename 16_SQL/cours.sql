-- SELECTION DE DONNEES
SELECT * FROM `User`;
SELECT `nom`,`prenom` FROM `User`;
SELECT * FROM `User` WHERE id=`2`;
SELECT * FROM `User` ORDER BY `nom`;
SELECT * FROM `User` ORDER BY `id` DESC;
SELECT * FROM `User` WHERE `prenom`="Mathieu" ORDER BY `nom` DESC;
-- INSERTION
INSERT INTO `User` VALUES(5, 'bbb','','toto@live.fr');
INSERT INTO `User`(`id`,`nom`,`email`) VALUES(6, 'bbb','','toto@live.fr'),(7,'ddd','ddd@live.fr');
INSERT INTO `User` SET `id`="1",`nom`="Dabir",`prenom`="Maurice";
/*SUPRESSION DE DONNEES*/
DELETE FROM `User` WHERE `prenom`='Mathieu';
DELETE FROM `User` WHERE `id`='4';
DELETE FROM `User` WHERE `id`='4' OR `id`='1';
-- TYPE DE DONNEES
INT --> entier
VARCHAR --> 1 à 255
TEXT --> 1 à 512
DATE --> 11/02/2012
-- REQUETE PLUS COMPLIQUEE
SELECT * FROM `user` WHERE `nom` LIKE "%n%" AND `prenom` LIKE '%a%' AND `id` != '0';
-- LIMITER LE NOMBRE DE RESULTATS
SELECT * FROM `user` WHERE `nom` NOT LIKE '%b%' LIMIT 1; -- n'affiche ici qu'un seul résultat 
LIMIT 5 -- 5 premiers résultats
LIMIT 5,10 --remonte les résultats 6 à 15. 5 est l'offset
-- METTRE A JOUR DES DONNEES
UPDATE `user` SET `nom`='eeee', `prenom`='eee' WHERE `id`='1'
-- DELETE
DELETE FROM `user` WHERE `id`=2
-- JOINTURE
/*  Table user --> id, nom, prenom
    Table adress --> id, user, ville, cp, rue, numéro */
SELECT * FROM `user` AS us LEFT JOIN `adress` AS ad ON us.id = ad.user
SELECT us.nom, ad.cp FROM `user` AS us LEFT JOIN `adress` AS ad ON us.id = ad.user
/*  LEFT contrainte table user
    RIGHT contrainte table adress
    INNER comme requète sur plusieurs table
    FULL --> pas compatible avec tout */