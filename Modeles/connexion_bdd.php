<?php

// Connexion � la base de donn�es
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=blogprojet3', 'root', '');
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}
