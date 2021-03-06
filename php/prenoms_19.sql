-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : sam. 06 mars 2021 à 10:05
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
-- Structure de la table `prenoms_19`
--

DROP TABLE IF EXISTS `prenoms_19`;
CREATE TABLE IF NOT EXISTS `prenoms_19` (
  `IDPrenom` int(11) NOT NULL AUTO_INCREMENT,
  `prenom` varchar(255) NOT NULL,
  `nb_naissance` int(11) NOT NULL,
  PRIMARY KEY (`IDPrenom`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `prenoms_19`
--

INSERT INTO `prenoms_19` (`IDPrenom`, `prenom`, `nb_naissance`) VALUES
(1, 'Gabriel', 5010),
(2, 'Léo', 4885),
(3, 'Raphaël', 4661),
(4, 'Arthur', 4005),
(5, 'Louis', 3956),
(6, 'Emma', 3955),
(7, 'Jade', 3820),
(8, 'Louise', 3761),
(9, 'Lucas', 3737),
(10, 'Adam', 3671),
(11, 'Maël', 3556),
(12, 'Jules', 3542),
(13, 'Hugo', 3493),
(14, 'Alice', 3294),
(15, 'Liam', 3097),
(16, 'Lina', 2951);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
