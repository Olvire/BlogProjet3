<!DOCTYPE html>
<html lang="FR">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="http://sstatic.net/so/favicon.ico">
    <link href="style/css/bootstrap.css" rel="stylesheet">
    <link href="style/css/bootstrap-theme.css" rel="stylesheet">
    <link href="style/css/carousel.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"><\/script>')</script>
    <script src="style/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/holder/2.9.4/holder.min.js"></script>    
    <title>Billet Simple pour l'Alaska.</title>
  </head>
<!-- NAVBAR
================================================== -->
  <body>
    <div class="navbar-wrapper">
      <div class="container">

        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">" Billet Simple pour l'Alaska "</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#about">A propos de moi</a></li>
                <li><a href="#contact">Me Contacter</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Liste des Chapitres <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Chapitre 1</a></li>
                    <li><a href="#">Chapitre 2</a></li>
                    <li><a href="#">Chapitre 3</a></li>
                    <li><a href="#">Chapitre 4</a></li>
                    <li><a href="#">Chapitre 5</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </nav>

      </div>
    </div>

    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="Style/images/alaska1.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Example headline.</h1>
              <p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="Style/images/alaska2.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Another example headline.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="Style/images/alaska3.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>One more for good measure.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Précédent</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Suivant</span>
      </a>
    </div>

    <div class="jumbotron">
      <div class="container">
        <p>Bienvenue sur le blog de mon nouveau roman " Billet simple pour l'Alaska". Au travers de ce blog je tente une expérience d'écriture collaborative, à savoir que je mettrai les chapitres en lignes au fur et à mesure et vous, mes fidèles lecteurs, pourrez y apporter vos commentaires et suggestions quant au contenu. Les meilleurs idées seront retenues et ajoutées à la mouture finale du roman.</p>
        <p>Vous trouverez mis en avant ci-dessous sur cette page les derniers chapitres produits, les autres sont toujours disponibles par le biais du menu de navigation. Bonne lecture :)</p>
      </div>
    </div>

    <div class="container marketing">
      <div class="row">
        
        <div class="col-lg-4">

            <h2>
              <?php echo $chapitre['titre_chap']; ?>
              <em>le <?php echo $chapitre['date_creation_fr']; ?></em>
            </h2>

            <p>
            <?php echo $chapitre['contenu_chap']; ?>
            <em><a href="#">Commentaires</a></em>
            </p>

            <p><a class="btn btn-default" href="#" role="button">En lire plus &raquo;</a></p>
        
        </div>

        <div class="col-lg-4">

            <h2>
              <?php echo $chapitre['titre_chap']; ?>
              <em>le <?php echo $chapitre['date_creation_fr']; ?></em>
            </h2>

            <p>
            <?php echo $chapitre['contenu_chap']; ?>
            <em><a href="#">Commentaires</a></em>
            </p>
            <p><a class="btn btn-default" href="#" role="button">En lire plus &raquo;</a></p>
        </div>

        <div class="col-lg-4">

            <h2>
              <?php echo $chapitre['titre_chap']; ?>
              <em>le <?php echo $chapitre['date_creation_fr']; ?></em>
            </h2>

            <p>
            <?php echo $chapitre['contenu_chap']; ?>
            <em><a href="#">Commentaires</a></em>
            </p>
            <p><a class="btn btn-default" href="#" role="button">En lire plus &raquo;</a></p>
        </div>
        
      </div>
    </div>
  </body>
</html>
