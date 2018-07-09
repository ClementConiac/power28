-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 09 juil. 2018 à 00:07
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `power-28`
--

-- --------------------------------------------------------

--
-- Structure de la table `category_faq`
--

DROP TABLE IF EXISTS `category_faq`;
CREATE TABLE IF NOT EXISTS `category_faq` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `category_faq`
--

INSERT INTO `category_faq` (`id`, `name`) VALUES
(1, 'Power 28'),
(2, 'Hébergement'),
(3, 'Fonctionnalité');

-- --------------------------------------------------------

--
-- Structure de la table `category_screen`
--

DROP TABLE IF EXISTS `category_screen`;
CREATE TABLE IF NOT EXISTS `category_screen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `category_screen`
--

INSERT INTO `category_screen` (`id`, `name`, `description`) VALUES
(13, 'Transaction stock', ''),
(14, 'Fabrication', ''),
(12, 'Scan', ''),
(11, 'Categorie', ''),
(10, 'Catalogue', ''),
(9, 'Accueil', ''),
(15, 'Fournisseur', ''),
(16, 'Commande', ''),
(17, 'Lieu', ''),
(18, 'Historique', ''),
(19, 'Utilisateur', ''),
(20, 'Paramètre', '');

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `users_lastname` varchar(255) NOT NULL,
  `users_firstname` varchar(255) NOT NULL,
  `users_email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `demonstration` tinyint(4) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id`, `users_lastname`, `users_firstname`, `users_email`, `subject`, `content`, `demonstration`) VALUES
(1, 'clement', 'coniac', 'clement.coniac@gmail.com', 'à propos de la démonstration', 'je voudrais avoir accés à la démonstration gratuite', 1),
(2, 'Coniac', 'Clément', 'clement.coniac@gmail.com', 'test envoie email', 'salut jenvoie lemail', 0),
(3, 'Coniac', 'Clément', 'clement.coniac@gmail.com', 'clementconiac', 'zaertazertazrat', 0),
(4, 'clement', 'coniac', 'clement.coniac@gmail.com', 'test mail', 'test mail', 0),
(5, 'Coniac', 'Clément', 'clement.coniac@gmail.com', 'clementconiac', 'aeazeazeazea', 0);

-- --------------------------------------------------------

--
-- Structure de la table `customers`
--

DROP TABLE IF EXISTS `customers`;
CREATE TABLE IF NOT EXISTS `customers` (
  `id` varchar(250) NOT NULL,
  `users_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `customers`
--

INSERT INTO `customers` (`id`, `users_id`, `created_at`) VALUES
('cus_DC1tACtf5wsQnQ', 27, '2018-07-08 16:26:14'),
('cus_DC25GFpB0m3244', 27, '2018-07-08 16:37:29'),
('cus_DC2KNrIpzKDsbN', 27, '2018-07-08 16:53:23'),
('cus_DC2N94vTXzcd9b', 27, '2018-07-08 16:55:40'),
('cus_DC5wcI4uFi6sHx', 10, '2018-07-08 20:37:17'),
('cus_DC87NdYHjKKZ5J', 10, '2018-07-08 22:51:40');

-- --------------------------------------------------------

--
-- Structure de la table `forum_category`
--

