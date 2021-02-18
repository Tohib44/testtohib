-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 17 Février 2021 à 23:30
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `client`
--

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `numero_tel` int(10) NOT NULL,
  `commentaire` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Contenu de la table `client`
--

INSERT INTO `client` (`id`, `nom`, `prenom`, `numero_tel`, `commentaire`) VALUES
(1, 'Tohib', 'Ayinde', 47827098, 'RAS'),
(2, 'Wasiu ', 'Ayofe', 6690296, 'RAS'),
(3, 'David', 'Capo ', 900200002, 'RAS'),
(4, 'Fanta ', 'Yasmine ', 909098, 'RAS'),
(7, 'Test', 'Test', 0, 'Test'),
(8, 'Laurania', 'Comoe', 8456733, 'RAS'),
(9, 'Wilfried', 'Kanga', 34908764, 'RAS'),
(10, 'Camara', 'Maty', 9090909, 'RAS'),
(11, 'Yes', 'Yes', 0, 'RAS'),
(12, 'Tama', 'Digital', 9090909, 'Agence');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
