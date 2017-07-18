<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Mon blog</title>
	<link href="vue/blog/style.css" rel="stylesheet" /> 
    </head>
        
    <body>
        <h1>Mon super blog !</h1>
        <p>Derniers chapitres du blog :</p>
 
<?php
foreach($chapitres as $chapitre)
{
?>
<div class="news">
    <h3>
        <?php echo $chapitre['titre_chap']; ?>
        <em>le <?php echo $chapitre['date_creation_fr']; ?></em>
    </h3>
    
    <p>
    <?php echo $chapitre['contenu_chap']; ?>
    <br />
    <em> <!-- <a href="commentaires.php?chapitre=<?php echo $chapitre['id']; ?>">Commentaires</a> --> </em>
    </p>
</div>
<?php
}
?>
</body>
</html>