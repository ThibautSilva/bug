-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Lun 31 Mars 2014 à 09:00
-- Version du serveur: 5.6.12-log
-- Version de PHP: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `lms_bug`
--
CREATE DATABASE IF NOT EXISTS `lms_bug` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `lms_bug`;

--
-- Contenu de la table `bugs`
--

INSERT INTO `bugs` (`id`, `engineer_id`, `reporter_id`, `resume`, `description`, `note`, `created`, `status`, `priorite`) VALUES
(1, NULL, 2, 'Bug Souris ', 'Ne s''affiche plus', NULL, '2014-03-31 08:57:48', 'Ouvert', 'Normal'),
(2, 3, 2, 'Pixel mort', 'Ecran fichu', NULL, '2014-03-31 08:58:12', 'Ouvert', 'Normal');

--
-- Contenu de la table `bug_product`
--

INSERT INTO `bug_product` (`bug_id`, `product_id`) VALUES
(1, 2),
(2, 3);

--
-- Contenu de la table `club`
--

INSERT INTO `club` (`numClub`, `nomClub`, `adresseClub`, `cpClub`, `villeClub`, `telClub`, `mailClub`, `imgClub`, `codeFFF`, `mdpClub`) VALUES
(1, 'PARIS Saint Germain', '24 rue du Commandant Guilbaud', '7581', 'PARIS Cedex 16', '0141107110', 'infos@psg.com', '', 12345, '12345'),
(2, 'Olympique de Marseille', 'La Commanderie 33 ', '13425', 'MARSEILLE', '0491765609', 'infos@om.com', '', 123456, '12345'),
(3, 'Olympique Lyonnais', '350 avenue Jean Jaures', '69007', 'Lyon', '0426296700', 'infos@ol.com', '', 1234567, '12345');

--
-- Contenu de la table `products`
--

INSERT INTO `products` (`id`, `name`) VALUES
(1, 'clavier'),
(2, 'souris'),
(3, 'ecran'),
(4, 'tour');

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `name`, `prenom`, `fonction`, `login`, `mdp`, `courriel`, `leClub`) VALUES
(1, 'Silva', 'Thibaut', 'Responsable', 'tsilva', '12345', 'silva.thibaut@gmail.com', NULL),
(2, 'Lemarquis', 'Sulivan', 'Club', 'slemarquis', '12345', 'lemarquis.sulivan55@gmail.com', 3),
(3, 'Marrucho', 'Helen', 'Technicien', 'hmarrucho', '12345', 'helen.marrucho@gmail.com', NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
