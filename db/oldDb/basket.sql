-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mer 05 Juin 2019 à 23:38
-- Version du serveur :  5.7.26-0ubuntu0.16.04.1
-- Version de PHP :  7.0.33-0ubuntu0.16.04.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `basket`
--

-- --------------------------------------------------------

--
-- Structure de la table `orders`
--

CREATE TABLE `orders` (
  `id` int(20) NOT NULL,
  `category` varchar(20) NOT NULL,
  `product` varchar(20) NOT NULL,
  `quantity` int(20) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `orders`
--

INSERT INTO `orders` (`id`, `category`, `product`, `quantity`, `price`) VALUES
(3, 'laptop', 'lenovo-ThinkPad X1', 1, 872),
(4, 'laptop', 'Acer_Swift 7', 1, 872),
(5, 'mobile', 'Asus-ZenFone 6', 1, 872),
(8, 'laptop', 'lenovo_38', 1, 374),
(10, 'laptop', 'lenovo-ThinkPad', 1, 872);

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

CREATE TABLE `products` (
  `id` int(20) NOT NULL,
  `image` varchar(20) NOT NULL,
  `category` varchar(20) NOT NULL,
  `product` varchar(20) NOT NULL,
  `price` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `products`
--

INSERT INTO `products` (`id`, `image`, `category`, `product`, `price`) VALUES
(28, 'laptop.jpg', 'acer', 'acer_728', 821),
(29, 'mobile.jpg', 'apple', 'i8', 873),
(30, 'mobile.jpg', 'samsung', 'sam_s6', 873),
(31, 'mobile.jpg', 'MICROSOFT', 'MIC_721', 487),
(33, 'laptop.jpg', 'APPLE', 'MACBOOK_2019', 2903),
(34, 'laptop.jpg', 'TOHIBA', 'THOSI_2019', 889);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