DROP TABLE IF EXISTS `forum_category`;
CREATE TABLE IF NOT EXISTS `forum_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `forum_category`
--

INSERT INTO `forum_category` (`id`, `name`) VALUES
(9, 'uiuiuiuiiu');

-- --------------------------------------------------------

--
-- Structure de la table `forum_message`
--

DROP TABLE IF EXISTS `forum_message`;
CREATE TABLE IF NOT EXISTS `forum_message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `users_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `content` text NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `forum_message`
--

INSERT INTO `forum_message` (`id`, `users_id`, `subject_id`, `content`, `created_at`) VALUES
(13, 10, 4, 'ty', '2018-07-02 23:20:36'),
(17, 10, 4, 'ioioioioioioioio', '2018-07-03 01:31:52'),
(18, 10, 4, 'new test message + subject', '2018-07-03 01:32:52'),
(19, 10, 4, 'fdfdfdfdfdfdf', '2018-07-03 01:33:20'),
(20, 10, 4, 'new message dormir', '2018-07-03 01:34:38'),
(21, 10, 4, 'new message dormir', '2018-07-03 01:35:34'),
(22, 10, 4, 'message ciel', '2018-07-03 01:35:59'),
(23, 10, 4, 'ciel sombre', '2018-07-03 01:36:32'),
(25, 10, 29, 'haut', '2018-07-03 18:49:10'),
(26, 10, 29, 'zaeazeazeazeazezaeazeazazeaz', '2018-07-03 18:49:17'),
(27, 10, 4, 'lol', '2018-07-05 15:08:01');

-- --------------------------------------------------------

--
-- Structure de la table `forum_subject`
--

DROP TABLE IF EXISTS `forum_subject`;
CREATE TABLE IF NOT EXISTS `forum_subject` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `users_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `created_at` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `forum_subject`
--

INSERT INTO `forum_subject` (`id`, `name`, `users_id`, `category_id`, `created_at`) VALUES
(4, 'azeazeazez', 10, 9, '2018-07-03');

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,0) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `product`
--

INSERT INTO `product` (`id`, `name`, `description`, `price`) VALUES
(5, 'Power 28', 'Licence du logiciel de gestion de stock ', '1200');

-- --------------------------------------------------------

--
-- Structure de la table `question_faq`
--

DROP TABLE IF EXISTS `question_faq`;
CREATE TABLE IF NOT EXISTS `question_faq` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question` text NOT NULL,
  `answer` text NOT NULL,
  `category_faq_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `question_faq`
--

INSERT INTO `question_faq` (`id`, `question`, `answer`, `category_faq_id`) VALUES
(1, 'Qu\'est-ce que le Lorem Ipsum?', 'Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l\'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n\'a pas fait que survivre cinq siècles, mais s\'est aussi adapté à la bureautique informatique, sans que son contenu n\'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.\r\n\r\n', 1),
(2, 'D\'où vient-il?\r\n', 'Contrairement à une opinion répandue, le Lorem Ipsum n\'est pas simplement du texte aléatoire. Il trouve ses racines dans une oeuvre de la littérature latine classique datant de 45 av. J.-C., le rendant vieux de 2000 ans. Un professeur du Hampden-Sydney College, en Virginie, s\'est intéressé à un des mots latins les plus obscurs, consectetur, extrait d\'un passage du Lorem Ipsum, et en étudiant tous les usages de ce mot dans la littérature classique, découvrit la source incontestable du Lorem Ipsum. Il provient en fait des sections 1.10.32 et 1.10.33 du \"De Finibus Bonorum et Malorum\" (Des Suprêmes Biens et des Suprêmes Maux) de Cicéron. Cet ouvrage, très populaire pendant la Renaissance, est un traité sur la théorie de l\'éthique. Les premières lignes du Lorem Ipsum, \"Lorem ipsum dolor sit amet...\", proviennent de la section 1.10.32.\r\n', 2),
(3, 'Pourquoi l\'utiliser?', 'On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même. L\'avantage du Lorem Ipsum sur un texte générique comme \'Du texte. Du texte. Du texte.\' est qu\'il possède une distribution de lettres plus ou moins normale, et en tout cas comparable avec celle du français standard. De nombreuses suites logicielles de mise en page ou éditeurs de sites Web ont fait du Lorem Ipsum leur faux texte par défaut, et une recherche pour \'Lorem Ipsum\' vous conduira vers de nombreux sites qui n\'en sont encore qu\'à leur phase de construction. Plusieurs versions sont apparues avec le temps, parfois par accident, souvent intentionnellement (histoire d\'y rajouter de petits clins d\'oeil, voire des phrases embarassantes).\r\n\r\n', 1),
(4, 'Où puis-je m\'en procurer?', 'Plusieurs variations de Lorem Ipsum peuvent être trouvées ici ou là, mais la majeure partie d\'entre elles a été altérée par l\'addition d\'humour ou de mots aléatoires qui ne ressemblent pas une seconde à du texte standard. Si vous voulez utiliser un passage du Lorem Ipsum, vous devez être sûr qu\'il n\'y a rien d\'embarrassant caché dans le texte. Tous les générateurs de Lorem Ipsum sur Internet tendent à reproduire le même extrait sans fin, ce qui fait de lipsum.com le seul vrai générateur de Lorem Ipsum. Iil utilise un dictionnaire de plus de 200 mots latins, en combinaison de plusieurs structures de phrases, pour générer un Lorem Ipsum irréprochable. Le Lorem Ipsum ainsi obtenu ne contient aucune répétition, ni ne contient des mots farfelus, ou des touches d\'humour.\r\n\r\n', 2),
(10, 'La coupe du monde?', 'Even though using \"lorem ipsum\" often arouses curiosity due to its resemblance to classical Latin, it is not intended to have meaning. Where text is visible in a document, people tend to focus on the textual content rather than upon overall presentation, so publishers use lorem ipsum when displaying a typeface or design in order to direct the focus to presentation. \"Lorem ipsum\" also approximates a typical distribution of spaces in English.\r\n', 3),
(9, 'Le faux texte?', 'Nec piget dicere avide magis hanc insulam populum Romanum invasisse quam iuste. Ptolomaeo enim rege foederato nobis et socio ob aerarii nostri angustias iusso sine ulla culpa proscribi ideoque hausto veneno voluntaria morte deleto et tributaria facta est et velut hostiles eius exuviae classi inpositae in urbem advectae sunt per Catonem, nunc repetetur ordo gestorum.', 3);

