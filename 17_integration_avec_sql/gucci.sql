-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Mar 17 Janvier 2017 à 15:55
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `gucci`
--

-- --------------------------------------------------------

--
-- Structure de la table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `position` tinyint(3) UNSIGNED NOT NULL DEFAULT '0',
  `name` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `menu`
--

INSERT INTO `menu` (`id`, `position`, `name`) VALUES
(25, 1, 'Men'),
(22, 3, 'Kids'),
(13, 2, 'Women'),
(17, 4, 'Cats and Dogs'),
(37, 5, 'Monkey'),
(39, 6, 'Birds'),
(44, 3, 'Cow');

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL DEFAULT '[nom à définir]',
  `price` int(11) NOT NULL DEFAULT '0',
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'img/clothe.jpg',
  `featured` tinyint(3) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `description`, `image`, `featured`) VALUES
(1, 'Veste', 127, 'Une belle veste', 'img/clothe.jpg', 5),
(3, 'Gucci ready to wear', 759, 'Notre produit le plus vendu', 'img/clothe.jpg', 0),
(4, 'Pull vert', 1254, 'Un beau pull', 'img/clothe.jpg', 6),
(5, 'String', 525, 'Très sexy ! Presque transparent !', 'img/string.jpg', 7),
(6, 'Chaussette', 125, 'Une description', 'img/clothe.jpg', 0),
(7, 'Nouveau pyjama', 200, 'Avec des étoiles jaunes', 'img/clothe.jpg', 0),
(8, 'Blouson', 589, 'Un super beau blouson', 'img/clothe.jpg', 0),
(9, 'Ceinture', 25, 'En peau de poisson pané', 'img/clothe.jpg', 0),
(15, 'Une robe rose', 150, 'Rose bonbon', './img/clothe.jpg', 5),
(18, 'Une ceinture', 100, 'Marron', './img/clothe.jpg', 10),
(19, 'ajout', 100, 'ajout', './img/clothe.jpg', 0),
(20, 'ajout', 100, 'ajout', './img/clothe.jpg', 0),
(21, 'ajout', 100, 'ajout', './img/clothe.jpg', 0),
(22, 'ajout', 100, 'ajout', './img/clothe.jpg', 0),
(23, 'ajout', 100, 'ajout', './img/clothe.jpg', 0),
(24, 'ajout', 100, 'ajout', './img/clothe.jpg', 0),
(25, 'ajout', 100, 'ajout', './img/clothe.jpg', 0),
(26, 'ajout', 100, 'ajout', './img/clothe.jpg', 0),
(27, 'ajout', 100, 'ajout', './img/clothe.jpg', 0),
(28, 'ajout', 100, 'ajout', './img/clothe.jpg', 0),
(29, 'ajout', 100, 'ajout', './img/clothe.jpg', 0),
(30, 'ajout', 100, 'ajout', './img/clothe.jpg', 0),
(31, 'Titre', 15, 'Ma description', './img/clothe.jpg', 0),
(32, 'ajout', 100, 'ajout', './img/clothe.jpg', 0);

-- --------------------------------------------------------

--
-- Structure de la table `slider`
--

CREATE TABLE `slider` (
  `id` tinyint(3) UNSIGNED NOT NULL,
  `position` tinyint(4) NOT NULL DEFAULT '0',
  `image_name` varchar(255) NOT NULL DEFAULT 'bigImage.jpg'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `slider`
--

INSERT INTO `slider` (`id`, `position`, `image_name`) VALUES
(1, 0, 'bigImage.jpg'),
(4, 1, 'bigImage3.jpg'),
(3, 2, 'bigImage2.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `submenu`
--

CREATE TABLE `submenu` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_menu` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `submenu`
--

INSERT INTO `submenu` (`id`, `id_menu`, `name`) VALUES
(1, 1, 'Shoes'),
(2, 1, 'Ready to wear'),
(3, 2, 'Shoes test'),
(4, 2, 'Ready to wear');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(10) UNSIGNED NOT NULL,
  `firstname` varchar(255) NOT NULL DEFAULT 'firstname',
  `lastname` varchar(255) NOT NULL DEFAULT 'lastname',
  `mail` varchar(255) NOT NULL,
  `is_admin` tinyint(3) UNSIGNED NOT NULL DEFAULT '0',
  `password` varchar(32) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `firstname`, `lastname`, `mail`, `is_admin`, `password`) VALUES
(1, 'Admin', 'Sudo', 'lydstyl@gmail.com', 1, 'b006795cc3831a1af007259d55b2d6a0'),
(12, 'toto', 'toto', 'toto@toto.fr', 0, 'f71dbe52628a3f83a77ab494817525c6'),
(8, 'firstname', 'lastname', 'stephdumonceau@gmail.com', 0, 'ac0ddf9e65d57b6a56b2453386cd5db5');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `submenu`
--
ALTER TABLE `submenu`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mail` (`mail`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
--
-- AUTO_INCREMENT pour la table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT pour la table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT pour la table `submenu`
--
ALTER TABLE `submenu`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
