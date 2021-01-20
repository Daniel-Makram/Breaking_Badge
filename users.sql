-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 19 jan. 2021 à 10:41
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
-- Base de données : `users`
--
CREATE DATABASE Breaking_Badge;
USE Breaking_Badge;
-- --------------------------------------------------------

--
-- Structure de la table `badges`
--


DROP TABLE IF EXISTS `badges`;
CREATE TABLE IF NOT EXISTS `badges` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `description` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `shape` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `color` varchar(250) CHARACTER SET latin1 DEFAULT NULL,
  `category` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `account_type` enum('ADMIN','NORMIE') NOT NULL DEFAULT 'NORMIE',
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `firstname`, `lastname`, `account_type`) VALUES
(1, 'admin@example.com', '$2y$10$HnC5R/DMLctfv94iHORJH.kmaxrtYNJted4mmv0uhXVd0VCtHMCG.', 'Grace', 'Hopper', 'ADMIN'),
(2, 'normie@example.com', '$2y$10$mhE/p8tmq.dsZfK/HDIF1uJJBwSQwrJ0DTwaN4wCVSk3zoC15zTd6', 'Johnny', 'Normie', 'NORMIE');

-- --------------------------------------------------------

--
-- Structure de la table `users_has_badges`
--

DROP TABLE IF EXISTS `users_has_badges`;
CREATE TABLE IF NOT EXISTS `users_has_badges` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idUsers` int(11) DEFAULT NULL,
  `idBadges` int(11) DEFAULT NULL,
  `dateAttribution` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idUsers` (`idUsers`),
  KEY `idBadges` (`idBadges`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `users_has_badges`
--
ALTER TABLE `users_has_badges`
  ADD CONSTRAINT `users_has_badges_ibfk_1` FOREIGN KEY (`idUsers`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `users_has_badges_ibfk_2` FOREIGN KEY (`idBadges`) REFERENCES `badges` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
