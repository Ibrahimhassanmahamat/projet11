-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 31 mai 2025 à 11:15
-- Version du serveur : 10.4.25-MariaDB
-- Version de PHP : 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ibrah`
--

-- --------------------------------------------------------

--
-- Structure de la table `administrateur`
--

CREATE TABLE `administrateur` (
  `id` int(15) NOT NULL,
  `id_resto` int(15) NOT NULL,
  `nom` varchar(55) NOT NULL,
  `prenom` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `motdepasse` varchar(10) NOT NULL,
  `tel` int(15) NOT NULL,
  `genre` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `administrateur`
--

INSERT INTO `administrateur` (`id`, `id_resto`, `nom`, `prenom`, `email`, `motdepasse`, `tel`, `genre`) VALUES
(1, 1, 'berosbaye', 'kamis', 'berosbayekamis@gmail.com', '1234', 66556877, 'masculin'),
(9, 1, 'BURROWS', 'KMS', 'burrowskms@gmail.com', '1234', 656689640, 'masculin');

--
-- Déclencheurs `administrateur`
--
DELIMITER $$
CREATE TRIGGER `test` BEFORE INSERT ON `administrateur` FOR EACH ROW SET new.nom = upper(new.nom)
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `test2` BEFORE INSERT ON `administrateur` FOR EACH ROW SET new.prenom = upper(new.prenom)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `id_client` int(50) NOT NULL,
  `id_resto` int(15) NOT NULL,
  `nom` varchar(55) NOT NULL,
  `prenom` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `genre` varchar(55) DEFAULT NULL,
  `age` int(15) DEFAULT NULL,
  `telephone` int(15) NOT NULL,
  `nationalite` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déclencheurs `client`
--
DELIMITER $$
CREATE TRIGGER `nom_majuscule` BEFORE INSERT ON `client` FOR EACH ROW SET new.nom = upper(new.nom)
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `prenom_majuscule` BEFORE INSERT ON `client` FOR EACH ROW SET new.prenom = upper(new.prenom)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

CREATE TABLE `commentaires` (
  `id_comment` int(50) NOT NULL,
  `titre` varchar(50) NOT NULL,
  `contenu` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `commentaires`
--

INSERT INTO `commentaires` (`id_comment`, `titre`, `contenu`) VALUES
(4, 'commentaire', 'salut'),
(5, 'RUTITRJGF', 'ZJEKDFHGBD?FKRIR'),
(6, 'ggg', 'ryad/vuz;d nlvdjcldiskzx'),
(7, 'rurrr', 'covuipfbrrfyrfbfsdn b sjfhiwlvsdnw v,'),
(8, 'telephone', 'd\'accord merci\r\n\r\n'),
(9, 'telephone', 'd\'accord merci\r\n\r\n'),
(10, 'telephone', 'ezuekzailymduçeafokz\r\nredx ');

-- --------------------------------------------------------

--
-- Structure de la table `faire`
--

CREATE TABLE `faire` (
  `id_faire` int(50) NOT NULL,
  `id_client` int(50) NOT NULL,
  `id_reser` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `faire`
--

INSERT INTO `faire` (`id_faire`, `id_client`, `id_reser`) VALUES
(6, 8, 9),
(8, 10, 11),
(11, 13, 14);

-- --------------------------------------------------------

--
-- Structure de la table `gerer`
--

CREATE TABLE `gerer` (
  `id_gerer` int(50) NOT NULL,
  `id_admin` int(15) NOT NULL,
  `id_tabtente` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `gerer`
--

INSERT INTO `gerer` (`id_gerer`, `id_admin`, `id_tabtente`) VALUES
(2, 1, 34),
(3, 1, 35);

-- --------------------------------------------------------

--
-- Structure de la table `paiement`
--

CREATE TABLE `paiement` (
  `id_paie` int(50) NOT NULL,
  `mode_paie` varchar(50) NOT NULL,
  `prix_paie` int(55) NOT NULL,
  `tel_paie` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `paiement`
--

INSERT INTO `paiement` (`id_paie`, `mode_paie`, `prix_paie`, `tel_paie`) VALUES
(9, 'Orange Money', 10000, 657572926),
(11, 'Orange Money', 15000, 692242568),
(14, 'Orange Money', 30000, 690897718);

-- --------------------------------------------------------

--
-- Structure de la table `reservations`
--

CREATE TABLE `reservations` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `age` int(11) NOT NULL,
  `genre` varchar(50) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `pays` varchar(100) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `ville` varchar(100) NOT NULL,
  `ville_des` varchar(100) NOT NULL,
  `classe` varchar(50) NOT NULL,
  `date_demande` datetime NOT NULL,
  `style` varchar(100) NOT NULL,
  `mode_paie` varchar(50) NOT NULL,
  `tel_paie` varchar(20) NOT NULL,
  `tentes` int(11) DEFAULT NULL,
  `chaises` int(11) DEFAULT NULL,
  `tables` int(11) DEFAULT NULL,
  `couverts` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `reservations`
--

INSERT INTO `reservations` (`id`, `nom`, `prenom`, `age`, `genre`, `email`, `pays`, `tel`, `ville`, `ville_des`, `classe`, `date_demande`, `style`, `mode_paie`, `tel_paie`, `tentes`, `chaises`, `tables`, `couverts`) VALUES
(49, 'sq', 'sqqs', 22, 'Autre', 'rrrrrf@gmail.com', 'Cameroon', '4345', 'Reservation pro', 'Ville Ndéré', 'Commerciale', '2025-05-29 20:44:00', 'ceremonie de mariage', 'Orange Money', '332323333232', 332, 0, NULL, 0),
(50, 'aaaaewr', 'erewrwer', 33, 'Autre', 'kjldlsjk@gmail.com', 'Cameroon', '32344333', 'Reservation pro', 'Ville Ndéré', 'Commerciale', '2025-05-29 20:53:00', 'ceremonie de mariage', 'Orange Money', '43443444343', 32323, 23232, NULL, 323232),
(51, 'wqqqw', 'wqwqw', 32, 'Autre', 'sdsdds@gmail.com', 'Cameroon', '323443', 'Reservation pro', 'Ville Ndéré', 'Commerciale', '2025-05-29 21:00:00', 'ceremonie de mariage', 'Orange Money', '3423443224', 0, 2342344, NULL, 23323323),
(52, 'qeew', 'qwewqewq', 33, 'Autre', 'jhhhj@gmail.com', 'Cameroon', '44434343', 'Reservation pro', 'Ville Ndéré', 'Commerciale', '2025-05-29 21:02:00', 'ceremonie de mariage', 'Orange Money', '45435455', 0, 4343344, NULL, 4343),
(53, 'wqwq', 'wqwqqw', 22, 'Autre', 'assds@gmail.com', 'Cameroon', '3223333223332', 'Reservation pro', 'Ville Ndéré', 'Commerciale', '2025-05-29 21:07:00', 'ceremonie de mariage', 'Orange Money', '32234444344', 0, 323444, NULL, 432434343),
(54, 'wwqqw', 'wqwqw', 33, 'Autre', 'sahgshhg@gmail.com', 'Cameroon', '34434343', 'Reservation pro', 'Ville Ndéré', 'Commerciale', '2025-05-29 21:21:00', 'ceremonie de mariage', 'Orange Money', '32233322332', 0, 232, NULL, 3223),
(55, 'eqeeeee', 'eee222', 33, 'Autre', 'dshjjdsjk@gmail.com', 'Cameroon', '2334434344', 'Reservation pro', 'Ville Ndéré', 'Commerciale', '2025-05-29 21:32:00', 'ceremonie de mariage', 'Orange Money', '32233323', 0, 443343, NULL, 434343),
(56, 'eqeeeee', 'eee222', 33, 'Autre', 'dshjjdsjk@gmail.com', 'Cameroon', '2334434344', 'Reservation pro', 'Ville Ndéré', 'Commerciale', '2025-05-29 21:32:00', 'ceremonie de mariage', 'Orange Money', '32233323', 0, 443343, NULL, 434343),
(57, 'wwqq', 'wqwq', 22, 'Autre', 'njkk@gmail.com', 'Cameroon', '233333333', 'Reservation pro', 'Ville Ndéré', 'Commerciale', '2025-05-29 21:47:00', 'ceremonie de mariage', 'Orange Money', '32323233223', 0, 11243323, NULL, 333333),
(58, 'wq', 'qq', 33, 'Autre', 'snkkckj@gmail.com', 'Cameroon', '3223332', 'Reservation pro', 'Ville Ndéré', 'Commerciale', '2025-05-29 21:49:00', 'ceremonie de mariage', 'Orange Money', '3233323', 0, 323232323, NULL, 0),
(59, 'wqwq', 'ww', 33, 'Autre', 'eee@gmail.com', 'Cameroon', '237672191287', 'Reservation pro', 'Ville Ndéré', 'Commerciale', '2025-05-29 22:28:00', 'ceremonie de mariage', 'Orange Money', 'q33', 0, 0, NULL, 0),
(60, 'dffsff', 'ettsff', 23, 'Autre', 'uvsc@gmail.com', 'Cameroon', '235672191287', 'Reservation pro', 'Ville Ndéré', 'Commerciale', '2025-05-29 22:35:00', 'ceremonie de mariage', 'Mtn MoMo', '235672191287', 22, 23, NULL, 33),
(61, 'rsref', 'hgeu', 25, 'Autre', 'ibrahasssan@gmail.com', 'Cameroon', '554666746646464', 'Reservation pro', 'Ville Ndéré', 'Commerciale', '2025-05-31 11:05:00', 'ceremonie de mariage', 'Orange Money', '555666464', 44444, 44443, NULL, 43344);

-- --------------------------------------------------------

--
-- Structure de la table `resto_ndere`
--

CREATE TABLE `resto_ndere` (
  `id_resto` int(15) NOT NULL,
  `nom_resto` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `localite` varchar(55) NOT NULL,
  `tel_resto` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `resto_ndere`
--

INSERT INTO `resto_ndere` (`id_resto`, `nom_resto`, `email`, `localite`, `tel_resto`) VALUES
(1, 'Resto de la ville', 'restoville@gmail.com', 'Ngaoundéré', 656689640);

-- --------------------------------------------------------

--
-- Structure de la table `suggerer`
--

CREATE TABLE `suggerer` (
  `id_suggerer` int(50) NOT NULL,
  `id_client` int(50) NOT NULL,
  `id_comment` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `tabtente`
--

CREATE TABLE `tabtente` (
  `id_tabtente` int(50) NOT NULL,
  `classe` varchar(20) NOT NULL,
  `prix` int(15) NOT NULL,
  `nb_reservation` int(15) NOT NULL,
  `ville_demande` varchar(50) NOT NULL,
  `destination` varchar(50) NOT NULL,
  `horaire` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id_utilisateur` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id_utilisateur`, `nom`, `email`, `password`) VALUES
(1, 'hassan ibrahim', 'tibrahassanmahamat@gmail.com', 0),
(2, 'hassan ibrahim', 'ibrahassanmahamat@gmail.com', 0),
(3, 'rre', 'tibrahaaaa@gmail.com', 0),
(4, 'ttggd', 'rsffs@gmail.com', 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `administrateur`
--
ALTER TABLE `administrateur`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_resto` (`id_resto`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id_client`),
  ADD KEY `id_resto` (`id_resto`);

--
-- Index pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD PRIMARY KEY (`id_comment`);

--
-- Index pour la table `faire`
--
ALTER TABLE `faire`
  ADD PRIMARY KEY (`id_faire`),
  ADD KEY `id_client` (`id_client`),
  ADD KEY `id_reser` (`id_reser`);

--
-- Index pour la table `gerer`
--
ALTER TABLE `gerer`
  ADD PRIMARY KEY (`id_gerer`),
  ADD KEY `id_tabtente` (`id_tabtente`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Index pour la table `paiement`
--
ALTER TABLE `paiement`
  ADD PRIMARY KEY (`id_paie`);

--
-- Index pour la table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `resto_ndere`
--
ALTER TABLE `resto_ndere`
  ADD PRIMARY KEY (`id_resto`);

--
-- Index pour la table `suggerer`
--
ALTER TABLE `suggerer`
  ADD PRIMARY KEY (`id_suggerer`),
  ADD KEY `id_client` (`id_client`),
  ADD KEY `id_comment` (`id_comment`);

--
-- Index pour la table `tabtente`
--
ALTER TABLE `tabtente`
  ADD PRIMARY KEY (`id_tabtente`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id_utilisateur`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `administrateur`
--
ALTER TABLE `administrateur`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `id_client` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `commentaires`
--
ALTER TABLE `commentaires`
  MODIFY `id_comment` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `faire`
--
ALTER TABLE `faire`
  MODIFY `id_faire` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `gerer`
--
ALTER TABLE `gerer`
  MODIFY `id_gerer` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `paiement`
--
ALTER TABLE `paiement`
  MODIFY `id_paie` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT pour la table `resto_ndere`
--
ALTER TABLE `resto_ndere`
  MODIFY `id_resto` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `suggerer`
--
ALTER TABLE `suggerer`
  MODIFY `id_suggerer` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `tabtente`
--
ALTER TABLE `tabtente`
  MODIFY `id_tabtente` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id_utilisateur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `administrateur`
--
ALTER TABLE `administrateur`
  ADD CONSTRAINT `administrateur_ibfk_1` FOREIGN KEY (`id_resto`) REFERENCES `resto_ndere` (`id_resto`);

--
-- Contraintes pour la table `client`
--
ALTER TABLE `client`
  ADD CONSTRAINT `client_ibfk_1` FOREIGN KEY (`id_resto`) REFERENCES `resto_ndere` (`id_resto`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
