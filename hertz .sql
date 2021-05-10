-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 10 mai 2021 à 09:45
-- Version du serveur :  10.4.10-MariaDB
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
-- Base de données :  `hertz`
--

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `id_Client` int(20) NOT NULL AUTO_INCREMENT,
  `Nom_Client` varchar(50) DEFAULT NULL,
  `Prenom_Client` varchar(50) DEFAULT NULL,
  `Adresse_Client` longtext DEFAULT NULL,
  `Ville_Client` longtext DEFAULT NULL,
  `Code_Postale_Client` longtext DEFAULT NULL,
  `Tel` varchar(15) NOT NULL,
  PRIMARY KEY (`id_Client`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id_Client`, `Nom_Client`, `Prenom_Client`, `Adresse_Client`, `Ville_Client`, `Code_Postale_Client`, `Tel`) VALUES
(1, 'Dupont', 'Nina', '11 Avenue de Poit', 'Besançon', '25000', '0712668725'),
(2, 'Amerucci', 'Alain', '2 rue de Belfort', 'Strasbourg', '67000', '0612453650'),
(3, 'Demangel', 'Baptist', '6 chemin de Kenedy', 'Dijon ', '21000', '0685451292'),
(4, 'Bertran', 'Faysal', '6 rue de Gaule', 'Paris', '75100', '0738017532'),
(5, 'Pascal', 'Angel', '4 rue de Beauvoir', 'Lyon ', '69000', '0620875566'),
(6, 'Robleh', 'ELMI', '14 VOIE CITE VIOTTE', 'Besançon', '25000', '0789256312'),
(7, 'Perazio', 'yanis', '36 rue de la paix', 'dijon', '21000', '0602455610'),
(8, 'Diraneh', 'Leo', '14 VOIE CITE VIOTTE', 'Besançon', '25000', '0712668725'),
(9, 'Robleh', 'ELMI', '14 VOIE CITE VIOTTE', 'Besançon', '25000', '0712668725'),
(10, 'Perazio', 'Xandra', '26 rue de la gare', 'dijon', '21000', '0325879641');

-- --------------------------------------------------------

--
-- Structure de la table `location`
--

DROP TABLE IF EXISTS `location`;
CREATE TABLE IF NOT EXISTS `location` (
  `id_Location` varchar(150) NOT NULL,
  `Id_Client` varchar(150) NOT NULL,
  `date_debut_Location` varchar(150) NOT NULL,
  `date_fin_Location` longtext NOT NULL,
  `Id_Vehicule` int(15) NOT NULL,
  PRIMARY KEY (`id_Location`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `location`
--

INSERT INTO `location` (`id_Location`, `Id_Client`, `date_debut_Location`, `date_fin_Location`, `Id_Vehicule`) VALUES
('1', '1', '2020-09-01', '2020', 1),
('2', '2', '2020-09-10', '2020', 2),
('3', '3', '2020-05-20', '2020', 3),
('4', '4', '2020-07-01', '2020', 4),
('5', '5', '2020-05-15', '2020', 5),
('6', '6', '2020-03-10', '2020', 6),
('7', '7', '2020-06-25', '2020', 7),
('8', '8', '2020-04-25', '2020-05-01', 8),
('9', '9', '2020-04-25', '2020-05-01', 9),
('10', '10', '2020-02-25', '2020-03-01', 10);

-- --------------------------------------------------------

--
-- Structure de la table `login_login`
--

DROP TABLE IF EXISTS `login_login`;
CREATE TABLE IF NOT EXISTS `login_login` (
  `USER` varchar(150) NOT NULL,
  `PASSWORD` varchar(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `login_login`
--

INSERT INTO `login_login` (`USER`, `PASSWORD`) VALUES
('Elmi', '161289');

-- --------------------------------------------------------

--
-- Structure de la table `vehicule`
--

DROP TABLE IF EXISTS `vehicule`;
CREATE TABLE IF NOT EXISTS `vehicule` (
  `Id_Vehicule` varchar(150) NOT NULL,
  `Marque_Vehicule` varchar(90) NOT NULL,
  `Immatriculation` longtext NOT NULL,
  `Image_Vehicule` longblob NOT NULL,
  `Prix_Location` varchar(90) NOT NULL,
  `Disponibilite` blob NOT NULL,
  PRIMARY KEY (`Id_Vehicule`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `vehicule`
--

INSERT INTO `vehicule` (`Id_Vehicule`, `Marque_Vehicule`, `Immatriculation`, `Image_Vehicule`, `Prix_Location`, `Disponibilite`) VALUES
('1', 'FIAT', 'FT-228-AW', 0x766f697475726533722e6a7067, '50 €/semaine', 0x6963c3b46e652d766563746f7269656c6c652d64652d6c612d6d61727175652d76657274652d73796d626f6c652d6f6b2d617070726f7576c3a92d696c6c757374726174696f6e2d7375722d666f6e642d626c616e632d3136303138303131302e6a7067),
('2', 'PEUGEOT', 'FT-500-AZ', 0x766f697475726538722e6a7067, '200 €/semaine', 0x6963c3b46e652d766563746f7269656c6c652d64652d6c612d6d61727175652d76657274652d73796d626f6c652d6f6b2d617070726f7576c3a92d696c6c757374726174696f6e2d7375722d666f6e642d626c616e632d3136303138303131302e6a7067),
('3', 'VOLKSWAGEN', 'FT-800-ZZ', 0x766f697475726533722e6a7067, '150 €/semaine', 0x37303830363735342d6c6d656e742d64652d7369676e652d64652d6c612d63726f69782d7265642d6772756e67652d6963c3b46e652d782d69736f6cc3a92d7375722d666f6e642d626c616e632d6d61726b2d636f6e63657074696f6e2d6772617068697175652d626f75746f6e2d64652d766f2e6a7067),
('4', 'RENAULD', 'AA-999-AA', 0x6d6f6465726e652e6a7067, '200 €/semaine', 0x6963c3b46e652d766563746f7269656c6c652d64652d6c612d6d61727175652d76657274652d73796d626f6c652d6f6b2d617070726f7576c3a92d696c6c757374726174696f6e2d7375722d666f6e642d626c616e632d3136303138303131302e6a7067),
('5', 'CITROEN', 'BA-001-AA', 0x766f6974757265312e6a7067, '25 €/semaine', 0x6963c3b46e652d766563746f7269656c6c652d64652d6c612d6d61727175652d76657274652d73796d626f6c652d6f6b2d617070726f7576c3a92d696c6c757374726174696f6e2d7375722d666f6e642d626c616e632d3136303138303131302e6a7067),
('6', 'FIAT', ' AB-001-AA ', 0x766f697475726535722e6a7067, '25 €/semaine', 0x37303830363735342d6c6d656e742d64652d7369676e652d64652d6c612d63726f69782d7265642d6772756e67652d6963c3b46e652d782d69736f6cc3a92d7375722d666f6e642d626c616e632d6d61726b2d636f6e63657074696f6e2d6772617068697175652d626f75746f6e2d64652d766f2e6a7067),
('7', 'JEEP', 'ZZ-999-ZZ', 0x766f6974757265666f72742e6a7067, '90 €/semaine', 0x6963c3b46e652d766563746f7269656c6c652d64652d6c612d6d61727175652d76657274652d73796d626f6c652d6f6b2d617070726f7576c3a92d696c6c757374726174696f6e2d7375722d666f6e642d626c616e632d3136303138303131302e6a7067),
('8', 'peugeot', 'FT-228-AW', 0x766f69747572652e6a7067, '200€/semaine', 0x6963c3b46e652d766563746f7269656c6c652d64652d6c612d6d61727175652d76657274652d73796d626f6c652d6f6b2d617070726f7576c3a92d696c6c757374726174696f6e2d7375722d666f6e642d626c616e632d3136303138303131302e6a7067),
('9', 'FORT', 'FT-115-AW', 0x766f697475726535722e6a7067, '150euro/semain', 0x4f4950766572742e6a7067);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
