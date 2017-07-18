<?php
function get_chapitres($offset, $limit)
{
    global $bdd;
    $offset = (int) $offset;
    $limit = (int) $limit;
        
    $req = $bdd->prepare('SELECT id_chap, titre_chap, auteur_chap, contenu_chap, DATE_FORMAT(date_chap, \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation_fr FROM chapitres ORDER BY date_chap DESC LIMIT :offset, :limit');
    $req->bindParam(':offset', $offset, PDO::PARAM_INT);
    $req->bindParam(':limit', $limit, PDO::PARAM_INT);
    $req->execute();
    $billets = $req->fetchAll();
    
    
    return $chapitres;
}