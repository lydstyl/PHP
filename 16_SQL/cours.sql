-- SELECTION DE DONNEES
SELECT * FROM `User`;
SELECT `nom`,`prenom` FROM `User`;
SELECT * FROM `User` WHERE id=`2`;
SELECT * FROM `User` ORDER BY `nom`;
SELECT * FROM `User` ORDER BY `id` DESC;
SELECT * FROM `User` WHERE `prenom`="Mathieu" ORDER BY `nom` DESC;
-- INSERTION
INSERT INTO `User` VALUES(5, `bbb`,``,`toto@live.fr`);
INSERT INTO `User`(`id`,`nom`,`email`) VALUES(6, `bbb`,``,`toto@live.fr`),(7,`ddd`,`ddd@live.fr`);
INSERT INTO `User` SET `id`="1",`nom`="Dabir",`prenom`="Maurice";
/*SUPRESSION DE DONNEES*/
DELETE FROM `User` WHERE `prenom`='Mathieu';
DELETE FROM `User` WHERE `id`='4';
DELETE FROM `User` WHERE `id`='4' OR `id`='1';