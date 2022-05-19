-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mer. 10 jan. 2018 à 23:06
-- Version du serveur :  10.1.25-MariaDB
-- Version de PHP :  7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `bddqcm`
--

-- --------------------------------------------------------

--
-- Structure de la table `etudiants`
--

CREATE TABLE `etudiants` (
  `idEtudiant` int(11) NOT NULL,
  `login` varchar(15) NOT NULL,
  `motDePasse` smallint(15) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `etudiants`
--

INSERT INTO `etudiants` (`idEtudiant`, `login`, `motDePasse`, `nom`, `prenom`, `email`) VALUES
(1, 'ben', 1234, 'Alison', 'Benjamin', 'alison.benjamin@hotmail.fr'),
(5, 'tof', 1234, 'Gand', 'Christophe', 'gand.christophe@free.fr'),
(6, 'lulu', 1234, 'Gand', 'Lucile', 'gand.lucile@bbox.fr');

-- --------------------------------------------------------

--
-- Structure de la table `qcmfait`
--

CREATE TABLE `qcmfait` (
  `idEtudiant` int(11) NOT NULL,
  `idQuestionnaire` int(11) NOT NULL,
  `dateFait` varchar(10) NOT NULL,
  `point` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `qcmfait`
--

INSERT INTO `qcmfait` (`idEtudiant`, `idQuestionnaire`, `dateFait`, `point`) VALUES
(1, 1, '06-01-2018', 0),
(1, 2, '07-01-2018', 0),
(5, 1, '07-04-2017', 0),
(5, 2, '07-01-2018', 0),
(5, 3, '2017-03-29', 0);

-- --------------------------------------------------------

--
-- Structure de la table `question`
--

CREATE TABLE `question` (
  `idQuestion` int(11) NOT NULL,
  `libelleQuestion` varchar(100) NOT NULL,
  `type` int(11) NOT NULL,
  `nbReponse` int(11) NOT NULL,
  `nbBonneReponse` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `question`
--

INSERT INTO `question` (`idQuestion`, `libelleQuestion`, `type`, `nbReponse`, `nbBonneReponse`) VALUES
(1, 'Complétez le titre du film \"L\'étrange histoire de ...\"', 1, 4, 1),
(2, 'En quelle année est né Woody Alen ?', 1, 4, 1),
(3, 'Quel est le premier film de Léonardo Di Caprio ?', 1, 4, 1),
(4, 'Qui jouaient dans le film \"Rock N Roll\" ?', 1, 4, 3),
(5, 'Qui est l’entraîneur d\'Arsenal ?', 1, 4, 1),
(6, 'En quelle année Nantes a été champion de Fance ?', 1, 6, 4),
(7, 'Qui est le meilleur buteur de ligue 1 pour l\'année 2015-2016 ?', 1, 3, 1),
(8, 'Quelle est la hauteur de la tour Eiffel ?', 1, 3, 1),
(9, 'Qui a écrit l\'étranger ?', 1, 3, 1),
(10, 'Quelle est la capitale de la Roumanie ?', 1, 3, 1);

-- --------------------------------------------------------

--
-- Structure de la table `questionnaire`
--

CREATE TABLE `questionnaire` (
  `idQuestionnaire` int(11) NOT NULL,
  `libelleQuestionnaire` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `questionnaire`
--

INSERT INTO `questionnaire` (`idQuestionnaire`, `libelleQuestionnaire`) VALUES
(1, 'Cinéma'),
(2, 'Foot'),
(3, 'Culture générale');

-- --------------------------------------------------------

--
-- Structure de la table `questionquestionnaire`
--

CREATE TABLE `questionquestionnaire` (
  `idQuestionnaire` int(11) NOT NULL,
  `idQuestion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `questionquestionnaire`
--

INSERT INTO `questionquestionnaire` (`idQuestionnaire`, `idQuestion`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(2, 5),
(2, 6),
(2, 7),
(3, 8),
(3, 9),
(3, 10);

-- --------------------------------------------------------

--
-- Structure de la table `questionreponse`
--

CREATE TABLE `questionreponse` (
  `idQuestion` int(11) NOT NULL,
  `idReponse` int(11) NOT NULL,
  `ordre` int(11) NOT NULL,
  `bonne` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `questionreponse`
--

INSERT INTO `questionreponse` (`idQuestion`, `idReponse`, `ordre`, `bonne`) VALUES
(1, 1, 1, 0),
(1, 2, 2, 1),
(1, 3, 3, 0),
(1, 4, 4, 0),
(2, 5, 1, 0),
(2, 6, 2, 1),
(2, 7, 3, 0),
(2, 8, 4, 0),
(3, 9, 1, 0),
(3, 10, 2, 1),
(3, 11, 3, 0),
(4, 12, 1, 1),
(4, 13, 2, 0),
(4, 14, 3, 1),
(4, 15, 4, 1),
(5, 16, 1, 0),
(5, 17, 2, 0),
(5, 18, 3, 1),
(5, 19, 4, 0),
(6, 20, 1, 0),
(6, 21, 2, 1),
(6, 22, 3, 1),
(6, 23, 4, 1),
(6, 24, 5, 0),
(6, 25, 6, 1),
(7, 26, 1, 1),
(7, 27, 2, 0),
(7, 28, 3, 0),
(8, 29, 1, 0),
(8, 30, 2, 1),
(8, 31, 3, 0),
(9, 32, 1, 0),
(9, 33, 2, 0),
(9, 34, 3, 1),
(10, 35, 1, 1),
(10, 36, 2, 0),
(10, 37, 3, 0);

-- --------------------------------------------------------

--
-- Structure de la table `reponse`
--

CREATE TABLE `reponse` (
  `idReponse` int(11) NOT NULL,
  `valeur` text NOT NULL,
  `cheminImage` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `reponse`
--

INSERT INTO `reponse` (`idReponse`, `valeur`, `cheminImage`) VALUES
(1, 'Benji', ''),
(2, 'Benjamin Button', ''),
(3, 'Benjamin Gates', ''),
(4, 'Benjamin Constant', ''),
(5, '1930', ''),
(6, '1935', ''),
(7, '1940', ''),
(8, '1945', ''),
(9, 'Piranha 2', ''),
(10, 'Critters 3', ''),
(11, 'Amityville II', ''),
(12, 'Guillaume Canet', ''),
(13, 'Clovis Cornillac', ''),
(14, 'Marion Cotillard', ''),
(15, 'Gilles Lelouche', ''),
(16, 'Raymond Domenech', ''),
(17, 'Elie Baup', ''),
(18, 'Arsène Wenger', ''),
(19, 'José Mourinho', ''),
(20, '1964', ''),
(21, '1965', ''),
(22, '1980', ''),
(23, '1983', ''),
(24, '1986', ''),
(25, '1995', ''),
(26, 'Edinson Cavani', ''),
(27, 'Alexandre Lacazette', ''),
(28, 'Bafetimbi Gomis', ''),
(29, '320', ''),
(30, '324', ''),
(31, '328', ''),
(32, 'Victor Hugo', ''),
(33, 'Boris Vian', ''),
(34, 'Albert Camus', ''),
(35, 'Bucarest', ''),
(36, 'Budapest', ''),
(37, 'Sofia', '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `etudiants`
--
ALTER TABLE `etudiants`
  ADD PRIMARY KEY (`idEtudiant`),
  ADD UNIQUE KEY `idEtudiant` (`idEtudiant`);

--
-- Index pour la table `qcmfait`
--
ALTER TABLE `qcmfait`
  ADD PRIMARY KEY (`idEtudiant`,`idQuestionnaire`),
  ADD KEY `idQuestionnaire` (`idQuestionnaire`);

--
-- Index pour la table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`idQuestion`);

--
-- Index pour la table `questionnaire`
--
ALTER TABLE `questionnaire`
  ADD PRIMARY KEY (`idQuestionnaire`);

--
-- Index pour la table `questionquestionnaire`
--
ALTER TABLE `questionquestionnaire`
  ADD PRIMARY KEY (`idQuestionnaire`,`idQuestion`),
  ADD KEY `idQuestion` (`idQuestion`);

--
-- Index pour la table `questionreponse`
--
ALTER TABLE `questionreponse`
  ADD PRIMARY KEY (`idQuestion`,`idReponse`),
  ADD KEY `idReponse` (`idReponse`);

--
-- Index pour la table `reponse`
--
ALTER TABLE `reponse`
  ADD PRIMARY KEY (`idReponse`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `etudiants`
--
ALTER TABLE `etudiants`
  MODIFY `idEtudiant` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `question`
--
ALTER TABLE `question`
  MODIFY `idQuestion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `reponse`
--
ALTER TABLE `reponse`
  MODIFY `idReponse` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `qcmfait`
--
ALTER TABLE `qcmfait`
  ADD CONSTRAINT `qcmfait_ibfk_1` FOREIGN KEY (`idQuestionnaire`) REFERENCES `questionnaire` (`idQuestionnaire`),
  ADD CONSTRAINT `qcmfait_ibfk_2` FOREIGN KEY (`idEtudiant`) REFERENCES `etudiants` (`idEtudiant`);

--
-- Contraintes pour la table `questionquestionnaire`
--
ALTER TABLE `questionquestionnaire`
  ADD CONSTRAINT `questionquestionnaire_ibfk_1` FOREIGN KEY (`idQuestionnaire`) REFERENCES `questionnaire` (`idQuestionnaire`),
  ADD CONSTRAINT `questionquestionnaire_ibfk_2` FOREIGN KEY (`idQuestion`) REFERENCES `question` (`idQuestion`);

--
-- Contraintes pour la table `questionreponse`
--
ALTER TABLE `questionreponse`
  ADD CONSTRAINT `questionreponse_ibfk_1` FOREIGN KEY (`idQuestion`) REFERENCES `question` (`idQuestion`),
  ADD CONSTRAINT `questionreponse_ibfk_2` FOREIGN KEY (`idReponse`) REFERENCES `reponse` (`idReponse`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
