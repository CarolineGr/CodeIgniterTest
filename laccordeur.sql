-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Mar 08 Août 2017 à 09:54
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `laccordeur`
--

-- --------------------------------------------------------

--
-- Structure de la table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(16) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `user_data` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `livreor_commentaires`
--

CREATE TABLE `livreor_commentaires` (
  `id` int(10) NOT NULL,
  `Messages` text,
  `Dates` datetime DEFAULT NULL,
  `id_utilisateur` int(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `livreor_commentaires`
--

INSERT INTO `livreor_commentaires` (`id`, `Messages`, `Dates`, `id_utilisateur`) VALUES
(1, 'blabla', '2017-08-04 09:53:16', 1),
(2, 'bienvenue !', '2010-09-13 21:04:00', 1),
(3, 'J\'aime !', '2010-09-05 21:04:12', 1),
(4, 'Encore une fois.', '2010-09-02 21:04:45', 1),
(5, 'Ceci est un commentaire.', '2010-09-04 21:05:01', 1),
(6, 'Il etait une fois....', '2010-09-05 21:05:23', 1),
(7, 'Bienvenue a vous tous !', '2010-09-01 21:05:51', 1),
(8, 'Salut, super ce site !', '2010-09-02 21:06:09', 1),
(9, 'Il etait une fois...', '2010-09-05 21:06:33', 1),
(10, 'Jamais deux sans toi !', '2010-09-12 21:06:59', 1),
(11, 'Salut, j\'aime bien ce site !', '2010-09-21 21:08:16', 1),
(12, 'Debut de site sympathique.', '2010-09-13 21:08:13', 1),
(13, 'Encore une fois.', '2010-09-02 21:04:45', 1),
(14, 'Ceci est un commentaire.', '2010-09-04 21:05:01', 1),
(15, 'Il etait une fois....', '2010-09-05 21:05:23', 1),
(16, 'Bienvenue a vous tous !', '2010-09-01 21:05:51', 1),
(17, 'Salut, super ce site !', '2010-09-02 21:06:09', 1),
(18, 'Il etait une fois...', '2010-09-05 21:06:33', 1),
(19, 'Jamais deux sans toi !', '2010-09-12 21:06:59', 1),
(20, 'Salut, j\'aime bien ce site !', '2010-09-21 21:08:31', 1),
(21, 'Debut de site sympathique.', '2010-09-13 21:08:13', 1),
(22, 'Encore une fois.', '2010-09-02 21:04:45', 1),
(23, 'Ceci est un commentaire.', '2010-09-04 21:05:01', 1),
(24, 'Il etait une fois....', '2010-09-05 21:05:23', 1),
(25, 'Bienvenue a vous tous !', '2010-09-01 21:05:51', 1);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id` int(10) UNSIGNED NOT NULL,
  `pseudo` varchar(20) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `mdp` varchar(60) NOT NULL,
  `statut` tinyint(1) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `pseudo`, `nom`, `prenom`, `email`, `mdp`, `statut`) VALUES
(1, 'Kro', 'GRIMAULT', 'Caroline', 'caro@gmail.com', '$1$oz3.RA4.$XGQ5LfWVL9WA2Nv1KLkTm0', 0);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`session_id`),
  ADD KEY `last_activity_idx` (`last_activity`);

--
-- Index pour la table `livreor_commentaires`
--
ALTER TABLE `livreor_commentaires`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_utilisateur` (`id_utilisateur`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `livreor_commentaires`
--
ALTER TABLE `livreor_commentaires`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
