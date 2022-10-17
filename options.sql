-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3308
-- Généré le :  lun. 10 jan. 2022 à 10:11
-- Version du serveur :  8.0.18
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `oas`
--

-- --------------------------------------------------------

--
-- Structure de la table `options`
--

DROP TABLE IF EXISTS `options`;
CREATE TABLE IF NOT EXISTS `options` (
  `optionsid` int(11) NOT NULL AUTO_INCREMENT,
  `a` int(11) NOT NULL,
  `b` tinyint(4) NOT NULL DEFAULT '0',
  `c` text NOT NULL,
  PRIMARY KEY (`optionsid`)
) ENGINE=InnoDB AUTO_INCREMENT=71 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `options`
--

INSERT INTO `options` (`optionsid`, `a`, `b`, `c`) VALUES
(39, 1, 1, 'llÃ¹m'),
(40, 1, 0, 'ghj'),
(41, 1, 0, 'mkm'),
(42, 1, 0, 'kmkm'),
(43, 2, 0, 'llÃ¹m'),
(44, 2, 0, 'ghj'),
(45, 2, 0, 'gj'),
(46, 2, 1, 'mm'),
(47, 3, 0, 'llÃ¹m'),
(48, 3, 0, 'ghj'),
(49, 3, 1, 'l'),
(50, 3, 0, 'm'),
(51, 4, 1, 'llÃ¹m'),
(52, 4, 0, 'ghj'),
(53, 4, 0, 'mkm'),
(54, 4, 0, 'mm'),
(55, 5, 0, 'llÃ¹m'),
(56, 5, 0, 'dggg'),
(57, 5, 1, 'l'),
(58, 5, 0, 'ggggg'),
(59, 6, 0, 'llÃ¹m'),
(60, 6, 1, 'dggg'),
(61, 6, 0, 'j'),
(62, 6, 0, 'mm'),
(63, 7, 0, 'llÃ¹m'),
(64, 7, 1, 'dggg'),
(65, 7, 0, 'gj'),
(66, 7, 0, 'mm'),
(67, 8, 0, 'llÃ¹m'),
(68, 8, 1, 'dggg'),
(69, 8, 0, 'l'),
(70, 8, 0, 'mm');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
