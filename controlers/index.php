<?php

include_once('Modeles/get_chapitres.php');
$chapitres = get_chapitres(0, 3);

foreach($chapitres as $cle => $chapitre)
{
    $chapitres[$cle]['titre_chap'] = htmlspecialchars($chapitre['titre_chap']);
    $chapitres[$cle]['contenu_chap'] = nl2br(htmlspecialchars($chapitre['contenu_chap']));
}

include_once('Vues/index.php');