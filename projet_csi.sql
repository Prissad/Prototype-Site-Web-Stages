-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mar. 23 avr. 2019 à 04:41
-- Version du serveur :  10.1.38-MariaDB
-- Version de PHP :  7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projet_csi`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id` varchar(30) NOT NULL,
  `admin_mdp` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `admin_mdp`) VALUES
('admin1', '12345');

-- --------------------------------------------------------

--
-- Structure de la table `certification`
--

CREATE TABLE `certification` (
  `id` int(11) NOT NULL,
  `titre` varchar(20) NOT NULL,
  `emplacement` varchar(30) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `certification`
--

INSERT INTO `certification` (`id`, `titre`, `emplacement`, `photo`) VALUES
(1, 'titre1', '@1', 'stage.jpg'),
(2, 'titre2', '@2', 'stage 2.jpg'),
(3, 'titre3', '@3', 'stage 3.jpg'),
(4, 'titre4', '@4', 'stage 4.png'),
(5, 'titre5', '@5', 'stage 5.png'),
(6, 'titre6', '@6', 'stage 6.png'),
(7, 'titre7', '@7', 'stage 7.png');

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

CREATE TABLE `etudiant` (
  `etudiant_pseudo` varchar(50) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `etudiant_mdp` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `etudiant`
--

INSERT INTO `etudiant` (`etudiant_pseudo`, `mail`, `etudiant_mdp`) VALUES
('et1', 'etudiant1@et.et', 123);

-- --------------------------------------------------------

--
-- Structure de la table `societe`
--

CREATE TABLE `societe` (
  `adresse` varchar(50) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `societe_mdp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `societe`
--

INSERT INTO `societe` (`adresse`, `mail`, `societe_mdp`) VALUES
('@1', 'so1@so.so', 'aaa'),
('@1', 'societe1@so.so', '123');

-- --------------------------------------------------------

--
-- Structure de la table `stage`
--

CREATE TABLE `stage` (
  `id` int(11) NOT NULL,
  `titre` varchar(20) NOT NULL,
  `emplacement` varchar(30) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `stage`
--

INSERT INTO `stage` (`id`, `titre`, `emplacement`, `photo`) VALUES
(1, 'titre1', '@1', 'stage.jpg'),
(2, 'titre2', '@2', 'stage 2.jpg'),
(3, 'titre3', '@3', 'stage 3.jpg'),
(4, 'titre4', '@4', 'stage 4.png'),
(5, 'titre5', '@5', 'stage 5.png'),
(6, 'titre6', '@6', 'stage 6.png'),
(7, 'titre7', '@7', 'stage 7.png'),
(8, 'titre8', '@8', 'stage.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `workshop`
--

CREATE TABLE `workshop` (
  `id` int(11) NOT NULL,
  `titre` varchar(20) NOT NULL,
  `emplacement` varchar(30) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `workshop`
--

INSERT INTO `workshop` (`id`, `titre`, `emplacement`, `photo`) VALUES
(1, 'titre1', '@1', 'stage.jpg'),
(2, 'titre2', '@2', 'stage 2.jpg'),
(3, 'titre3', '@3', 'stage 3.jpg'),
(4, 'titre4', '@4', 'stage 4.png'),
(5, 'titre5', '@5', 'stage 5.png'),
(6, 'titre6', '@6', 'stage 6.png'),
(7, 'titre7', '@7', 'stage 7.png');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `certification`
--
ALTER TABLE `certification`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD PRIMARY KEY (`etudiant_pseudo`);

--
-- Index pour la table `societe`
--
ALTER TABLE `societe`
  ADD PRIMARY KEY (`mail`);

--
-- Index pour la table `stage`
--
ALTER TABLE `stage`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `workshop`
--
ALTER TABLE `workshop`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `certification`
--
ALTER TABLE `certification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `stage`
--
ALTER TABLE `stage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `workshop`
--
ALTER TABLE `workshop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
