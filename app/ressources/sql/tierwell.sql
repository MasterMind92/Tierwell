-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Lun 27 Novembre 2017 à 18:03
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `tierwell`
--

-- --------------------------------------------------------

--
-- Structure de la table `avoir`
--

CREATE TABLE `avoir` (
  `idav` int(11) NOT NULL,
  `idpers` int(11) NOT NULL,
  `idmat` int(11) NOT NULL,
  `idmais` int(11) NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `datemp` datetime NOT NULL,
  `dateremp` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `idcat` int(11) NOT NULL,
  `libcat` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `concerner`
--

CREATE TABLE `concerner` (
  `idcon` int(11) NOT NULL,
  `idphase` int(11) NOT NULL,
  `idmais` int(11) NOT NULL,
  `etat` int(11) NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `datecon` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `echeance`
--

CREATE TABLE `echeance` (
  `id_ech` int(11) NOT NULL,
  `date_deb_ech` date DEFAULT NULL,
  `date_fin_ech` date DEFAULT NULL,
  `mt_fin_ech` double DEFAULT NULL,
  `mt_paye_ech` double DEFAULT NULL,
  `etat_solde_ech` tinyint(1) DEFAULT NULL,
  `mt_rest_ech` double DEFAULT NULL,
  `id_fact` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `facture`
--

CREATE TABLE `facture` (
  `id_fact` int(11) NOT NULL,
  `idmais` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `fournir`
--

CREATE TABLE `fournir` (
  `idfr` int(11) NOT NULL,
  `idmat` int(11) NOT NULL,
  `idfour` int(11) NOT NULL,
  `datefr` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `fournisseur`
--

CREATE TABLE `fournisseur` (
  `idfour` int(11) NOT NULL,
  `rsocial` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contfour` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sitfour` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `ilot`
--

CREATE TABLE `ilot` (
  `id_ilot` int(11) NOT NULL,
  `code_ilot` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `lier`
--

CREATE TABLE `lier` (
  `idlier` int(11) NOT NULL,
  `idrep` int(11) NOT NULL,
  `idmat` int(11) NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `datepan` datetime NOT NULL,
  `daterep` datetime NOT NULL,
  `etat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `lot`
--

CREATE TABLE `lot` (
  `id_lot` int(11) NOT NULL,
  `code_lot` varchar(25) DEFAULT NULL,
  `id_ilot` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `maison`
--

CREATE TABLE `maison` (
  `idmais` int(11) NOT NULL,
  `matmais` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idmod` int(11) NOT NULL,
  `id_lot` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `materiel`
--

CREATE TABLE `materiel` (
  `idmat` int(11) NOT NULL,
  `libmat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descrip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idcat` int(11) NOT NULL,
  `etat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



--
-- Structure de la table `model`
--

CREATE TABLE `model` (
  `idmod` int(11) NOT NULL,
  `libmod` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `offre`
--

CREATE TABLE `offre` (
  `idof` int(11) NOT NULL,
  `matof` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dofd` date NOT NULL,
  `doff` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personnel`
--

CREATE TABLE `personnel` (
  `idpers` int(11) NOT NULL,
  `nppers` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contp` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emp` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `log` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pwd` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `datenais` date NOT NULL,
  `sexe` char(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idrole` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `phase`
--

CREATE TABLE `phase` (
  `idphase` int(11) NOT NULL,
  `libphase` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `profil`
--

CREATE TABLE `profil` (
  `idprof` int(11) NOT NULL,
  `login` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pwd` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `rattacher`
--

CREATE TABLE `rattacher` (
  `idrat` int(11) NOT NULL,
  `idof` int(11) NOT NULL,
  `idmais` int(11) NOT NULL,
  `daterat` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `rdv`
--

CREATE TABLE `rdv` (
  `id_rdv` int(11) NOT NULL,
  `date_rdv` date DEFAULT NULL,
  `jour_rdv` varchar(15) DEFAULT NULL,
  `mois_rdv` varchar(15) DEFAULT NULL,
  `annee_rdv` varchar(15) DEFAULT NULL,
  `heure_deb_rdv` int(11) DEFAULT NULL,
  `heure_fin_rdv` int(11) DEFAULT NULL,
  `lib_jour_rdv` varchar(15) DEFAULT NULL,
  `etat_rdv` varchar(15) DEFAULT NULL,
  `idsous` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `reparation`
--

CREATE TABLE `reparation` (
  `idrep` int(11) NOT NULL,
  `librep` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

CREATE TABLE `role` (
  `idrole` int(11) NOT NULL,
  `librole` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `souscripteur`
--

CREATE TABLE `souscripteur` (
  `idsous` int(11) NOT NULL,
  `npsous` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contsous` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emsous` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `log` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pwd` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `datenais` date NOT NULL,
  `sexe` char(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idrole` int(11) NOT NULL,
  `idvil` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `versement`
--

CREATE TABLE `versement` (
  `id_vers` int(11) NOT NULL,
  `date_vers` date DEFAULT NULL,
  `mt_vers` double DEFAULT NULL,
  `idsous` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `ville`
--

CREATE TABLE `ville` (
  `idvil` int(11) NOT NULL,
  `libvil` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `avoir`
--
ALTER TABLE `avoir`
  ADD PRIMARY KEY (`idav`),
  ADD KEY `avoir_idmat_foreign` (`idmat`),
  ADD KEY `avoir_idmais_foreign` (`idmais`),
  ADD KEY `avoir_idpers_foreign` (`idpers`);

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`idcat`),
  ADD UNIQUE KEY `categorie_libcat_unique` (`libcat`);

--
-- Index pour la table `concerner`
--
ALTER TABLE `concerner`
  ADD PRIMARY KEY (`idcon`),
  ADD KEY `concerner_idphase_foreign` (`idphase`),
  ADD KEY `concerner_idmais_foreign` (`idmais`);

--
-- Index pour la table `echeance`
--
ALTER TABLE `echeance`
  ADD PRIMARY KEY (`id_ech`),
  ADD KEY `fk_ech_fact` (`id_fact`);

--
-- Index pour la table `facture`
--
ALTER TABLE `facture`
  ADD PRIMARY KEY (`id_fact`),
  ADD KEY `fk_fact_mais` (`idmais`);

--
-- Index pour la table `fournir`
--
ALTER TABLE `fournir`
  ADD PRIMARY KEY (`idfr`),
  ADD KEY `fournir_idmat_foreign` (`idmat`),
  ADD KEY `fournir_idfour_foreign` (`idfour`);

--
-- Index pour la table `fournisseur`
--
ALTER TABLE `fournisseur`
  ADD PRIMARY KEY (`idfour`),
  ADD UNIQUE KEY `fournisseur_rsocial_unique` (`rsocial`),
  ADD UNIQUE KEY `fournisseur_contfour_unique` (`contfour`);

--
-- Index pour la table `ilot`
--
ALTER TABLE `ilot`
  ADD PRIMARY KEY (`id_ilot`);

--
-- Index pour la table `lier`
--
ALTER TABLE `lier`
  ADD PRIMARY KEY (`idlier`),
  ADD KEY `lier_idrep_foreign` (`idrep`),
  ADD KEY `lier_idmat_foreign` (`idmat`);

--
-- Index pour la table `lot`
--
ALTER TABLE `lot`
  ADD PRIMARY KEY (`id_lot`),
  ADD KEY `fk_lot_ilot` (`id_ilot`);

--
-- Index pour la table `maison`
--
ALTER TABLE `maison`
  ADD PRIMARY KEY (`idmais`),
  ADD KEY `fk_mais_lot` (`id_lot`);

--
-- Index pour la table `materiel`
--
ALTER TABLE `materiel`
  ADD PRIMARY KEY (`idmat`),
  ADD KEY `materiel_idcat_foreign` (`idcat`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `model`
--
ALTER TABLE `model`
  ADD PRIMARY KEY (`idmod`);

--
-- Index pour la table `offre`
--
ALTER TABLE `offre`
  ADD PRIMARY KEY (`idof`);

--
-- Index pour la table `personnel`
--
ALTER TABLE `personnel`
  ADD PRIMARY KEY (`idpers`),
  ADD UNIQUE KEY `personnel_contp_unique` (`contp`),
  ADD UNIQUE KEY `personnel_emp_unique` (`emp`),
  ADD UNIQUE KEY `personnel_log_unique` (`log`),
  ADD KEY `personnel_idrole_foreign` (`idrole`);

--
-- Index pour la table `phase`
--
ALTER TABLE `phase`
  ADD PRIMARY KEY (`idphase`);

--
-- Index pour la table `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`idprof`),
  ADD UNIQUE KEY `profil_login_unique` (`login`);

--
-- Index pour la table `rattacher`
--
ALTER TABLE `rattacher`
  ADD PRIMARY KEY (`idrat`),
  ADD KEY `rattacher_idof_foreign` (`idof`),
  ADD KEY `rattacher_idmais_foreign` (`idmais`);

--
-- Index pour la table `rdv`
--
ALTER TABLE `rdv`
  ADD PRIMARY KEY (`id_rdv`),
  ADD KEY `fk_rdv_sous` (`idsous`);

--
-- Index pour la table `reparation`
--
ALTER TABLE `reparation`
  ADD PRIMARY KEY (`idrep`);

--
-- Index pour la table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`idrole`);

--
-- Index pour la table `souscripteur`
--
ALTER TABLE `souscripteur`
  ADD PRIMARY KEY (`idsous`),
  ADD UNIQUE KEY `souscripteur_contsous_unique` (`contsous`),
  ADD UNIQUE KEY `souscripteur_emsous_unique` (`emsous`),
  ADD UNIQUE KEY `souscripteur_log_unique` (`log`),
  ADD KEY `souscripteur_idrole_foreign` (`idrole`),
  ADD KEY `souscripteur_idvil_foreign` (`idvil`);

--
-- Index pour la table `versement`
--
ALTER TABLE `versement`
  ADD PRIMARY KEY (`id_vers`),
  ADD KEY `fk_vers_sous` (`idsous`);

--
-- Index pour la table `ville`
--
ALTER TABLE `ville`
  ADD PRIMARY KEY (`idvil`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `avoir`
--
ALTER TABLE `avoir`
  MODIFY `idav` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `idcat` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `concerner`
--
ALTER TABLE `concerner`
  MODIFY `idcon` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `echeance`
--
ALTER TABLE `echeance`
  MODIFY `id_ech` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `facture`
--
ALTER TABLE `facture`
  MODIFY `id_fact` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `fournir`
--
ALTER TABLE `fournir`
  MODIFY `idfr` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `fournisseur`
--
ALTER TABLE `fournisseur`
  MODIFY `idfour` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `ilot`
--
ALTER TABLE `ilot`
  MODIFY `id_ilot` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `lier`
--
ALTER TABLE `lier`
  MODIFY `idlier` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `lot`
--
ALTER TABLE `lot`
  MODIFY `id_lot` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `maison`
--
ALTER TABLE `maison`
  MODIFY `idmais` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `materiel`
--
ALTER TABLE `materiel`
  MODIFY `idmat` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT pour la table `model`
--
ALTER TABLE `model`
  MODIFY `idmod` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `offre`
--
ALTER TABLE `offre`
  MODIFY `idof` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `personnel`
--
ALTER TABLE `personnel`
  MODIFY `idpers` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `phase`
--
ALTER TABLE `phase`
  MODIFY `idphase` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `profil`
--
ALTER TABLE `profil`
  MODIFY `idprof` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `rattacher`
--
ALTER TABLE `rattacher`
  MODIFY `idrat` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `rdv`
--
ALTER TABLE `rdv`
  MODIFY `id_rdv` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `reparation`
--
ALTER TABLE `reparation`
  MODIFY `idrep` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `role`
--
ALTER TABLE `role`
  MODIFY `idrole` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `souscripteur`
--
ALTER TABLE `souscripteur`
  MODIFY `idsous` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `versement`
--
ALTER TABLE `versement`
  MODIFY `id_vers` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `ville`
--
ALTER TABLE `ville`
  MODIFY `idvil` int(11) NOT NULL AUTO_INCREMENT;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `avoir`
--
ALTER TABLE `avoir`
  ADD CONSTRAINT `avoir_idmais_foreign` FOREIGN KEY (`idmais`) REFERENCES `maison` (`idmais`),
  ADD CONSTRAINT `avoir_idmat_foreign` FOREIGN KEY (`idmat`) REFERENCES `materiel` (`idmat`),
  ADD CONSTRAINT `avoir_idpers_foreign` FOREIGN KEY (`idpers`) REFERENCES `personnel` (`idpers`);

--
-- Contraintes pour la table `concerner`
--
ALTER TABLE `concerner`
  ADD CONSTRAINT `concerner_idmais_foreign` FOREIGN KEY (`idmais`) REFERENCES `maison` (`idmais`),
  ADD CONSTRAINT `concerner_idphase_foreign` FOREIGN KEY (`idphase`) REFERENCES `phase` (`idphase`);

--
-- Contraintes pour la table `echeance`
--
ALTER TABLE `echeance`
  ADD CONSTRAINT `fk_ech_fact` FOREIGN KEY (`id_fact`) REFERENCES `facture` (`id_fact`);

--
-- Contraintes pour la table `facture`
--
ALTER TABLE `facture`
  ADD CONSTRAINT `fk_fact_mais` FOREIGN KEY (`idmais`) REFERENCES `maison` (`idmais`);

--
-- Contraintes pour la table `fournir`
--
ALTER TABLE `fournir`
  ADD CONSTRAINT `fournir_idfour_foreign` FOREIGN KEY (`idfour`) REFERENCES `fournisseur` (`idfour`),
  ADD CONSTRAINT `fournir_idmat_foreign` FOREIGN KEY (`idmat`) REFERENCES `materiel` (`idmat`);

--
-- Contraintes pour la table `lier`
--
ALTER TABLE `lier`
  ADD CONSTRAINT `lier_idmat_foreign` FOREIGN KEY (`idmat`) REFERENCES `materiel` (`idmat`),
  ADD CONSTRAINT `lier_idrep_foreign` FOREIGN KEY (`idrep`) REFERENCES `reparation` (`idrep`);

--
-- Contraintes pour la table `lot`
--
ALTER TABLE `lot`
  ADD CONSTRAINT `fk_lot_ilot` FOREIGN KEY (`id_ilot`) REFERENCES `ilot` (`id_ilot`);

--
-- Contraintes pour la table `maison`
--
ALTER TABLE `maison`
  ADD CONSTRAINT `fk_mais_lot` FOREIGN KEY (`id_lot`) REFERENCES `lot` (`id_lot`);

--
-- Contraintes pour la table `materiel`
--
ALTER TABLE `materiel`
  ADD CONSTRAINT `materiel_idcat_foreign` FOREIGN KEY (`idcat`) REFERENCES `categorie` (`idcat`);

--
-- Contraintes pour la table `personnel`
--
ALTER TABLE `personnel`
  ADD CONSTRAINT `personnel_idrole_foreign` FOREIGN KEY (`idrole`) REFERENCES `role` (`idrole`);

--
-- Contraintes pour la table `rattacher`
--
ALTER TABLE `rattacher`
  ADD CONSTRAINT `rattacher_idmais_foreign` FOREIGN KEY (`idmais`) REFERENCES `maison` (`idmais`),
  ADD CONSTRAINT `rattacher_idof_foreign` FOREIGN KEY (`idof`) REFERENCES `offre` (`idof`);

--
-- Contraintes pour la table `rdv`
--
ALTER TABLE `rdv`
  ADD CONSTRAINT `fk_rdv_sous` FOREIGN KEY (`idsous`) REFERENCES `souscripteur` (`idsous`);

--
-- Contraintes pour la table `souscripteur`
--
ALTER TABLE `souscripteur`
  ADD CONSTRAINT `souscripteur_idrole_foreign` FOREIGN KEY (`idrole`) REFERENCES `role` (`idrole`),
  ADD CONSTRAINT `souscripteur_idvil_foreign` FOREIGN KEY (`idvil`) REFERENCES `ville` (`idvil`);

--
-- Contraintes pour la table `versement`
--
ALTER TABLE `versement`
  ADD CONSTRAINT `fk_vers_sous` FOREIGN KEY (`idsous`) REFERENCES `souscripteur` (`idsous`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
