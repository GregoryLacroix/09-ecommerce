-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 10 fév. 2022 à 09:16
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ecommerce`
--

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `id_commande` int(11) NOT NULL,
  `membre_id` int(11) NOT NULL,
  `montant` int(11) NOT NULL,
  `date_enregistrement` datetime NOT NULL,
  `etat` enum('en_cours_de_traitement','envoye','livre') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

CREATE TABLE `commentaire` (
  `id_commentaire` int(11) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `date_enregistrement` datetime NOT NULL,
  `produit_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `details_commande`
--

CREATE TABLE `details_commande` (
  `id_details_commande` int(11) NOT NULL,
  `commande_id` int(11) NOT NULL,
  `produit_id` int(11) NOT NULL,
  `quantite` int(5) NOT NULL,
  `prix` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

CREATE TABLE `membre` (
  `id_membre` int(11) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `civilite` enum('homme','femme') NOT NULL,
  `ville` varchar(255) NOT NULL,
  `code_postal` int(5) UNSIGNED ZEROFILL NOT NULL,
  `adresse` text NOT NULL,
  `statut` enum('admin','user') NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `membre`
--

INSERT INTO `membre` (`id_membre`, `pseudo`, `password`, `nom`, `prenom`, `email`, `civilite`, `ville`, `code_postal`, `adresse`, `statut`) VALUES
(3, 'admin', '$2y$10$aFZ/Fc1lYXcr13vt96ZcHegPowEAzHjec0Xyd2TIdS8ues6X0B/6O', 'LACROIX', 'Gregory', 'admin@gmail.com', 'homme', 'GAMBAIS', 78950, '45 rue des vieilles tuileries', 'admin'),
(4, 'GregFormateur', '$2y$10$AoaUhI4v9SJaGmrwO9uHge33ekbh.LaVEMdGHOeKbyFUDyUscFez6', 'LACROIX', 'Gregory', 'gregorylacroix78@gmail.com', 'homme', 'GAMBAIS', 78950, '45 rue des vieilles tuileries', 'user'),
(9, 'toto', '$2y$10$Q0EnmMEDqDbZ4drdWawQHOM3kmBn7g3fyWqAdJtdro.ZFJM3F8EVq', 'toto', 'toto', 'toto@gmail.com', 'homme', 'totoland', 78000, '45 rue de toto', 'user');

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `id_produit` int(11) NOT NULL,
  `reference` varchar(255) NOT NULL,
  `categorie` varchar(255) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `couleur` varchar(255) NOT NULL,
  `taille` varchar(255) NOT NULL,
  `public` enum('homme','femme','mixte') NOT NULL,
  `photo` varchar(255) NOT NULL,
  `prix` int(5) NOT NULL,
  `stock` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id_produit`, `reference`, `categorie`, `titre`, `description`, `couleur`, `taille`, `public`, `photo`, `prix`, `stock`) VALUES
(1, '15A89', 'tee-shirt', 'tee-shirt bleu', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla semper bibendum augue, ac aliquet tellus. Praesent orci lacus, venenatis non lacinia eget, faucibus ut lacus. Sed vel hendrerit mauris. Nam ac urna et ligula rutrum vehicula. Curabitur tincidunt non tortor sit amet finibus. Curabitur nec semper velit. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec et erat nisl. Donec lobortis lobortis pharetra. Etiam sed scelerisque dolor, et rutrum massa. Duis gravida luctus lorem vitae tempor.', '#7665c8', 'm', 'mixte', 'http://localhost/PHP-wf3-1098/09-ecommerce/assets/uploads/15A89-tee-shirt1.jpg', 15, 89),
(2, '59K12', 'pull', 'pull vert', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla semper bibendum augue, ac aliquet tellus. Praesent orci lacus, venenatis non lacinia eget, faucibus ut lacus. Sed vel hendrerit mauris. Nam ac urna et ligula rutrum vehicula. Curabitur tincidunt non tortor sit amet finibus. Curabitur nec semper velit. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec et erat nisl. Donec lobortis lobortis pharetra. Etiam sed scelerisque dolor, et rutrum massa. Duis gravida luctus lorem vitae tempor.', '#30a152', 's', 'homme', 'http://localhost/PHP-wf3-1098/09-ecommerce/assets/uploads/59K12-tee-shirt10.jpg', 20, 14),
(3, '46O89', 'sweat', 'sweat orange', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla semper bibendum augue, ac aliquet tellus. Praesent orci lacus, venenatis non lacinia eget, faucibus ut lacus. Sed vel hendrerit mauris. Nam ac urna et ligula rutrum vehicula. Curabitur tincidunt non tortor sit amet finibus. Curabitur nec semper velit. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec et erat nisl. Donec lobortis lobortis pharetra. Etiam sed scelerisque dolor, et rutrum massa. Duis gravida luctus lorem vitae tempor.', '#e57b57', 'm', 'femme', 'http://localhost/PHP-wf3-1098/09-ecommerce/assets/uploads/46O89-tee-shirt6.jpg', 25, 71),
(4, '28M39', 'tee-shirt', 'tee-shirt jaune', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla semper bibendum augue, ac aliquet tellus. Praesent orci lacus, venenatis non lacinia eget, faucibus ut lacus. Sed vel hendrerit mauris. Nam ac urna et ligula rutrum vehicula. Curabitur tincidunt non tortor sit amet finibus. Curabitur nec semper velit. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec et erat nisl. Donec lobortis lobortis pharetra. Etiam sed scelerisque dolor, et rutrum massa. Duis gravida luctus lorem vitae tempor.', '#e1ec93', 'l', 'femme', 'http://localhost/PHP-wf3-1098/09-ecommerce/assets/uploads/28M39-tee-shirt3.jpg', 10, 99),
(5, '37C73', 'pull', 'pull marron', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla semper bibendum augue, ac aliquet tellus. Praesent orci lacus, venenatis non lacinia eget, faucibus ut lacus. Sed vel hendrerit mauris. Nam ac urna et ligula rutrum vehicula. Curabitur tincidunt non tortor sit amet finibus. Curabitur nec semper velit. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec et erat nisl. Donec lobortis lobortis pharetra. Etiam sed scelerisque dolor, et rutrum massa. Duis gravida luctus lorem vitae tempor.', '#7d755e', 'xl', 'mixte', 'http://localhost/PHP-wf3-1098/09-ecommerce/assets/uploads/37C73-tee-shirt8.jpg', 15, 28),
(6, '83L19', 'sweat', 'sweat rouge', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla semper bibendum augue, ac aliquet tellus. Praesent orci lacus, venenatis non lacinia eget, faucibus ut lacus. Sed vel hendrerit mauris. Nam ac urna et ligula rutrum vehicula. Curabitur tincidunt non tortor sit amet finibus. Curabitur nec semper velit. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec et erat nisl. Donec lobortis lobortis pharetra. Etiam sed scelerisque dolor, et rutrum massa. Duis gravida luctus lorem vitae tempor.', '#cb2e06', 's', 'homme', 'http://localhost/PHP-wf3-1098/09-ecommerce/assets/uploads/83L19-tee-shirt9.jpg', 17, 82);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`id_commande`),
  ADD KEY `membre_id` (`membre_id`);

--
-- Index pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD PRIMARY KEY (`id_commentaire`);

--
-- Index pour la table `details_commande`
--
ALTER TABLE `details_commande`
  ADD PRIMARY KEY (`id_details_commande`),
  ADD KEY `produit_id` (`produit_id`);

--
-- Index pour la table `membre`
--
ALTER TABLE `membre`
  ADD PRIMARY KEY (`id_membre`),
  ADD UNIQUE KEY `pseudo` (`pseudo`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id_produit`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `id_commande` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `commentaire`
--
ALTER TABLE `commentaire`
  MODIFY `id_commentaire` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `details_commande`
--
ALTER TABLE `details_commande`
  MODIFY `id_details_commande` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `membre`
--
ALTER TABLE `membre`
  MODIFY `id_membre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `id_produit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
