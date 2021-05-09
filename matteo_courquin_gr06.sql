-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : Dim 09 mai 2021 à 20:53
-- Version du serveur :  5.7.32
-- Version de PHP : 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `laVillaSavoye`
--

-- --------------------------------------------------------

--
-- Structure de la table `comms`
--

CREATE TABLE `comms` (
  `id_commentarie` int(11) NOT NULL,
  `pseudo` varchar(30) NOT NULL,
  `message` text NOT NULL,
  `date_heure` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `comms`
--

INSERT INTO `comms` (`id_commentarie`, `pseudo`, `message`, `date_heure`) VALUES
(24, 'Archi78', 'Magnifique endroit. Inattendu en région parisienne dans cette banlieue. On a rien inventé depuis la fin des années 20... Cette villa est au goût du jour d\'aujourd\'hui. Nous on achète !', '2021-05-08 01:09:46'),
(25, 'Visit 28', 'Proche d’où je vis je m’en veux terriblement d’avoir attendu si longtemps ! Fanatique de design comment avais-je pu négliger cet endroit Compter deux heures sur place et venir avec un bon appareil photo car tout est sujet à photographier intérieur comme extérieur Je vais en faire un lieu de visite pour mes amis qui viennent de loin c’est incontournable ! Vivement la prochaine fois ( entrée très abordable : environ 8/9€ j’ai oublié)', '2021-05-09 22:24:17');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `comms`
--
ALTER TABLE `comms`
  ADD PRIMARY KEY (`id_commentarie`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `comms`
--
ALTER TABLE `comms`
  MODIFY `id_commentarie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
