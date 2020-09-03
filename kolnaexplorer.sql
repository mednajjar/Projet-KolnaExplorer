-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 02 sep. 2020 à 01:03
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `kolnaexplorer`
--

-- --------------------------------------------------------

--
-- Structure de la table `activity`
--

CREATE TABLE `activity` (
  `act_id` int(11) NOT NULL,
  `spa_id` int(11) NOT NULL,
  `act_icone` text NOT NULL,
  `act_title` varchar(40) NOT NULL,
  `act_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `activity`
--

INSERT INTO `activity` (`act_id`, `spa_id`, `act_icone`, `act_title`, `act_desc`) VALUES
(8, 1, 'sports.png', 'kharb9oni', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.\r\nOmnis dolor optio reiciendis dolore praesentium!'),
(9, 1, 'sports.png', 'Randonnée', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.\r\nOmnis dolor optio reiciendis dolore praesentium!'),
(10, 1, 'people.png', 'Afforestation', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.\r\nOmnis dolor optio reiciendis dolore praesentium!'),
(11, 1, 'iconfinder.png', 'Développement humain', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.\r\nOmnis dolor optio reiciendis dolore praesentium!');

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `spa_id` int(11) NOT NULL,
  `admin_fullName` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`admin_id`, `spa_id`, `admin_fullName`, `admin_email`, `admin_pass`) VALUES
(2, 1, 'ahmed hilmi', 'ahmed@gmail.com', 'ahmed123'),
(3, 1, 'mohammed hamad', 'hamad@gmail.com', 'admin321');

-- --------------------------------------------------------

--
-- Structure de la table `destination`
--

CREATE TABLE `destination` (
  `dest_id` int(11) NOT NULL,
  `spa_id` int(11) NOT NULL,
  `dest_title_home` varchar(60) NOT NULL,
  `dest_title_destination` varchar(60) NOT NULL,
  `dest_info_title` text NOT NULL,
  `dest_desc` text NOT NULL,
  `dest_img` text NOT NULL,
  `dest_info1` varchar(40) NOT NULL,
  `dest_info2` varchar(40) NOT NULL,
  `dest_info3` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `destination`
--

INSERT INTO `destination` (`dest_id`, `spa_id`, `dest_title_home`, `dest_title_destination`, `dest_info_title`, `dest_desc`, `dest_img`, `dest_info1`, `dest_info2`, `dest_info3`) VALUES
(5, 1, 'Randonnée', 'Ighergher-test', 'Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise en page', 'Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise en page', 'dest1.png', 'Information11', 'Information2', 'Information3'),
(8, 1, 'randonnée', 'tinghir', 'Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise en page test', 'Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise en page test', 'dest2.png', 'Information1', 'information2', 'Information3'),
(9, 1, 'randonnée', 'tinghir', 'Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise en page test', 'Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise en page test', 'dest3.png', 'Information1', 'information2', 'Information3');

-- --------------------------------------------------------

--
-- Structure de la table `events`
--

CREATE TABLE `events` (
  `event_id` int(11) NOT NULL,
  `spa_id` int(11) NOT NULL,
  `event_img` text NOT NULL,
  `event_title` varchar(60) NOT NULL,
  `event_desc` text NOT NULL,
  `event_location` varchar(60) NOT NULL,
  `event_date` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `events`
--

INSERT INTO `events` (`event_id`, `spa_id`, `event_img`, `event_title`, `event_desc`, `event_location`, `event_date`) VALUES
(8, 1, 'IMG-20190303-WA0008.jpg', 'event5', 'Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise en page test', 'beni mellal', '24 juin, 2021'),
(9, 1, 'IMG-20190304-WA0021.jpg', 'event3', 'Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise en page test', 'sidi hrazem', '25 juin, 2021'),
(10, 1, 'IMG-20190304-WA0076.jpg', 'event1', 'Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise en page test', 'akchour', '26 juin, 2021');

-- --------------------------------------------------------

--
-- Structure de la table `galerie`
--

CREATE TABLE `galerie` (
  `gal_id` int(11) NOT NULL,
  `spa_id` int(11) NOT NULL,
  `gal_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `galerie`
--

INSERT INTO `galerie` (`gal_id`, `spa_id`, `gal_img`) VALUES
(16, 1, 'Rectangle21.png'),
(17, 1, 'Rectangle23.png'),
(18, 1, 'Rectangle25.png'),
(19, 1, 'Rectangle20.png'),
(20, 1, 'Rectangle22.png'),
(21, 1, 'Rectangle23.png'),
(22, 1, 'Rectangle25.png'),
(23, 1, 'Rectangle20.png'),
(25, 1, 'Rectangle22.png');

-- --------------------------------------------------------

--
-- Structure de la table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `spa_id` int(11) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `images`
--

INSERT INTO `images` (`id`, `spa_id`, `image`) VALUES
(93, 1, 'team3.png'),
(95, 1, 'team3.png'),
(96, 1, 'Image 1.png'),
(97, 1, 'Rectangle 74.png'),
(100, 1, 'event1.png'),
(101, 1, 'illustration1.png'),
(102, 1, 'illustration2.png'),
(103, 1, 'illustration3.png'),
(106, 1, 'illustration1.png');

-- --------------------------------------------------------

--
-- Structure de la table `partner`
--

CREATE TABLE `partner` (
  `part_id` int(11) NOT NULL,
  `spa_id` int(11) NOT NULL,
  `part_name` varchar(60) NOT NULL,
  `part_logo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `partner`
--

INSERT INTO `partner` (`part_id`, `spa_id`, `part_name`, `part_logo`) VALUES
(5, 1, 'test2', 'Groupe85.png'),
(6, 1, 'test3', 'Groupe85.png'),
(7, 1, 'test4', 'Groupe85.png');

-- --------------------------------------------------------

--
-- Structure de la table `superadmin`
--

CREATE TABLE `superadmin` (
  `spa_id` int(11) NOT NULL,
  `spa_fullname` varchar(40) NOT NULL,
  `spa_email` varchar(100) NOT NULL,
  `spa_pass` varchar(255) NOT NULL,
  `spa_role` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `superadmin`
--

INSERT INTO `superadmin` (`spa_id`, `spa_fullname`, `spa_email`, `spa_pass`, `spa_role`) VALUES
(1, 'issam', 'admin@kolnaexplorer.com', 'Admin1234@', 'superadmin'),
(2, 'mohammed', 'mohammed@gmail.com', 'Admin1234', 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `team`
--

CREATE TABLE `team` (
  `team_id` int(11) NOT NULL,
  `spa_id` int(11) NOT NULL,
  `team_img` text NOT NULL,
  `team_fullname` varchar(40) NOT NULL,
  `team_role` varchar(60) NOT NULL,
  `team_desc` text NOT NULL,
  `team_facebook` varchar(255) NOT NULL,
  `team_linkedin` varchar(255) NOT NULL,
  `team_twitter` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `team`
--

INSERT INTO `team` (`team_id`, `spa_id`, `team_img`, `team_fullname`, `team_role`, `team_desc`, `team_facebook`, `team_linkedin`, `team_twitter`) VALUES
(5, 1, 'team1.png', 'mido simo', 'designer', 'Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise en page', 'https://facebook.com', 'https://linkedin.com', 'https://twitter.com'),
(8, 1, 'team3.png', 'Ayman Sarhan', 'Photographer', 'Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise en page', 'https://facebook.com', 'https://linkedin.com', 'https://twitter.com'),
(9, 1, 'team4.png', 'Salim Marwan', 'Guide', 'Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise en page', 'https://facebook.com', 'https://linkedin.com', 'https://twitter.com'),
(10, 1, 'team5.png', 'Ilham Mostafid', 'Architecte', 'Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise en page', 'https://facebook.com', 'https://linkedin.com', 'https://twitter.com'),
(11, 1, 'team6.png', 'Ahmed Hilmi', 'Acteur', 'Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise en page', 'https://facebook.com', 'https://linkedin.com', 'https://twitter.com'),
(14, 1, 'team2.png', 'badr swihla', 'manager', 'Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise en page', 'https://facebook.com', 'https://linkedin.com', 'https://twitter.com');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(255) NOT NULL,
  `pseudo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mail` text COLLATE utf8_unicode_ci NOT NULL,
  `password` text COLLATE utf8_unicode_ci NOT NULL,
  `idpublic` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `pseudo`, `mail`, `password`, `idpublic`) VALUES
(12, 'Simo', 'admin@admin.com', '$2a$10$1qAz2wSx3eDc4rFv5tGb5eqhub2ZTgWk1OiclqvaiA05dYOBV2iMu', '5f1468340c3e4');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`act_id`),
  ADD KEY `activity_ibfk_1` (`spa_id`);

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD KEY `spa_id` (`spa_id`);

--
-- Index pour la table `destination`
--
ALTER TABLE `destination`
  ADD PRIMARY KEY (`dest_id`),
  ADD KEY `destination_ibfk_1` (`spa_id`);

--
-- Index pour la table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`),
  ADD KEY `events_ibfk_1` (`spa_id`);

--
-- Index pour la table `galerie`
--
ALTER TABLE `galerie`
  ADD PRIMARY KEY (`gal_id`),
  ADD KEY `galerie_ibfk_1` (`spa_id`);

--
-- Index pour la table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `spa_id` (`spa_id`);

--
-- Index pour la table `partner`
--
ALTER TABLE `partner`
  ADD PRIMARY KEY (`part_id`),
  ADD KEY `spa_id` (`spa_id`);

--
-- Index pour la table `superadmin`
--
ALTER TABLE `superadmin`
  ADD PRIMARY KEY (`spa_id`);

--
-- Index pour la table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`team_id`),
  ADD KEY `spa_id` (`spa_id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `activity`
--
ALTER TABLE `activity`
  MODIFY `act_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `destination`
--
ALTER TABLE `destination`
  MODIFY `dest_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `events`
--
ALTER TABLE `events`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `galerie`
--
ALTER TABLE `galerie`
  MODIFY `gal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT pour la table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT pour la table `partner`
--
ALTER TABLE `partner`
  MODIFY `part_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `superadmin`
--
ALTER TABLE `superadmin`
  MODIFY `spa_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `team`
--
ALTER TABLE `team`
  MODIFY `team_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `activity`
--
ALTER TABLE `activity`
  ADD CONSTRAINT `activity_ibfk_1` FOREIGN KEY (`spa_id`) REFERENCES `superadmin` (`spa_id`) ON UPDATE CASCADE;

--
-- Contraintes pour la table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`spa_id`) REFERENCES `superadmin` (`spa_id`) ON UPDATE CASCADE;

--
-- Contraintes pour la table `destination`
--
ALTER TABLE `destination`
  ADD CONSTRAINT `destination_ibfk_1` FOREIGN KEY (`spa_id`) REFERENCES `superadmin` (`spa_id`) ON UPDATE CASCADE;

--
-- Contraintes pour la table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `events_ibfk_1` FOREIGN KEY (`spa_id`) REFERENCES `superadmin` (`spa_id`) ON UPDATE CASCADE;

--
-- Contraintes pour la table `galerie`
--
ALTER TABLE `galerie`
  ADD CONSTRAINT `galerie_ibfk_1` FOREIGN KEY (`spa_id`) REFERENCES `superadmin` (`spa_id`) ON UPDATE CASCADE;

--
-- Contraintes pour la table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_ibfk_1` FOREIGN KEY (`spa_id`) REFERENCES `superadmin` (`spa_id`) ON UPDATE CASCADE;

--
-- Contraintes pour la table `partner`
--
ALTER TABLE `partner`
  ADD CONSTRAINT `partner_ibfk_1` FOREIGN KEY (`spa_id`) REFERENCES `superadmin` (`spa_id`) ON UPDATE CASCADE;

--
-- Contraintes pour la table `team`
--
ALTER TABLE `team`
  ADD CONSTRAINT `team_ibfk_1` FOREIGN KEY (`spa_id`) REFERENCES `superadmin` (`spa_id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
