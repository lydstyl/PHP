-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Ven 27 Janvier 2017 à 15:45
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `integration`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL DEFAULT 'title',
  `image` varchar(255) NOT NULL DEFAULT 'http://placehold.it/225x140',
  `paragraphe` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `article`
--

INSERT INTO `article` (`id`, `title`, `image`, `paragraphe`) VALUES
(8, 'mon super titre', 'http://placehold.it/225x140', 'Mon super paragraphe qui est trop intéressant.'),
(9, 'YOUR TITLE 2 HERE', 'http://placehold.it/225x140', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip.'),
(10, 'YOUR TITLE 3 HERE', 'http://placehold.it/225x140', 'un text\r\n                    \r\n                    \r\n                    \r\n                    \r\n                    \r\n                    \r\n                    \r\n                    '),
(11, 'Titre de Stéphane', 'http://placehold.it/225x140', '4 Vestibulumaccumsan egestibulum eu justo convallis augue estas aenean elit intesque sed.        \r\n                    \r\n                    \r\n                    \r\n                    ');

-- --------------------------------------------------------

--
-- Structure de la table `link`
--

CREATE TABLE `link` (
  `id` int(10) UNSIGNED NOT NULL,
  `position` tinyint(3) UNSIGNED NOT NULL DEFAULT '1',
  `name` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `link`
--

INSERT INTO `link` (`id`, `position`, `name`) VALUES
(1, 1, 'Lorem ipsum dolor sit'),
(2, 2, 'Amet consectetur'),
(4, 3, 'Praesent vel sem id'),
(6, 4, 'Curabitur hendrerit est'),
(12, 6, 'Cras id augue nunc'),
(13, 7, 'In nec justo non'),
(14, 8, 'Vivamus mollis enim ut'),
(15, 9, 'Curabitur hendrerit est'),
(16, 10, 'Sed a nulla urna'),
(17, 5, 'Aliquam eget erat nec sapien');

-- --------------------------------------------------------

--
-- Structure de la table `menu`
--

CREATE TABLE `menu` (
  `id` int(10) UNSIGNED NOT NULL,
  `position` tinyint(3) UNSIGNED NOT NULL DEFAULT '1',
  `name` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `menu`
--

INSERT INTO `menu` (`id`, `position`, `name`) VALUES
(1, 1, 'Home'),
(2, 2, 'Style demo'),
(3, 3, 'full width'),
(4, 4, 'dropdown'),
(6, 5, 'portfolio'),
(11, 1, 'ajout');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `link`
--
ALTER TABLE `link`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT pour la table `link`
--
ALTER TABLE `link`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT pour la table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
