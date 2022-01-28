-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  sam. 07 déc. 2019 à 01:31
-- Version du serveur :  5.7.21
-- Version de PHP :  5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `staca`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `cin` int(11) NOT NULL,
  `tel` int(11) NOT NULL,
  `role` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `mdp`, `cin`, `tel`, `role`) VALUES
('youssef', '1234', 9876490, 56565478, 0);

-- --------------------------------------------------------

--
-- Structure de la table `chat`
--

DROP TABLE IF EXISTS `chat`;
CREATE TABLE IF NOT EXISTS `chat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(255) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `chat`
--

INSERT INTO `chat` (`id`, `pseudo`, `message`) VALUES
(1, 'youssef', 'bonjour'),
(2, 'aaaa', 'cv?'),
(3, 'aymen', 'salut'),
(4, 'youssef', 'comment vas tu??'),
(5, 'wajih', 'salut'),
(6, 'wajih', 'salut'),
(7, 'wajih', 'aaaaa'),
(8, 'youssef', 'salut\r\n'),
(9, 'youyou', 'sssss');

-- --------------------------------------------------------

--
-- Structure de la table `events`
--

DROP TABLE IF EXISTS `events`;
CREATE TABLE IF NOT EXISTS `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `informations` varchar(255) NOT NULL,
  `DateDebut` date NOT NULL,
  `DateFin` date NOT NULL,
  `photo` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=556998 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `events`
--

INSERT INTO `events` (`id`, `name`, `phone`, `address`, `informations`, `DateDebut`, `DateFin`, `photo`) VALUES
(556997, 'Michelin Wheel', 54856522, 'mlsksd@lwkjs', 'Black friday', '2019-12-06', '2019-12-07', 'dunlop.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prix` float NOT NULL,
  `quantite` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2234 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id`, `nom`, `prix`, `quantite`, `image`) VALUES
(3, 'fnard', 120, 2, 'fnard.jpg'),
(6, 'yousseff', 150, 0, 'pare choc.jpg'),
(10, 'pare choc', 800, 3, 'pare choc.jpg'),
(13, 'Wheel', 160, 1, 'wheel.jfif'),
(15, 'pare choc bmw', 950, 10, 'bmw.jpg'),
(99, 'wheeeeeel2', 260, 3, 'wheel.jfif'),
(1014, 'retroviseur', 450, 10, 'bmw.jpg'),
(1919, 'taragi', 12, 10, 'pare choc.jpg'),
(2233, 'bechir', 20, 0, 'fnard.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `promo`
--

DROP TABLE IF EXISTS `promo`;
CREATE TABLE IF NOT EXISTS `promo` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `idProd` int(255) NOT NULL,
  `prix_nouveau` int(255) NOT NULL,
  `description` varchar(50) NOT NULL,
  `date_debut` date NOT NULL,
  `date_fin` date NOT NULL,
  `taux` int(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idPord` (`idProd`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `promo`
--

INSERT INTO `promo` (`id`, `idProd`, `prix_nouveau`, `description`, `date_debut`, `date_fin`, `taux`) VALUES
(25, 3, 52, 'mmm', '2019-12-06', '2019-12-13', 57),
(26, 1014, 225, 'pplplp', '2019-12-07', '2019-12-12', 50),
(27, 99, 100, 'popopo', '2019-12-07', '2019-12-08', 62),
(28, 6, 20, 'aqaqa', '2019-12-07', '2019-12-08', 87),
(29, 15, 100, 'mmmmm', '2019-12-07', '2019-12-14', 89),
(30, 1919, 10, 'nbnb', '2019-12-07', '2019-12-14', 17);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `promo`
--
ALTER TABLE `promo`
  ADD CONSTRAINT `promo_ibfk_1` FOREIGN KEY (`idProd`) REFERENCES `produit` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