-- --------------------------------------------------------

--
-- Structure de la table `screen`
--

DROP TABLE IF EXISTS `screen`;
CREATE TABLE IF NOT EXISTS `screen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` text NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=53 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `screen`
--

INSERT INTO `screen` (`id`, `description`, `name`, `category_id`) VALUES
(16, 'Accueil et menu simplifié pour une navigation plus rapide.', 'f829101d1967c5ca9eb2f2b1428840b1.png', 9),
(15, 'Accueil et menu simplifié pour une navigation plus rapide.', 'b6b77526860d3c83f1d5b398e5c470b6.png', 9),
(17, 'Power28 contient votre catalogue produit. Chaque produit possède des caractéristiques propres et est lié à toutes les transactions de stock, entrées et sorties utiles à la gestion de votre stock.', '1a6727711b84fd1efbb87fc565199d13.png', 10),
(18, 'Chaque produit du catalogue peut contenir un nombre important de caractéristiques physiques ou financières utiles à la valorisation du stock. Les produits peuvent également être liés à une catégorie, un fabricant ou un ou plusieurs fournisseurs.', 'd2f53008ecf7568f1abeb455e1dcf5e4.png', 10),
(19, 'Il est possible de consulter toutes les transactions de stock, entrées ou sorties, à partir d\'un produit du catalogue. Il vous est également possible de débiter ou créditer le stock à partir de cet endroit, manuellement ou par scan.', '3cbddfc0631041f3bebf720bf2d72e7f.png', 10),
(20, 'Chaque produit du catalogue est lié à un ou plusieurs fournisseurs grâce aux références fournisseurs. Elles sont utiles à la mémorisation des informations financières de chaque produit. Ces références fournisseurs sont également utilisées dans les commandes pour accélérer votre processus de commande et connaître le montant de votre commande avant envoi au fournisseur.', '3ad69dbde4c12dfc2172e3541405ea58.png', 10),
(21, 'Il vous est possible de consulter l\'historique détaillé de chaque opérations réalisées sur les produits de votre catalogue. Crédit, débit, changement d\'informations, commandes, création, suppression...', '4ec7478450060089d51c3cd44606b851.png', 10),
(22, 'Pensez à attacher des fichiers, des documents à vos produits en stock. Notice, photos, garantie... Vous avez jusqu\'à 5 emplacements disponibles, profitez-en !', '8f4d94fa779cb6b74225a9e26c700a39.png', 10),
(23, 'Ajoutez facilement votre produit dans une des catégories créée préalablement.', '56f88dc950d4b32c2a461b792372f82f.png', 10),
(24, 'Rattachez rapidement votre produit à un fabricant.', 'e9f4bcf9d56d5602c41b7ec6ab371bdc.png', 10),
(25, 'Créez autant de catégorie que nécessaire et ordonnez les en catégorie parente ou enfant.', '636b1370d6dfae91f2042eef96c994b1.png', 11),
(26, 'Visualisez tous les produits présents dans une catégorie. Vous pourrez également apercevoir leur disponibilité en stock grâce au voyant de couleur verte, orange ou rouge. Prenez connaissance du montant de votre stock par catégorie !', 'acf1bc432008d31f4a55bceb3a810758.png', 11),
(27, 'Visualisez tous les produits présents dans une catégorie. Vous pourrez également apercevoir leur disponibilité en stock grâce au voyant de couleur vert, orange ou rouge. Prenez connaissance du montant de votre stock par catégorie !', 'cfe1bae9441470f7d25f0ea2c29fce2d.png', 11),
(28, 'Débitez votre stock manuellement ou par scan de code-barre (type QR code) avec notre interface de gestion accélérée ! Les options FIFO* ou FEFO* sont disponibles dans Power28, pour une rotation de stock améliorée ! Cette interface est optimisé pour les volumes de scan importants et pour travailler très rapidement. FIFO : First In First Out, Premier Entré Premier Sortit. FEFO : First Expired First Out, Premier Expiré Premier Sortit.', '8f6242793017047d373f29f270388ba9.png', 12),
(29, 'Réalisez un inventaire COMPLET de votre stock en un temps record grâce à notre interface optimisée ! Sur un seul écran vous aurez accès à toutes les commandes utiles et facilitant la réalisation d\'un inventaire complexe et volumineux.', 'c413f7f539f39425597705c9142a94b0.png', 12),
(30, 'Visualisez le détail d\'une transaction de stock ainsi que toutes ses données financières. C\'est ici que vous apercevrez la granularité fine d\'une gestion de stock optimisée !', 'a372457bfef3916c4b3dbcdcb7939784.png', 13),
(31, 'Chaque produit dans votre stock peut être rattaché à un lieu préalablement créé.', '8072f405471d085d0f9fec9e49f6790c.png', 13),
(32, 'Ajoutez tous les fabricants de vos produits en stock à votre base de donnée !', '9fdb62f932adf55af2c0e09e55861964.png', 14),
(33, 'Consultez tous les produits rattachés à un fabricant ainsi que leur disponibilité en stock. Vous pourrez également connaître le montant du stock par fabricant.', '2e970f99fa7f2805d8be0cc8a73f770f.png', 14),
(34, 'Ajoutez tous les fournisseurs de vos produits en stock à votre base de donnée ! Cela permet ensuite la création des références fournisseur.', '8038da89e49ac5eabb489cfc6cea9fc1.png', 15),
(35, 'Visualisez toutes vos références fournisseur liées à vos produits directement à partir de votre liste de fournisseurs.', '7ef529d930bb7df2d3edbf7f4664f705.png', 15),
(36, 'Gérez vos commandes fournisseurs directement dans Power28. Composez votre bon de commande, prévoyez vos dépenses, anticipez et évitez une rupture de stock. Très facilement en quelques clics !', '2d261a6e0cf7a273f9d1ddbb31799a9c.png', 16),
(37, 'Consultez le détail d\'une commande que vous avez créé ou celles créées par vos collaborateurs.', '7a53928fa4dd31e82c6ef826f341daec.png', 16),
(38, 'Avec l\'aide de notre assistant, composez votre commande fournisseur très facilement et visualisez directement le résultat. Vous pouvez, à partir de cet écran, ajouter vos produits à votre bon de commande en utilisant les références fournisseurs, elles seront utiles pour la maîtrise du coût de vos commandes ainsi que la valorisation de votre stock.', '2cd2e570d324ece8ff21b15d1fbe3db3.png', 16),
(39, 'Consultez le détail de chaque produit ajouté à votre bon de commande.', '79121bb953a3bd47c076f20234bafd2e.png', 16),
(40, 'Exportez votre bon de commande afin de le faire parvenir à votre fournisseur favori. Soit par récapitulatif total, contenant tous les produits de tous les fournisseurs. Soit par fournisseur, un fichier sera créé pour chaque fournisseur afin de n\'envoyer que l\'utile à chaque correspondant.', 'ab6b331e94c28169d15cca0cb3bbc73e.png', 16),
(41, 'Une fois vos colis ou produits reçus, utilisez notre assistant afin de pointer la réception de vos produits en stock. Cet assistant pas à pas facilite le pointage en prenant en compte les variabilités de livraison, retards, livraison partielle, produits offerts, gestion des n° de lot et dates de péremption...', '878df06ce009b583ce76653891aec539.png', 16),
(42, 'Assistant de réception des commandes, en mode pas à pas, visuel n°1.', '3a90164865f389b757673ab3eafbcad9.png', 16),
(43, 'Assistant de réception des commandes, en mode pas à pas, visuel n°2.', 'e770aa80a2e8d114e79e888e4670634b.png', 16),
(44, 'Si un produit reçu ne correspond pas à vos attentes, n\'hésitez pas à utiliser l\'assistant de retour prévu dans le système de gestion des commandes.', '6832a7b24bc06775d02b7406880b93fc.png', 16),
(45, 'Une fois vos produits reçus, imprimez toutes les étiquettes produit contenant les codes-barres (QR code) utiles à la gestion de stock. Nous avons sélectionné une taille universelle pour faciliter l\'impression de vos étiquettes produit.', '4db0f8b0fc895da263fd77fc8aecabe4.png', 16),
(46, 'Afin de suivre au plus près l\'évolution de vos bons de commande, nous avons implémenté un système d\'historique puissant dans Power28. Vous pourrez consulter toutes les entrées de l\'historique directement à partir de vos commandes.', '4d1299920aba50082363b885093c8e6d.png', 16),
(47, 'Gérez vos lieux directement dans Power28 pour optimiser les emplacements de vos entrepôts. Prenez connaissance de la valeur de votre stock par lieu et réalisez un tracking grâce aux étiquettes de lieu.', 'b17b1ffea01fd9acd1dd69b73e5353ea.png', 17),
(48, 'Ajoutez facilement tout ou partie des produits en stock aux lieux préalablement créés.', 'b8536aaea46484dd753df6bab1641dc7.png', 17),
(49, 'Consultez toute l\'activité liée à votre stock, réalisée par vous et vos collaborateurs directement dans le puissant système d\'historique développé dans Power28.', '8cb3522da182ff9ea5925bbd8975b203.png', 18),
(50, 'Gérez tous les collaborateurs pouvant utiliser les fonctionnalités de Power28.', '4fb68a3bcb11bde10e8821b55674278a.png', 19),
(51, 'Dans votre gestion d\'utilisateurs, il vous est possible de consulter l\'historique de l\'activité réalisé sur Power28 par collaborateur. Un filtrage par type d\'activité est également possible.', '8bb88f80d334b1869781beb89f7b73be.png', 19),
(52, 'En amont de l\'utilisation du logiciel de gestion de stock Power28, nous avons prévu un écran de paramétrage simple et intuitif pour mémoriser les réglages essentiels à la bonne utilisation de votre outil.', '654516d1b4df6917094de807156adc14.png', 20);

