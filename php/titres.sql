-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 19 mai 2021 à 13:37
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `cours`
--

-- --------------------------------------------------------

--
-- Structure de la table `titres`
--

DROP TABLE IF EXISTS `titres`;
CREATE TABLE IF NOT EXISTS `titres` (
  `IDTitre` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Nom_musicien` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Duree` float NOT NULL,
  PRIMARY KEY (`IDTitre`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci;

--
-- Déchargement des données de la table `titres`
--

INSERT INTO `titres` (`IDTitre`, `Nom`, `Nom_musicien`, `Duree`) VALUES
(1, 'American Idiot', 'Green Day', 2.54),
(2, 'Holiday', 'Green Day', 3.52),
(3, 'Da Funk', 'Daft Punk', 5.28),
(4, 'Around the World', 'Daft Punk', 7.07),
(5, 'Les Quatre Saisons', 'Antonio Vivaldi', 40.18),
(6, 'La Lettre à Élise', 'Ludwig van Beethoven', 3);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
