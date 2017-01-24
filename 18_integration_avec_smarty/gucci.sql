-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Mar 24 Janvier 2017 à 14:20
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
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `id` tinyint(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `popularity` tinyint(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `categorie`
--

INSERT INTO `categorie` (`id`, `name`, `popularity`) VALUES
(1, 'veste', 0),
(2, 'chaussure', 2),
(7, 'categorie1', 1);

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
(69, 3, 'jojo'),
(22, 3, 'Kids'),
(13, 2, 'Women'),
(17, 4, 'Cats and Dogs'),
(37, 5, 'Monkey'),
(39, 6, 'Birds'),
(44, 3, 'Cow');

-- --------------------------------------------------------

--
-- Structure de la table `menu_bas`
--

CREATE TABLE `menu_bas` (
  `id` int(10) UNSIGNED NOT NULL,
  `position` tinyint(4) NOT NULL DEFAULT '0',
  `name` varchar(255) NOT NULL DEFAULT 'menu_name'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `menu_bas`
--

INSERT INTO `menu_bas` (`id`, `position`, `name`) VALUES
(1, 2, 'Blog'),
(2, 1, 'About'),
(3, 1, 'Contact'),
(4, 1, 'Developers'),
(5, 1, 'Careers'),
(6, 1, 'Terms'),
(7, 1, 'Privacy'),
(8, 1, 'Copyright'),
(9, 6, 'cyril');

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
  `featured` tinyint(3) UNSIGNED NOT NULL DEFAULT '0',
  `menuId` tinyint(3) UNSIGNED NOT NULL,
  `categorieId` tinyint(3) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `description`, `image`, `featured`, `menuId`, `categorieId`) VALUES
(1, 'Veste', 127, 'Une belle veste', 'img/clothe.jpg', 5, 37, 1),
(3, 'Gucci ready to wear', 759, 'Notre produit le plus vendu', 'img/clothe.jpg', 0, 44, 7),
(4, 'Pull vert', 1254, 'Un beau pull', 'img/clothe.jpg', 6, 44, 1),
(5, 'String', 525, 'Très sexy ! Transparent !', 'img/string.jpg', 7, 13, 2),
(6, 'Chaussette', 125, 'Une description', 'img/clothe.jpg', 0, 22, 2),
(7, 'Nouveau pyjama', 200, 'Avec des étoiles jaunes', 'img/clothe.jpg', 0, 22, 7),
(8, 'Blouson', 589, 'Un super beau blouson', 'img/clothe.jpg', 0, 25, 1),
(9, 'Ceinture', 25, 'En peau de poisson pané', 'img/clothe.jpg', 0, 0, 2),
(15, 'Une robe rose', 150, 'Rose bonbon', './img/clothe.jpg', 5, 13, 0),
(18, 'Une ceinture', 100, 'Marron', './img/clothe.jpg', 10, 25, 0),
(19, 'Jupe', 228, 'Une jupe', './img/clothe.jpg', 0, 13, 2),
(20, 'ajout', 100, 'ajout', './img/clothe.jpg', 0, 0, 0),
(21, 'ajout', 100, 'ajout', './img/clothe.jpg', 0, 0, 0),
(22, 'ajout', 100, 'ajout', './img/clothe.jpg', 0, 0, 0),
(23, 'ajout', 100, 'ajout', './img/clothe.jpg', 0, 0, 0),
(24, 'ajout', 100, 'ajout', './img/clothe.jpg', 0, 0, 0),
(25, 'ajout', 100, 'ajout', './img/clothe.jpg', 0, 0, 0),
(26, 'ajout', 100, 'ajout', './img/clothe.jpg', 0, 0, 0),
(27, 'ajout', 100, 'ajout', './img/clothe.jpg', 0, 0, 0),
(28, 'ajout', 100, 'ajout', './img/clothe.jpg', 0, 0, 0),
(29, 'ajout', 100, 'ajout', './img/clothe.jpg', 0, 0, 0),
(30, 'ajout', 100, 'ajout', './img/clothe.jpg', 0, 0, 0),
(31, 'Titre', 15, 'Ma description', './img/clothe.jpg', 0, 0, 0),
(32, 'ajout', 100, 'ajout', './img/clothe.jpg', 0, 0, 0);

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
(1, 'Admin', 'Sudo', 'lydstyl@gmail.com', 1, '8fc6e3640de6ee46cfb4442d111f9458'),
(12, 'toto', 'toto', 'toto@toto.fr', 1, 'f71dbe52628a3f83a77ab494817525c6'),
(8, 'firstname', 'lastname', 'stephdumonceau@gmail.com', 0, 'ac0ddf9e65d57b6a56b2453386cd5db5');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Index pour la table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `menu_bas`
--
ALTER TABLE `menu_bas`
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
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id` tinyint(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;
--
-- AUTO_INCREMENT pour la table `menu_bas`
--
ALTER TABLE `menu_bas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
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