-- --------------------------------------------------------

--
-- Structure de la table `transactions`
--

DROP TABLE IF EXISTS `transactions`;
CREATE TABLE IF NOT EXISTS `transactions` (
  `id` varchar(250) NOT NULL,
  `customer_id` varchar(255) NOT NULL,
  `product` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `currency` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `transactions`
--

INSERT INTO `transactions` (`id`, `customer_id`, `product`, `amount`, `currency`, `status`, `created_at`) VALUES
('tok_1CleGICU2xp4GxkMyx94TCCO', 'cus_DC2KNrIpzKDsbN', 'Power 28', 'eur', '179988', 'succeeded', '2018-07-08 16:53:23'),
('tok_1CleIVCU2xp4GxkM00c7zQpy', 'cus_DC2N94vTXzcd9b', 'Power 28', '179988', 'eur', 'succeeded', '2018-07-08 16:55:40'),
('tok_1ClhkzCU2xp4GxkMWNrSEXzy', 'cus_DC5wcI4uFi6sHx', 'Power 28', '1000', 'eur', 'succeeded', '2018-07-08 20:37:17'),
('tok_1Cljr2CU2xp4GxkMALA36VMY', 'cus_DC87NdYHjKKZ5J', 'Power 28', '179988', 'eur', 'succeeded', '2018-07-08 22:51:40');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `society_name` varchar(255) NOT NULL,
  `society_adress` text NOT NULL,
  `siret` varchar(30) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_admin` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `society_name`, `society_adress`, `siret`, `phone`, `password`, `is_admin`) VALUES
(10, 'clemBoss', 'clem', 'clem', 'test', 'test', 'test', 'test', 'cdaa6716746fb685734abde87f1b08ad', 1),
(12, 'clemtest', 'clem', 'clem@c.c', 'fiduciaire', '', '', '', 'cdaa6716746fb685734abde87f1b08ad', 0),
(14, 'Clement', 'Coniac', 'clement@g.g', '', '', '', '', '236e92bcf7c04d8d7ff3f798b537823f', 0),
(15, 'azertyu', 'azertyu', 'azertyu@g.g', '', '', '', '', 'cdaa6716746fb685734abde87f1b08ad', 0),
(16, 'Use', 'User', 'user@g.h', '', '', '', '', 'b53759f3ce692de7aff1b5779d3964da', 0),
(17, 'niki', 'nikita', 'nikita@n.n', '', '', '', '', 'cdaa6716746fb685734abde87f1b08ad', 0),
(18, 'azeazeaze', 'zaeazezaeaze', 'azeazea@dfs.f', '', '', '', '', 'cdaa6716746fb685734abde87f1b08ad', 0),
(19, 'za', 'za', 'op@p.p', 'za', 'za', 'za', 'za', 'cdaa6716746fb685734abde87f1b08ad', 0),
(20, 'p', 'p', 'p@p.p', 'p', 'p', 'p', 'p', '83878c91171338902e0fe0fb97a8c47a', 0),
(21, 'tr', 'tr', 'tr@tr.tr', 'tr', 'tr', 'tr', 'tr', 'e7d707a26e7f7b6ff52c489c60e429b1', 0),
(22, 'po', 'po', 'po@po.po', 'po', 'po', 'po', 'po', 'f6122c971aeb03476bf01623b09ddfd4', 0),
(23, 'gh', 'gh', 'gh@gh.gh', 'gh', 'gh', 'gh', 'gh', '19b19ffc30caef1c9376cd2982992a59', 0),
(24, 'ty', 'ty', 'ty@ty.ty', 'ty', 'ty', 'ty', 'ty', '36f3af6226e0b5303e19b824e7442272', 0),
(25, 'cv', 'cv', 'cv@cv.cv', 'cv', 'cv', 'cv', 'cv', 'de3ec0aa2234aa1e3ee275bbc715c6c9', 0),
(26, 'Adrien', 'wu', 'wx@wx.wx', 'wx', 'wx', 'wx', 'wx', '79b4de7cf79777bf4af9e213ede350af', 0),
(27, 'tom', 'doe', 'tom.doe@t.t', 'tomdoe', '1 tomdoe', '125', '0111111', 'cdaa6716746fb685734abde87f1b08ad', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
