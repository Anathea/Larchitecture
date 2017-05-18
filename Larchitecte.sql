-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Client :  localhost
-- Généré le :  Jeu 18 Mai 2017 à 20:11
-- Version du serveur :  10.1.22-MariaDB-
-- Version de PHP :  7.0.18-0ubuntu0.17.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `Larchitecte`
--

-- --------------------------------------------------------

--
-- Structure de la table `actualites`
--

CREATE TABLE `actualites` (
  `id` int(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `architecte` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `realisation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rubrique` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lieu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `departement` int(11) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `visuel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `actualites`
--

INSERT INTO `actualites` (`id`, `date`, `architecte`, `realisation`, `rubrique`, `lieu`, `departement`, `description`, `visuel`) VALUES
(5, '2017-05-18 14:05:22', 'ABH Architectes', 'Projet Astrale - Construction dun ensemble de bureaux au Plessis Robinson (92)', 'Tertiaire - Bureau', 'Plessis Robinson', 92, 'Situé au coeur de NOVEOS Parc d’Affaires Paris Sud Ouest, en plein essor.	\nL\'immeuble tertiaire \"Astrale\" permet de répondre aussi bien à un mono utilisateur qu’à un grand nombre de locataires.\nD’une capacité d\'accueil de 1 500 personnes, avec une surface de 25 000 m2 SHON et 56 000m2 SHOB, il intègre 760 places de parkings sur 2 niveaux de sous-sol et un restaurant 1000 couverts.\nLe parti d\'implantation est de créer un bâtiment urbain périmétrique permettant de dégager un parc végétal de la plus grande dimension possible en son centre.\nLe restaurant tout en courbe devient lui même une partie de ce jardin en s\'agrémentant d\'une terrasse végétalisée.\nL\'ensemble des bâtiments s\'articule autour de ce parc où plateaux, paliers, escaliers, rue intérieure et restaurant ont des vues.\n\n\nDeux halls principaux ponctuent l’édifice en marquant fortement la volumétrie de l’ensemble.\nAu Nord une faille entièrement vitrée accompagnée par un voile en béton blanc courbe offre une transparence entre l’avenue et le jardin intérieur.\nAu Sud, un totem vitré lumineux visible depuis l’A86 englobe les salles de réunion rouges afin de former un signal identitaire.\nL’organisation en plan résulte d’une recherche de confort et de flexibilité des plateaux de bureaux ainsi que d’une optimisation de l’éclairage naturel, y compris pour l’ensemble des circulations verticales et horizontales. \nLes systèmes environnementaux développés sont le traitement de toiture végétalisée avec récupération des eaux de pluies, \nla mise en place de pompes à chaleur individuelles réversibles raccordées sur une boucle thermodynamique,\nun système de gestion technique centralisé.', 'photo_princ1.jpg'),
(6, '2017-05-18 14:05:24', 'ARSENAULT Eric', 'Internat du lycée agricole à Château Chinon (58)', 'Enseignement - Lycée	', 'Chinon', 58, 'Le bâtiment est régi par une courbe à double inflexion qui s’avance dans le paysage vers le Morvan avec une tisanerie suspendue dans le vide à son extrémité.\nDifférentes loggias ponctuent le bâtiment et offrent depuis l’intérieur autant de vues sur Château Chinon et la campagne environnante. Une logique de traitement de façade est développée en fonction du degré d’exposition aux intempéries : zinc, enduit, bois et verre sont répartis du plus exposé au mieux protégé.\nA l’intérieur, les chambres permettent à chaque élève l’appropriation d’un sous-espace distinct. ', 'photo_princ2.jpg'),
(7, '2017-05-18 14:05:27', 'BIK Architecture', 'Aménagement du bowling Le colisée à Angers (49)', 'Espace de loisir', 'Angers ', 49, 'Le bâtiment est régi par une courbe à double inflexion qui s’avance dans le paysage vers le Morvan avec une tisanerie suspendue dans le vide à son extrémité.\nDifférentes loggias ponctuent le bâtiment et offrent depuis l’intérieur autant de vues sur Château Chinon et la campagne environnante. Une logique de traitement de façade est développée en fonction du degré d’exposition aux intempéries : zinc, enduit, bois et verre sont répartis du plus exposé au mieux protégé.\nA l’intérieur, les chambres permettent à chaque élève l’appropriation d’un sous-espace distinct. ', 'photo_princ3.jpg'),
(8, '2017-05-18 14:05:30', 'DUCLOS Architectes Associés', 'Construction de la délégation régionale du CNFPT à Poitiers (86)', 'Tertiaire - Bureau', 'Poitiers ', 86, 'Le bâtiment est régi par une courbe à double inflexion qui s’avance dans le paysage vers le Morvan avec une tisanerie suspendue dans le vide à son extrémité.\nDifférentes loggias ponctuent le bâtiment et offrent depuis l’intérieur autant de vues sur Château Chinon et la campagne environnante. Une logique de traitement de façade est développée en fonction du degré d’exposition aux intempéries : zinc, enduit, bois et verre sont répartis du plus exposé au mieux protégé.\nA l’intérieur, les chambres permettent à chaque élève l’appropriation d’un sous-espace distinct. ', 'photo_princ4.jpg'),
(9, '2017-05-18 14:05:39', 'MICHEL Jean-Louis', 'Construction du nouveau siège social de la C.A.F. du Gard (30)', 'Tertiaire - Bureau', 'Gard', 30, 'Le bâtiment est régi par une courbe à double inflexion qui s’avance dans le paysage vers le Morvan avec une tisanerie suspendue dans le vide à son extrémité.\nDifférentes loggias ponctuent le bâtiment et offrent depuis l’intérieur autant de vues sur Château Chinon et la campagne environnante. Une logique de traitement de façade est développée en fonction du degré d’exposition aux intempéries : zinc, enduit, bois et verre sont répartis du plus exposé au mieux protégé.\nA l’intérieur, les chambres permettent à chaque élève l’appropriation d’un sous-espace distinct. ', 'photo_princ5.jpg'),
(10, '2017-05-18 16:59:39', 'dfghjk,;', 'dfghn,', '', 'fgbn,', 20, '', '');

-- --------------------------------------------------------

--
-- Structure de la table `actualites_entreprises`
--

CREATE TABLE `actualites_entreprises` (
  `id` int(11) NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_actualite` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `actualites_images`
--

CREATE TABLE `actualites_images` (
  `id` int(255) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_actualite` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `actualites_ouvrages`
--

CREATE TABLE `actualites_ouvrages` (
  `id` int(11) NOT NULL,
  `nom` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_actualite` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `partenaires`
--

CREATE TABLE `partenaires` (
  `id` int(255) NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `libelle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_region` int(50) NOT NULL,
  `departement` int(50) NOT NULL,
  `site` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `partenaires`
--

INSERT INTO `partenaires` (`id`, `nom`, `libelle`, `id_region`, `departement`, `site`) VALUES
(7, 'HALLOU ESCALIERS', 'ESCALIETEUR', 17, 35, 'http://www.hallou.fr/'),
(8, 'EURESCO', 'AGENCEMENT, MOBILIER, MÉTIERS D\'ART, DÉCORATION, CHEMINEES', 20, 69, 'http://www.euresco.fr/'),
(9, 'LEROUX - PACREAU', 'AGENCEMENT, MOBILIER, MÉTIERS D\'ART, DÉCORATION, CHEMINEES', 17, 49, 'http://www.leroux-pacreau.fr/'),
(10, 'MPI', 'AGENCEMENT, MOBILIER, MÉTIERS D\'ART, DÉCORATION, CHEMINEES', 10, 77, 'http://www.mpifrance.com/'),
(11, 'IRVOAS & CIE', 'CLOISONS, PLAFONDS, ISOLATION', 10, 78, 'http://www.irvoas.fr/'),
(12, 'ETANCHEITE DU NORD', 'COUVERTURE, ETANCHÉITÉ, CHARPENTE, ZINGUERIE', 10, 77, 'http://etancheite-du-nord.com/'),
(13, 'GRANIER G.', 'COUVERTURE, ETANCHÉITÉ, CHARPENTE, ZINGUERIE', 10, 77, 'http://etancheite-du-nord.com/'),
(14, 'MBS SERVICES', 'COUVERTURE, ETANCHÉITÉ, CHARPENTE, ZINGUERIE', 10, 94, 'http://www.mbs-services.fr/'),
(15, 'SETRIM', 'COUVERTURE, ETANCHÉITÉ, CHARPENTE, ZINGUERIE', 10, 93, 'http://www.setrim.fr/'),
(16, 'E.J.P.', 'ELECTRICITÉ, CHAUFFAGE, CLIMATISATION, PLOMBERIE', 10, 91, 'http://www.electricitejeanpate.com/'),
(17, 'IC ENTREPRISE', 'ELECTRICITÉ, CHAUFFAGE, CLIMATISATION, PLOMBERIE', 10, 92, 'http://www.ic-entreprise.com/'),
(18, 'MORELEC', 'ELECTRICITÉ, CHAUFFAGE, CLIMATISATION, PLOMBERIE', 10, 95, 'mailto:sarlmorelec@hotmail.com'),
(19, 'SCE', 'ELECTRICITÉ, CHAUFFAGE, CLIMATISATION, PLOMBERIE', 10, 94, 'http://www.setc-sce.fr/sce/'),
(20, 'ATLANTE CONSTRUCTION', 'ENTREPRISE GÉNÉRALE DE BÂTIMENT, GROS-OEUVRE, TRAVAUX PUBLICS, GÉNIE CIVIL, TERRASSEMENT', 10, 94, 'http://www.atlante-construction.com/'),
(21, 'CEBTP SOLEN', 'ENTREPRISE GÉNÉRALE DE BÂTIMENT, GROS-OEUVRE, TRAVAUX PUBLICS, GÉNIE CIVIL, TERRASSEMENT', 10, 78, 'http://www.ginger-cebtp.com/'),
(22, 'DUNOYER', 'ENTREPRISE GÉNÉRALE DE BÂTIMENT, GROS-OEUVRE, TRAVAUX PUBLICS, GÉNIE CIVIL, TERRASSEMENT', 10, 78, 'http://www.dunoyer.fr/'),
(23, 'ENTREPRISE CAPRON', 'ENTREPRISE GÉNÉRALE DE BÂTIMENT, GROS-OEUVRE, TRAVAUX PUBLICS, GÉNIE CIVIL, TERRASSEMENT', 10, 91, 'http://www.entreprise-capron.fr/'),
(24, 'ACOUSTIQUE & CONSEIL', 'INGENIERIE, BUREAU D\'ÉTUDES, COORDINATION, ECONOMISTE, GÉOMÈTRE', 10, 92, 'http://www.acoustique-conseil.com/'),
(25, 'ARCORA', 'INGENIERIE, BUREAU D\'ÉTUDES, COORDINATION, ECONOMISTE, GÉOMÈTRE', 10, 94, 'http://www.arcora.com/'),
(26, 'CLIM\'ADEQUAT', 'INGENIERIE, BUREAU D\'ÉTUDES, COORDINATION, ECONOMISTE, GÉOMÈTRE', 10, 77, 'http://www.climadequat.fr/'),
(27, 'CONSEILS ET INGENIERIE', 'INGENIERIE, BUREAU D\'ÉTUDES, COORDINATION, ECONOMISTE, GÉOMÈTRE', 10, 94, 'http://www.conseils-ingenierie.com/'),
(28, 'FLACK + KURTZ EURL', 'INGENIERIE, BUREAU D\'ÉTUDES, COORDINATION, ECONOMISTE, GÉOMÈTRE', 10, 75, 'http://www.wsp-pb.com/en/WSP-France/'),
(29, 'GENIE ACOUSTIQUE', 'INGENIERIE, BUREAU D\'ÉTUDES, COORDINATION, ECONOMISTE, GÉOMÈTRE', 10, 75, 'http://www.genie-acoustique.com/'),
(30, 'QUARTET', 'INGENIERIE, BUREAU D\'ÉTUDES, COORDINATION, ECONOMISTE, GÉOMÈTRE', 10, 95, 'http://www.quartet-btp.fr/'),
(31, 'SAUNIER & ASSOCIES', 'INGENIERIE, BUREAU D\'ÉTUDES, COORDINATION, ECONOMISTE, GÉOMÈTRE', 10, 92, 'http://www.saunier-associes.com/'),
(32, 'SOBATSYS', 'INGENIERIE, BUREAU D\'ÉTUDES, COORDINATION, ECONOMISTE, GÉOMÈTRE', 10, 75, 'http://www.sobatsys.fr/'),
(33, 'ALESIA PEINTURE', 'MAÇONNERIE, PLÂTRERIE, PEINTURE, SOLS, MARBRERIE, VITRERIE, CARRELAGE, PARQUETS', 10, 75, 'http://alesia-peinture.fr/accueil/'),
(34, 'DESSO', 'MAÇONNERIE, PLÂTRERIE, PEINTURE, SOLS, MARBRERIE, VITRERIE, CARRELAGE, PARQUETS', 10, 75, 'http://www.desso.com/'),
(35, 'LES MACONS PARISIENS', 'MAÇONNERIE, PLÂTRERIE, PEINTURE, SOLS, MARBRERIE, VITRERIE, CARRELAGE, PARQUETS', 10, 91, 'http://lesmaconsparisiens.fr/'),
(36, 'TENE', 'MAÇONNERIE, PLÂTRERIE, PEINTURE, SOLS, MARBRERIE, VITRERIE, CARRELAGE, PARQUETS', 10, 93, 'http://www.tene.fr/'),
(37, 'MIROITERIE MODERNE', 'MENUISERIE (BOIS ET ALU), MIROITERIE', 10, 92, 'http://www.miroiterie-moderne.com/'),
(38, 'NORBA', 'MENUISERIE (BOIS ET ALU), MIROITERIE', 10, 93, 'http://www.norba-menuiserie.com/'),
(39, 'RECORD', 'MÉTALLERIE, SERRURERIE, FERRONNERIE, FERMETURE', 10, 91, 'https://www.record.fr/fr/home'),
(40, 'SAM +', 'MÉTALLERIE, SERRURERIE, FERRONNERIE, FERMETURE\r\n', 10, 91, 'http://sarmates.fr/'),
(41, 'SOVIMET', 'MÉTALLERIE, SERRURERIE, FERRONNERIE, FERMETURE', 10, 95, 'http://www.sovimet.fr/'),
(42, 'VULCANEO', 'RÉSEAUX INFORMATIQUE, SÉCURITÉ', 10, 92, 'http://www.vulcaneo.fr/'),
(43, 'DREAMTEAM SERVICES', 'SERVICES AUX PROFESSIONNELS', 10, 94, 'http://www.dreamteamservices.com/'),
(44, 'IMAG\'IN 3D', 'SERVICES AUX PROFESSIONNELS', 10, 75, 'http://www.imagin3d.net/'),
(45, 'PRO CLEAN', 'SERVICES AUX PROFESSIONNELS', 10, 75, 'http://www.pro-clean-france.com/'),
(46, 'SARL MEYERNET', 'SERVICES AUX PROFESSIONNELS', 10, 94, 'http://www.meyernet.fr/'),
(47, 'EURESCO', 'AGENCEMENT, MOBILIER, MÉTIERS D\'ART, DÉCORATION, CHEMINEES', 20, 69, 'http://www.euresco.fr/'),
(48, 'LEROUX - PACREAU', 'AGENCEMENT, MOBILIER, MÉTIERS D\'ART, DÉCORATION, CHEMINEES', 17, 49, 'http://www.leroux-pacreau.fr/'),
(49, 'MARIE TOIT', 'COUVERTURE, ETANCHÉITÉ, CHARPENTE, ZINGUERIE', 16, 50, 'http://www.marie-et-cie.com/'),
(50, 'CALOREO', 'ELECTRICITÉ, CHAUFFAGE, CLIMATISATION, PLOMBERIE', 16, 76, 'http://caloreo.free.fr/kontakt.html'),
(51, 'ETDE', 'ELECTRICITÉ, CHAUFFAGE, CLIMATISATION, PLOMBERIE', 16, 14, 'http://www.bouyguesenergiesservices.com/'),
(52, 'PIQUOT', 'ELECTRICITÉ, CHAUFFAGE, CLIMATISATION, PLOMBERIE', 16, 14, 'http://www.piquot.fr/'),
(53, 'SODIFROID', 'ELECTRICITÉ, CHAUFFAGE, CLIMATISATION, PLOMBERIE', 16, 76, 'http://www.sodifroid.com/'),
(54, 'GCA - GENIE CIVIL DARMOR', 'ENTREPRISE GÉNÉRALE DE BÂTIMENT, GROS-OEUVRE, TRAVAUX PUBLICS, GÉNIE CIVIL, TERRASSEMENT', 5, 35, 'http://www.gca35.com/'),
(55, 'LEON GROSSE', 'ENTREPRISE GÉNÉRALE DE BÂTIMENT, GROS-OEUVRE, TRAVAUX PUBLICS, GÉNIE CIVIL, TERRASSEMENT', 16, 76, 'http://www.leongrosse.fr/'),
(56, 'RAVALUX', 'ENTREPRISE GÉNÉRALE DE BÂTIMENT, GROS-OEUVRE, TRAVAUX PUBLICS, GÉNIE CIVIL, TERRASSEMENT', 16, 27, 'http://www.ravalux.com/'),
(57, 'SOCAUBAT', 'ENTREPRISE GÉNÉRALE DE BÂTIMENT, GROS-OEUVRE, TRAVAUX PUBLICS, GÉNIE CIVIL, TERRASSEMENT', 16, 76, 'http://socaubat.fr/'),
(58, 'OPCNORMANDIE', 'INGENIERIE, BUREAU D\'ÉTUDES, COORDINATION, ECONOMISTE, GÉOMÈTRE', 16, 76, 'http://www.opcnormandie.com/'),
(59, 'HUBERT PARQUETS', 'MAÇONNERIE, PLÂTRERIE, PEINTURE, SOLS, MARBRERIE, VITRERIE, CARRELAGE, PARQUETS', 16, 14, 'http://www.hubert-parquets.com/'),
(60, 'MELIN', 'MENUISERIE (BOIS ET ALU), MIROITERIE', 16, 27, 'http://www.melin-sa.fr/'),
(61, 'SMF - SOCIETE MOREL FERMETURES', 'MÉTALLERIE, SERRURERIE, FERRONNERIE, FERMETURE', 21, 97, 'http://www.smf.re/'),
(62, 'LYON ECHAFAUDAGE', 'CLOISONS, PLAFONDS, ISOLATION', 20, 38, 'http://www.lyon-echafaudage.fr/'),
(63, 'MESPO DISTRIBUTION', 'CLOISONS, PLAFONDS, ISOLATION', 20, 42, 'http://www.mespo-distribution.com/'),
(64, 'NJ FACADE', 'DÉMOLITION, RAVALEMENT, RESTAURATION, ENDUIT, DÉSAMIANTAGE, ROUTES', 20, 49, 'http://www.nj-facade.com/'),
(65, 'ELECTRICITÉ, CHAUFFAGE, CLIMATISATION, PLOMBERIE', 'BIEN SE LOGER ET ASSOCIES', 20, 69, 'http://www.bienseloger.fr/'),
(66, 'PAUL LAVOREL ET FILS', 'ELECTRICITÉ, CHAUFFAGE, CLIMATISATION, PLOMBERIE', 20, 74, 'http://www.lavorel-multi-energies.com/'),
(67, 'ENSEIGNE, ECLAIRAGE', 'REMAJEUR', 20, 38, 'http://www.re-majeur.com/'),
(68, 'EQUIP\'PLUS', 'AGENCEMENT, MOBILIER, MÉTIERS D\'ART, DÉCORATION, CHEMINEES', 1, 68, 'http://www.equip-plus.fr/'),
(69, 'LEVIEUX PATRICK', 'CLOISONS, PLAFONDS, ISOLATION', 1, 67, 'http://www.levieux.fr/'),
(70, 'SEVA', 'CLOISONS, PLAFONDS, ISOLATION', 13, 54, 'http://www.seva-sarl.com/');

-- --------------------------------------------------------

--
-- Structure de la table `regions`
--

CREATE TABLE `regions` (
  `id` int(255) NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `regions`
--

INSERT INTO `regions` (`id`, `nom`) VALUES
(1, 'Alsace'),
(2, 'Aquitaine'),
(3, 'Auvergne'),
(4, 'Bourgogne'),
(5, 'Bretagne'),
(6, 'Centre'),
(7, 'Champagne-Ardenne'),
(8, 'Corse'),
(9, 'Franche-Comté'),
(10, 'Ile de France'),
(11, 'Languedoc-Roussillon'),
(12, 'Limousin'),
(13, 'Lorraine'),
(14, 'Midi-Pyrénées'),
(15, 'Nord Pas de Calais'),
(16, 'Normandie'),
(17, 'Pays de la Loire'),
(18, 'Poitou Charentes'),
(19, 'Provence Alpes Côte d\'Azur'),
(20, 'Rhône Alpes'),
(21, 'Guadeloupe'),
(22, 'Guyane'),
(23, 'Martinique'),
(24, 'Réunion'),
(25, 'Mayotte'),
(26, 'Saint Barthélemy'),
(27, 'Saint Martin'),
(28, 'Belgique / België'),
(29, 'Suisse');

-- --------------------------------------------------------

--
-- Structure de la table `revues`
--

CREATE TABLE `revues` (
  `id` int(255) NOT NULL,
  `date` int(255) NOT NULL,
  `numero` int(255) NOT NULL,
  `visibilite` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `revues`
--

INSERT INTO `revues` (`id`, `date`, `numero`, `visibilite`) VALUES
(0, 2016, 275, 1),
(1, 2016, 276, 1),
(2, 2016, 277, 1),
(3, 2016, 278, 1),
(4, 2016, 279, 1),
(5, 2016, 280, 1),
(6, 2016, 281, 0),
(7, 2016, 282, 1),
(8, 2016, 283, 1),
(9, 2016, 284, 1),
(10, 2017, 285, 1),
(27, 2017, 299, 1),
(28, 2017, 299, 1);

-- --------------------------------------------------------

--
-- Structure de la table `revues_regions`
--

CREATE TABLE `revues_regions` (
  `id` int(255) NOT NULL,
  `id_revue` int(255) NOT NULL,
  `id_region` int(255) NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lien` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `revues_regions`
--

INSERT INTO `revues_regions` (`id`, `id_revue`, `id_region`, `img`, `lien`) VALUES
(27, 0, 18, 'poitou-charentes.jpg', 'http://fr.calameo.com/read/001121299cec3d11c563d'),
(28, 1, 6, 'centre.jpg', 'http://fr.calameo.com/read/001121299ba572cf53fca'),
(29, 2, 29, 'suisse.jpg', 'http://fr.calameo.com/read/001121299a5d16b1a52eb'),
(30, 3, 28, 'belgique.jpg', 'http://fr.calameo.com/read/00112129970991e922bc3'),
(31, 4, 1, 'alsace.jpg', 'http://fr.calameo.com/read/0011212993e4406f651e8'),
(32, 5, 21, 'guadeloupe.jpg', 'http://fr.calameo.com/read/00112129979710213f605'),
(33, 7, 20, 'rhone-alpes.jpg', 'http://fr.calameo.com/read/001121299b858cd00ecf1'),
(34, 8, 5, 'bretagne.jpg', 'http://fr.calameo.com/read/001121299c7b7f79e046d'),
(35, 9, 10, 'ile-de-france.jpg', 'http://fr.calameo.com/read/001121299575d836ff703'),
(36, 10, 23, 'martinique.jpg', 'http://www.larchitecture.com/index.php?page=revues&id_revue=285'),
(37, 11, 22, 'guyane.jpg', 'http://fr.calameo.com/read/001121299fb1800308fe1'),
(38, 12, 9, 'franche-comte.jpg', 'http://fr.calameo.com/read/001121299119599fc91a9'),
(39, 13, 7, 'champagne-ardenne.jpg', 'http://fr.calameo.com/read/001121299f6e3734c8772'),
(40, 14, 24, 'reunion.jpg', 'http://fr.calameo.com/read/00112129911ea51b43e15'),
(41, 15, 27, 'saint-martin.jpg', 'http://fr.calameo.com/read/0011212990739cc3f4df6'),
(42, 16, 10, 'ile-de-france(2).jpg', 'http://fr.calameo.com/read/001121299eae418c77d3a');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `actualites`
--
ALTER TABLE `actualites`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `actualites_entreprises`
--
ALTER TABLE `actualites_entreprises`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `actualites_images`
--
ALTER TABLE `actualites_images`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `actualites_ouvrages`
--
ALTER TABLE `actualites_ouvrages`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `partenaires`
--
ALTER TABLE `partenaires`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `regions`
--
ALTER TABLE `regions`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `revues`
--
ALTER TABLE `revues`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `revues_regions`
--
ALTER TABLE `revues_regions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `actualites`
--
ALTER TABLE `actualites`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `actualites_entreprises`
--
ALTER TABLE `actualites_entreprises`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `actualites_images`
--
ALTER TABLE `actualites_images`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT pour la table `actualites_ouvrages`
--
ALTER TABLE `actualites_ouvrages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `partenaires`
--
ALTER TABLE `partenaires`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
--
-- AUTO_INCREMENT pour la table `regions`
--
ALTER TABLE `regions`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
--
-- AUTO_INCREMENT pour la table `revues`
--
ALTER TABLE `revues`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT pour la table `revues_regions`
--
ALTER TABLE `revues_regions`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
