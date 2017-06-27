-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Mar 27 Juin 2017 à 15:48
-- Version du serveur :  5.7.18-0ubuntu0.17.04.1
-- Version de PHP :  7.0.18-0ubuntu0.17.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `afpa-bay`
--

-- --------------------------------------------------------

--
-- Structure de la table `film`
--

CREATE TABLE `film` (
  `titre` varchar(256) NOT NULL,
  `auteur` varchar(256) NOT NULL,
  `acteurs` varchar(1024) NOT NULL,
  `date_sortie` year(4) NOT NULL,
  `id` int(11) NOT NULL,
  `image_film` varchar(1024) DEFAULT NULL,
  `genre_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `film`
--

INSERT INTO `film` (`titre`, `auteur`, `acteurs`, `date_sortie`, `id`, `image_film`, `genre_id`) VALUES
('Bernie', 'Albert Dupontel', 'Albert Dupontel', 1996, 1, 'img\\bernie.jpg', 1),
('Kiki la petite sorcière', 'Hayao Miyazaki', 'Minami Takayama', 2004, 2, 'img/kiki.jpg', 0),
('Le Roi Lion', 'Disney', 'Simba, Nala', 1994, 3, 'img/Le_Roi_lion.jpg', 2),
('test', 'test', 'test', 2014, 28, 'img/test.jpg', 0);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `film`
--
ALTER TABLE `film`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
