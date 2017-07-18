-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Mar 18 Juillet 2017 à 12:23
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `blogprojet3`
--

-- --------------------------------------------------------

--
-- Structure de la table `chapitres`
--

CREATE TABLE `chapitres` (
  `id_chap` int(11) NOT NULL,
  `titre_chap` varchar(40) NOT NULL,
  `auteur_chap` varchar(25) NOT NULL,
  `contenu_chap` text NOT NULL,
  `date_chap` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `chapitres`
--

INSERT INTO `chapitres` (`id_chap`, `titre_chap`, `auteur_chap`, `contenu_chap`, `date_chap`) VALUES
(1, 'Chapitre 1', 'Jean FORTEROCHE', 'Spicy jalapeno bacon ipsum dolor amet pork ribeye ham hock, porchetta tri-tip filet mignon pig pancetta ham sausage bresaola. Beef salami boudin pork chop pork leberkas. Shank corned beef alcatra, cupim short loin short ribs meatloaf. Biltong beef ham hock cow pork chop capicola turducken, pork belly leberkas.\r\n\r\nProsciutto jerky ribeye tri-tip sausage, ball tip spare ribs corned beef swine. Filet mignon rump sausage, doner ground round shank biltong beef ribs cow burgdoggen short loin chuck porchetta. Beef tri-tip ground round beef ribs pork chop. Beef ribs pig venison ground round, bresaola meatball alcatra. Capicola ham shankle bacon tenderloin salami spare ribs leberkas turducken pork. Beef prosciutto beef ribs pancetta, filet mignon ham chicken. Sausage cow kevin tail short ribs, shankle andouille picanha fatback pig pork tenderloin ball tip beef bacon.\r\n\r\nHamburger ball tip burgdoggen sirloin salami bresaola drumstick prosciutto. Sausage alcatra corned beef bresaola frankfurter boudin. Meatball pork loin bacon doner, picanha fatback short loin leberkas jerky bresaola landjaeger burgdoggen ribeye corned beef strip steak. Sausage prosciutto hamburger shank. Drumstick cupim biltong leberkas chuck. Cow shoulder jowl short loin pork loin spare ribs.', '2017-06-28'),
(2, 'Chapitre 2', 'Jean FORTEROCHE', 'Spicy jalapeno bacon ipsum dolor amet pork ribeye ham hock, porchetta tri-tip filet mignon pig pancetta ham sausage bresaola. Beef salami boudin pork chop pork leberkas. Shank corned beef alcatra, cupim short loin short ribs meatloaf. Biltong beef ham hock cow pork chop capicola turducken, pork belly leberkas.\r\n\r\nProsciutto jerky ribeye tri-tip sausage, ball tip spare ribs corned beef swine. Filet mignon rump sausage, doner ground round shank biltong beef ribs cow burgdoggen short loin chuck porchetta. Beef tri-tip ground round beef ribs pork chop. Beef ribs pig venison ground round, bresaola meatball alcatra. Capicola ham shankle bacon tenderloin salami spare ribs leberkas turducken pork. Beef prosciutto beef ribs pancetta, filet mignon ham chicken. Sausage cow kevin tail short ribs, shankle andouille picanha fatback pig pork tenderloin ball tip beef bacon.\r\n\r\nHamburger ball tip burgdoggen sirloin salami bresaola drumstick prosciutto. Sausage alcatra corned beef bresaola frankfurter boudin. Meatball pork loin bacon doner, picanha fatback short loin leberkas jerky bresaola landjaeger burgdoggen ribeye corned beef strip steak. Sausage prosciutto hamburger shank. Drumstick cupim biltong leberkas chuck. Cow shoulder jowl short loin pork loin spare ribs.', '2017-06-28'),
(3, 'Chapitre 3', 'Jean Forteroche', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce nec fermentum metus. Vivamus posuere orci eu lectus sodales pretium. Interdum et malesuada fames ac ante ipsum primis in faucibus. Phasellus pretium congue ex non feugiat. Sed ac lacus eget augue facilisis elementum. Nulla quis elementum sapien. Etiam consectetur, mi sit amet hendrerit fringilla, nulla elit laoreet quam, non sollicitudin felis metus lacinia nisl. Quisque tristique suscipit erat, nec pharetra tellus iaculis non. Curabitur tellus ante, scelerisque ut dapibus quis, molestie in justo. Aliquam in nisi magna. Pellentesque dictum gravida justo, gravida placerat lorem ultrices ut. Vestibulum sollicitudin tempus nibh, id luctus nulla lobortis ut.\r\n\r\nMauris vulputate varius ligula, eu feugiat dolor malesuada quis. Nulla lacus neque, porta ac tristique et, malesuada eleifend quam. Donec a felis quam. Quisque auctor, dolor ac sollicitudin suscipit, ante magna egestas lectus, nec sollicitudin metus arcu id erat. Donec hendrerit tincidunt magna, id pellentesque leo tincidunt in. Maecenas placerat dictum convallis. Proin eu semper massa. Aliquam efficitur faucibus congue. Donec nisl est, ultricies quis iaculis vitae, gravida nec odio. Praesent congue tortor ac hendrerit cursus. Fusce et lacinia dolor, eget ultrices turpis. Vivamus interdum vulputate est dapibus viverra. Cras feugiat felis risus, quis condimentum arcu scelerisque eget. Sed quis lacinia orci.\r\n\r\nInterdum et malesuada fames ac ante ipsum primis in faucibus. Phasellus a consequat enim, eu gravida nisl. Mauris pellentesque dui ut sodales convallis. In vel ligula interdum, gravida elit a, interdum velit. In nec fermentum ipsum, vitae vulputate tellus. Donec tincidunt fringilla orci vel euismod. Integer sit amet sodales sapien. In at felis efficitur, rutrum ante eu, pretium velit. Curabitur egestas sapien erat, sed mattis dui venenatis eu. Aenean congue accumsan ullamcorper. Aenean congue, sem sit amet cursus sodales, lorem ex facilisis velit, ut condimentum felis nunc sed velit. Pellentesque quis velit magna. Vestibulum at lacus tempor sem scelerisque dapibus nec in nisi. Sed efficitur elementum accumsan.\r\n\r\nMorbi lacinia felis in libero ullamcorper molestie. Morbi interdum, nulla non dictum tincidunt, nisi dolor aliquam tellus, ac dapibus dolor eros eu eros. Duis suscipit nisl risus. Vestibulum sed risus tellus. Aliquam hendrerit sodales maximus. Vivamus at nibh augue. Vivamus id ex suscipit nisl mollis lacinia. Integer vel dapibus purus, vel elementum purus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean ut aliquam nulla, sed mattis diam. Proin quis est ac nibh tristique consequat quis sed turpis. In convallis tellus quis eros dignissim fermentum. Nam quis semper arcu.\r\n\r\nAenean lectus ex, feugiat ac ex vel, gravida dignissim neque. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed sit amet hendrerit lorem, non tempus nunc. Nam lobortis urna vel maximus pharetra. Suspendisse potenti. Vivamus ultrices lobortis ligula, vitae blandit diam luctus non. Praesent fermentum ornare suscipit. ', '2017-06-28');

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

CREATE TABLE `commentaires` (
  `id_comm` int(11) NOT NULL,
  `id_chap` int(11) NOT NULL,
  `auteur_comm` varchar(25) NOT NULL,
  `contenu_comm` text NOT NULL,
  `date_comm` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `commentaires`
--

INSERT INTO `commentaires` (`id_comm`, `id_chap`, `auteur_comm`, `contenu_comm`, `date_comm`) VALUES
(1, 1, 'Un écrivain en herbe', 'bla bla bla je penses que mon commentaire est FOR intéressant enfin c\'est normal c\'est moi qui l\'ai ecrit.', '2017-06-28'),
(2, 1, 'GhostRider', 'Ton livre est fade, cela manque de flamme WWWWOOUUUAAAAAAAAHHHHHHHHHHHHHH', '2017-06-28'),
(3, 2, 'el BACONATOR', 'SI esta une muy buen jambon !!!!!! AIE AIE AIE', '2017-06-28'),
(4, 2, 'Vegetarien en force', 'LE JAMBON C\'EST TABOU\r\nON EN VIENDRA TOUS A BOUT !!!!', '2017-06-28'),
(5, 3, 'le boucher', 'hhhuuullll FRESH MEAT', '2017-06-28'),
(6, 3, 'El DIablo', 'je suis le ROI du BBQ je vous domine les gars', '2017-07-01');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `chapitres`
--
ALTER TABLE `chapitres`
  ADD PRIMARY KEY (`id_chap`);

--
-- Index pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD PRIMARY KEY (`id_comm`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `chapitres`
--
ALTER TABLE `chapitres`
  MODIFY `id_chap` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `commentaires`
--
ALTER TABLE `commentaires`
  MODIFY `id_comm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
