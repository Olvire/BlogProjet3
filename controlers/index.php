<?php

// On demande les 5 derniers billets (modèle)
include_once('Modeles/get_chapitres.php');
$chapitres = get_chapitres(0, 5);

// On effectue du traitement sur les données (contrôleur)
// Ici, on doit surtout sécuriser l'affichage
foreach($chapitres as $cle => $chapitre)
{
    $chapitres[$cle]['titre_chap'] = htmlspecialchars($chapitre['titre_chap']);
    $chapitres[$cle]['contenu_chap'] = nl2br(htmlspecialchars($chapitre['contenu_chap']));
}

// On affiche la page (vue)
include_once('Vues/index.php');