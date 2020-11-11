-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mar 08 Janvier 2019 à 19:01
-- Version du serveur :  5.7.11
-- Version de PHP :  7.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `sabrina`
--
CREATE DATABASE IF NOT EXISTS `sabrina` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `sabrina`;

-- --------------------------------------------------------

--
-- Structure de la table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `auteur` varchar(255) NOT NULL,
  `texte` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `news`
--

INSERT INTO `news` (`id`, `titre`, `auteur`, `texte`, `image`, `date`) VALUES
(1, 'Épisode spécial Noël', 'Satan', 'Sabrina revient pour un épisode spécial Noël !! Démon et sorcières sont de retour pour nous jouer un mauvais tour. \r\n\r\nAlors, dans cet épisode Sabrina sert un peu à rien mais bon ça nous fait patienter pour la saison 2... je vais pas raconter l\'épisode parce que CERTAINES personnes ne sont pas à jour et je ne préfère pas les spoiler car je tiens à mes points.\r\n\r\nSi tu lis d\'ailleurs les news dans l\'ordre d\'affichage sache que je vais probablement finir par écrire des paroles de chanson ou un truc dans le genre. Sinon j\'ai pas assez de texte, et je ne veux pas mettre du lorem ipsum. Le seul truc je veux bien mettre en latin c\'est un exorcisme... c\'est pas une mauvaise idée d\'ailleurs.', 'christmas.jpg', '2018-12-01'),
(2, 'Saison 2', 'Netflix ', 'Sabrina est renouvelée pour une saison 2! voilà c\'est tout par contre faut être patient hein, Netflix  n\'a pas que ça a diffusé et produire donc voila après vous pouvez regarder Riverdale en attendant si vous voulez. c\'est bien aussi !\r\n\r\nIl y  a du suspense, de l\'action, des beaux gosses, des belles gosses, des embrouilles et tutti quanti. En plus Netflix sort un nouvel épisode chaque semaine sauf durant les fêtes. ', 's2.jpg', '2019-01-01'),
(3, 'salem', 'cat', 'Salem, le chat est aussi de retour par contre on sait pas trop si Netflix va se décider à le faire parler. ( faut imaginer un émoji qui hausse les épaules). \r\n\r\nJ\'ai rien de plus à dire c\'est son familier, j\'avoue que comparer aux familiers de ses tantes, ben tu préfères Salem, un chat c\'est plus choupi.\r\n\r\n', 'salem.jpg', '2019-01-02'),
(4, 'Ouvre l\'article!', 'noche', 'Peut être qu\'il y a aura un crossover avec Riverdale, je sais pas mais j\'espère ce serait cool.\r\n\r\nAlors là si tu continues à lire et que tu as ouvert l\'article, je suis fière de moi (émoji mort de rire) en vrai y a seulement le dernier qui me fait marrer et puis je me suis lâcher aussi sur les persos.enfin surtout faustus et les 3 pestes la.', 'sab.jpg', '2019-01-04'),
(5, 'trash', 'blabla', 'la saison 2 sera encore plus trash et gore au la 1! plus de magie et toujours plus de démon!\r\n\r\nC\'est faux je n\'en sais rien!  la suite c\'est cadeau^^\r\n\r\nHello papi mais qué pasa?J\'entends des bails atroces sur moi\r\nÀ c\'qui paraît, j\'te cours après?Mais ça va pas, mais t\'es taré ouais\r\nMais comment ça le monde est tipeu?Tu croyais quoi, qu\'on se verrait plus jamais?J\'pourrais t\'afficher mais c\'est pas mon délire.D\'après les rumeurs, tu m\'as eu dans ton lit\r\n', 'vin.jpg', '2018-12-12'),
(6, 'Loué soit satan!', 'Monluc', 'loué soit Satan, oui enfin s\'il se décide à en faire un potable parce que la il est vraiment dégueulasse! On préfère Hiram Lodge et même lucifer de la série lucifer.\r\nSérieux les gars vous abusé! on veut un sexy man nous !!!! c\'est pas crédile l\'histoire de la dame de Satan sinon!\r\n\r\nOh Djadja  Y a pas moyen Djadja J\'suis pas ta catin Djadja, genre enCatchana baby tu dead ça Oh Djadja.\r\nY a pas moyen DjadjaJ\'suis pas ta catin Djadja, genre en Catchana baby tu dead ça', 'lulu.jpg', '2018-12-26'),
(7, 'test', 'test', 'test', NULL, '2019-01-08');

-- --------------------------------------------------------

--
-- Structure de la table `perso`
--

CREATE TABLE `perso` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `texte` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `perso`
--

INSERT INTO `perso` (`id`, `titre`, `texte`, `image`) VALUES
(1, 'Sabrina Spellman', 'Sabrina Spellman est une adolescente presque comme les autres : Elle est née suite à la relation entre un sorcier et une mortelle, ce qui fait d\'elle un hybride des deux.\r\n\r\nMerci Wikipédia! enfin bof quoi c\'est un peu vide l\'article. Si tu lis la news christmas tu comprendras.\r\n\r\nExorcizamus te omnis immundus spiritus omnis satanica potestas omnis incursio infernalis adversii omnis congregatio secta diabolica ergo draco maledicte ecclesiam tuam securi tibi facias libertate servire te rogamus audi nos.', 'sabrina.jpg'),
(2, 'Ambrose Spellman', 'Ambrose est le cousin de Sabrina. Suite à un mauvais comportement il est assigné à domicile.\r\nIl est gay!  lui ce sera un petit article parce que je sais plus quoi dire la. ', 'ambrose.jpg'),
(3, 'Les soeurs du destin', 'Ce sont trois filles adopté qui traine ensemble, de vraies pestes. on les hais sauf vers la fin enfin seulement une qu\'on "apprécie" les deux autres peuvent crever.', 'soeurs.jpg'),
(4, 'Faustus', 'Faustus est le grand prêtre de l\'Église de la Nuit. Il a des ongles déguelasse, sa tête est pas terrible non plus... mais bon à coté du Satan qu\'il nous ont pondu ben ça passe.', 'faustus.jpg'),
(5, 'test', 'test', '22190lulu.jpg');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `perso`
--
ALTER TABLE `perso`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `perso`
--
ALTER TABLE `perso`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
