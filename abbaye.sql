-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 19 oct. 2021 à 18:42
-- Version du serveur :  8.0.21
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `abbaye`
--
CREATE DATABASE IF NOT EXISTS `abbaye` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `abbaye`;

-- --------------------------------------------------------

--
-- Structure de la table `beer`
--

DROP TABLE IF EXISTS `beer`;
CREATE TABLE IF NOT EXISTS `beer` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `originalPrice` float NOT NULL,
  `calculatedPrice` float NOT NULL,
  `calculatedPriceOld` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `beer`
--

INSERT INTO `beer` (`id`, `name`, `originalPrice`, `calculatedPrice`, `calculatedPriceOld`) VALUES
(1, 'Filou 8,5%', 2.5, 2.5, 2.5),
(2, 'Slash Red 8%', 2.5, 2.5, 2.5),
(3, 'Choulette Ambrée 8%', 2.5, 2.5, 2.5),
(4, 'La Trappe Triple 8%', 2.5, 2.5, 2.5),
(5, 'Kasteel Rouge 8%', 2.5, 2.5, 2.5),
(6, 'Fût Bischoff', 2.5, 2.5, 2.5);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
