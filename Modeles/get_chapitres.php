<?php
function get_chapitres()
{
    global $bdd;
    $chapitres = "contenu_chap, titre_chap, date-creation_fr";
        
    $req = $bdd->prepare('SELECT id_chap, titre_chap, auteur_chap, contenu_chap, DATE_FORMAT(date_chap, \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation_fr FROM chapitres ORDER BY date_chap DESC LIMIT 0,3');
    $req->execute();
    $billets = $req->fetchAll();
    
    return $chapitres;
}