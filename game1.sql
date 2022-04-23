-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 23 avr. 2022 à 04:59
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `game1`
--

-- --------------------------------------------------------

--
-- Structure de la table `levels`
--

CREATE TABLE `levels` (
  `id` int(11) NOT NULL,
  `level` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mot` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `levels`
--

INSERT INTO `levels` (`id`, `level`, `mot`) VALUES
(1, 'level_1', 'MATIN'),
(2, 'level_2', 'SOURIS'),
(3, 'level_3', 'CLOTURE'),
(4, 'level_4', 'CROISEUR'),
(5, 'level_5', 'MELANGER'),
(6, 'level_6', 'GRILLER'),
(7, 'level_7', 'CORRIDOR'),
(8, 'level_8', 'CUBISTE'),
(9, 'level_9', 'ECHARPE'),
(10, 'level_10', 'VISSER'),
(11, 'level_11', 'MANAGER'),
(12, 'level_12', 'RUSE'),
(13, 'level_13', 'CYNIQUE'),
(14, 'level_14', 'SCIE'),
(15, 'level_15', 'PLEURER'),
(16, 'level_16', 'PYJAMAS'),
(17, 'level_17', 'PULL'),
(18, 'level_18', 'PETITS'),
(19, 'level_19', 'LANCER'),
(20, 'level_20', 'CRISTAUX'),
(21, 'level_21', 'SINUEUX'),
(22, 'level_22', 'COMPTE'),
(23, 'level_23', 'PLAFOND'),
(24, 'level_24', 'FOULES'),
(25, 'level_25', 'MOTEUR'),
(26, 'level_26', 'PARKING'),
(27, 'level_27', 'CYMBALES'),
(28, 'level_28', 'BRUT'),
(29, 'level_29', 'NEIGEUX'),
(30, 'level_30', 'CREDIT'),
(31, 'level_31', 'ENJOUE'),
(32, 'level_32', 'BORDURE'),
(33, 'level_33', 'EPINARDS'),
(34, 'level_34', 'TAXI'),
(35, 'level_35', 'POSTE'),
(36, 'level_36', 'LAITUE'),
(37, 'level_37', 'FROISSE'),
(38, 'level_38', 'CURRY'),
(39, 'level_39', 'CURSEUR'),
(40, 'level_40', 'CUTICULE'),
(41, 'level_41', 'CALINER'),
(42, 'level_42', 'ETAGERE'),
(43, 'level_43', 'CROUTONS'),
(44, 'level_44', 'CYBORG'),
(45, 'level_45', 'CROISER'),
(46, 'level_46', 'PLACARD'),
(47, 'level_47', 'VERANDA'),
(48, 'level_48', 'CROUPIER'),
(49, 'level_49', 'SABRE'),
(50, 'level_50', 'CYCLIQUE'),
(51, 'level_51', 'POIS'),
(52, 'level_52', 'CYCLISTE'),
(53, 'level_53', 'ESCALIER'),
(54, 'level_54', 'NUAGEUX'),
(55, 'level_55', 'PERMIS'),
(56, 'level_56', 'ORAGEUX'),
(57, 'level_57', 'HUMIDE'),
(58, 'level_58', 'BUS'),
(59, 'level_59', 'CHAUSSON'),
(60, 'level_60', 'MARRON'),
(61, 'level_61', 'FROISSER'),
(62, 'level_62', 'MAUVE'),
(63, 'level_63', 'CRAIE'),
(64, 'level_64', 'PRET'),
(65, 'level_65', 'CAPTEUR'),
(66, 'level_66', 'COULOIR'),
(67, 'level_67', 'PLUVIEUX'),
(68, 'level_68', 'PASSOIRE'),
(69, 'level_69', 'CIRE'),
(70, 'level_70', 'VENTEUX'),
(71, 'level_71', 'TAPIS'),
(72, 'level_72', 'EPARGNES'),
(73, 'level_73', 'CRISTAL'),
(74, 'level_74', 'CROISADE'),
(75, 'level_75', 'CAISSIER'),
(76, 'level_76', 'CLIENTE'),
(77, 'level_77', 'CYCLONE'),
(78, 'level_78', 'MICRO'),
(79, 'level_79', 'BATTRE'),
(80, 'level_80', 'MAUDIT'),
(81, 'level_81', 'BOUCLE'),
(82, 'level_82', 'RETRO'),
(83, 'level_83', 'BROCOLI'),
(84, 'level_84', 'PREMIER'),
(85, 'level_85', 'SUER'),
(86, 'level_86', 'CUBAIN'),
(87, 'level_87', 'CYCLISME'),
(88, 'level_88', 'FAUTE'),
(89, 'level_89', 'RAMPE'),
(90, 'level_90', 'CAROTTE'),
(91, 'level_91', 'GOMMER'),
(92, 'level_92', 'ARBALETE'),
(93, 'level_93', 'GANTS'),
(94, 'level_94', 'CANAPE'),
(95, 'level_95', 'BOL'),
(96, 'level_96', 'COUPABLE'),
(97, 'level_97', 'RIDEAUX'),
(98, 'level_98', 'CRYPTE'),
(99, 'level_99', 'GRIS'),
(100, 'level_100', 'REPAS'),
(101, 'level_101', 'SOUCOUPE'),
(102, 'level_102', 'CHANTEUR'),
(103, 'level_103', 'BIGOUDI');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lastLevel` int(11) DEFAULT NULL,
  `bonus` int(11) NOT NULL,
  `lastWord` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `levels`
--
ALTER TABLE `levels`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `search_idx` (`name`),
  ADD KEY `IDX_1483A5E990255750` (`lastLevel`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `levels`
--
ALTER TABLE `levels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `FK_1483A5E990255750` FOREIGN KEY (`lastLevel`) REFERENCES `levels` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
