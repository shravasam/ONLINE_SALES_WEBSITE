-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Ven 31 Mai 2019 à 22:13
-- Version du serveur :  5.7.26-0ubuntu0.16.04.1
-- Version de PHP :  7.0.33-0ubuntu0.16.04.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `registration`
--

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(155) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'bob', 'bob@example.fr', '26588e932c7ccfa1df309280702fe1b5'),
(4, 'vsk', 'vsk@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(6, 'database', 'database@free.fr', '11e0eed8d3696c0a632f822df385ab3c'),
(7, 'db', 'db@free.fr', 'd77d5e503ad1439f585ac494268b351b'),
(9, 'admin', 'admin@free.fr', '21232f297a57a5a743894a0e4a801fc3'),
(13, 'esigelec', 'esigelec@free.fr', '81dc9bdb52d04dc20036dbd8313ed055'),
(14, 'kumar', 'kumar@gmail.com', '79cfac6387e0d582f83a29a04d0bcdc4'),
(15, 'admins', 'admin@esigelec.fr', '2aefc34200a294a3cc7db81b43a81873'),
(16, 'today', 'today@esigelec.fr', 'c5e7dfaf771d423ecf59b008369021e8'),
(17, 'peter', 'peter@esigelec.fr', '51dc30ddc473d43a6011e9ebba6ca770');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
