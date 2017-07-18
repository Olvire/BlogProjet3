<?php

include_once('Modeles/connexion_bdd.php');

if (!isset($_GET['section']) OR $_GET['section'] == 'index')
{
    include_once('Controlers/index.php');
}