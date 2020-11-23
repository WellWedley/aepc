-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 23 nov. 2020 à 11:33
-- Version du serveur :  10.4.14-MariaDB
-- Version de PHP : 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `aepc`
--

-- --------------------------------------------------------

--
-- Structure de la table `animateurs`
--

CREATE TABLE `animateurs` (
  `id_anim` int(11) NOT NULL,
  `mail_anim` varchar(255) DEFAULT NULL,
  `pseudo_anim` varchar(255) DEFAULT NULL,
  `mdp_anim` varchar(255) DEFAULT NULL,
  `nom_anim` varchar(255) DEFAULT NULL,
  `prenom_anim` varchar(255) DEFAULT NULL,
  `statut_anim` varchar(50) DEFAULT NULL,
  `num_anim` int(11) DEFAULT NULL,
  `date_naiss_anim` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `animateurs`
--

INSERT INTO `animateurs` (`id_anim`, `mail_anim`, `pseudo_anim`, `mdp_anim`, `nom_anim`, `prenom_anim`, `statut_anim`, `num_anim`, `date_naiss_anim`) VALUES
(1, 'footwedley@gmail.com', 'wedleu', '00000', 'Cairol', 'Romain', NULL, NULL, NULL),
(2, 'Wedley', '', NULL, '', '', NULL, NULL, NULL),
(3, 'quentin@julien.com', 'qj', '00000', 'Julienj', 'Quentin', NULL, NULL, NULL),
(4, 'sylvie@boj.fr', 'sylv', '00000', 'Boj', 'Sylvie ', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `directeurs`
--

CREATE TABLE `directeurs` (
  `id_dir` int(11) NOT NULL,
  `mail_dir` varchar(255) DEFAULT NULL,
  `pseudo_dir` varchar(255) DEFAULT NULL,
  `nom_dir` varchar(255) DEFAULT NULL,
  `prenom_dir` varchar(255) DEFAULT NULL,
  `statut_dir` varchar(50) DEFAULT NULL,
  `num_dir` int(10) DEFAULT NULL,
  `date_naiss_dir` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `enfants`
--

CREATE TABLE `enfants` (
  `id_enf` int(11) NOT NULL,
  `nom_enf` varchar(255) DEFAULT NULL,
  `prenom_enf` varchar(255) DEFAULT NULL,
  `date_naiss_enf` date DEFAULT NULL,
  `fk_id_tut` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `participe_sejour`
--

CREATE TABLE `participe_sejour` (
  `id_participe` int(11) NOT NULL,
  `fk_id_sejour` int(5) NOT NULL,
  `fk_id_anim` int(11) DEFAULT NULL,
  `fk_id_dir` int(11) DEFAULT NULL,
  `fk_id_enf` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `sejours`
--

CREATE TABLE `sejours` (
  `id_sejour` int(5) NOT NULL,
  `nom_sejour` varchar(50) DEFAULT NULL,
  `date_debut` date DEFAULT NULL,
  `date_fin` date DEFAULT NULL,
  `lieu_sejour` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `tuteurs`
--

CREATE TABLE `tuteurs` (
  `id_tut` int(11) NOT NULL,
  `mail_tut` varchar(255) DEFAULT NULL,
  `pseudo_tut` varchar(255) DEFAULT NULL,
  `mdp_tut` varchar(255) DEFAULT NULL,
  `nom_tut` varchar(255) DEFAULT NULL,
  `prenom_tut` varchar(255) DEFAULT NULL,
  `num_tut` int(10) DEFAULT NULL,
  `adr_tut` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `animateurs`
--
ALTER TABLE `animateurs`
  ADD PRIMARY KEY (`id_anim`);

--
-- Index pour la table `directeurs`
--
ALTER TABLE `directeurs`
  ADD PRIMARY KEY (`id_dir`);

--
-- Index pour la table `enfants`
--
ALTER TABLE `enfants`
  ADD PRIMARY KEY (`id_enf`),
  ADD KEY `fk_id_tut` (`fk_id_tut`);

--
-- Index pour la table `participe_sejour`
--
ALTER TABLE `participe_sejour`
  ADD PRIMARY KEY (`id_participe`),
  ADD KEY `fk_id_sejour` (`fk_id_sejour`),
  ADD KEY `fk_id_anim` (`fk_id_anim`),
  ADD KEY `fk_id_dir` (`fk_id_dir`),
  ADD KEY `fk_id_enf` (`fk_id_enf`);

--
-- Index pour la table `sejours`
--
ALTER TABLE `sejours`
  ADD PRIMARY KEY (`id_sejour`);

--
-- Index pour la table `tuteurs`
--
ALTER TABLE `tuteurs`
  ADD PRIMARY KEY (`id_tut`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `animateurs`
--
ALTER TABLE `animateurs`
  MODIFY `id_anim` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `directeurs`
--
ALTER TABLE `directeurs`
  MODIFY `id_dir` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `enfants`
--
ALTER TABLE `enfants`
  MODIFY `id_enf` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `participe_sejour`
--
ALTER TABLE `participe_sejour`
  MODIFY `id_participe` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `sejours`
--
ALTER TABLE `sejours`
  MODIFY `id_sejour` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `tuteurs`
--
ALTER TABLE `tuteurs`
  MODIFY `id_tut` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `enfants`
--
ALTER TABLE `enfants`
  ADD CONSTRAINT `enfants_ibfk_1` FOREIGN KEY (`fk_id_tut`) REFERENCES `tuteurs` (`id_tut`);

--
-- Contraintes pour la table `participe_sejour`
--
ALTER TABLE `participe_sejour`
  ADD CONSTRAINT `participe_sejour_ibfk_1` FOREIGN KEY (`fk_id_sejour`) REFERENCES `sejours` (`id_sejour`),
  ADD CONSTRAINT `participe_sejour_ibfk_2` FOREIGN KEY (`fk_id_anim`) REFERENCES `animateurs` (`id_anim`),
  ADD CONSTRAINT `participe_sejour_ibfk_3` FOREIGN KEY (`fk_id_dir`) REFERENCES `directeurs` (`id_dir`),
  ADD CONSTRAINT `participe_sejour_ibfk_4` FOREIGN KEY (`fk_id_enf`) REFERENCES `enfants` (`id_enf`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
