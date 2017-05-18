<!DOCTYPE>
<html lang="fr">
  <head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Larchitecture.com - Le site de la revue L'Architecture du votre Region</title>

    <!-- Meta SEO -->
    <meta name="description" content="Larchitecture.com, c'est une mise en ligne de chaque revue déja parue, un système de commande de revues en ligne, une liste de partenaires et d'architectes" />
    <meta name="abstract" content="Revues d'achitecture" />
    <meta name="keywords" content="larchitecture, revue, architecture, régionale, actualité, revue l'architecture, construction" />
    <meta name="news_keywords" content="larchitecture, 2017, mise à jour" />
    <meta name="rights" content="Copyright Larchitecture 2017" />
    <meta property="og:site_name" content="Larchitecture.com - Le site de la revue L'Architecture de votre Region" />
    <meta property="og:url" content="http://www.larchitecture.com" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Larchitecture.com - Le site de la revue L'Architecture de votre Region" />
    <meta property="og:description" content="diffuser des revues et actualités sur l'architecture" />
    <meta property="og:image" content="http://www.larchitecture.com/src/img/img-content/bckd-home.png" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@nomuser" />
    <meta name="twitter:site:id" content="12345" />
    <meta name="twitter:url" content="http://www.larchitecture.com" />
    <meta name="twitter:title" content="Larchitecture" />
    <meta name="twitter:description" content="diffuser des revues et actualités sur l'architecture" />
    <meta name="twitter:image:src" content="http://www.larchitecture.com/src/img/img-content/bckd-home.png" />
    <meta name="dcterms.title" content="Larchitecture.com - Le site de la revue L'Architecture de votre Region" />
    <meta name="dcterms.type" content="Text" />
    <meta name="dcterms.identifier" content="http://www.larchitecture.com" />
    <meta name="dcterms.format" content="text/html" />
    <meta name="dcterms.rights" content="Copyright Larchitecture 2017" />

    <!-- Custom CSS -->
    <link href="dist/css/styles.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
    <link rel="icon" type="img/png" href="src/img/img-layout/favicon.png" />
  </head>

  <body>

    <div class="main">
      <?php
        include "header.php";
      ?>

      <section class="section-article">
        <h2 class="section-article__title">
          Le Forum à Saint-Louis par Manuelle Gautrand Architecture
        </h2>

        <div class="section-article__caroussel">
            <button class="section-article__button-caroussel section-article__button-caroussel-prev">
              <
            </button>
            <button class="section-article__button-caroussel section-article__button-caroussel-next">
              >
            </button>      
          </div>

        <div class="section-article__container">

          <p class="section-article__paragraph">
            Ouvert au public depuis février, le Forum de Saint-Louis dessiné par Manuelle Gautrand Architecture se caractérise par son jeu de juxtaposition de volumes. Le projet s’implante en lieu et place de l’ancienne halle de sport et salle des Fêtes qui a été démolie.
            La ville de Saint-Louis compte près de 20 000 habitants, elle se situe non loin de la banlieue de Bâle en Alsace. Le projet s’implante dans un quartier essentiellement résidentiel avec de nombreux locaux d’activités de PME offrant l’hétérogénéité du site. Confronté aux jeux d’échelles du site et du programme, les architectes de Manuelle Gautrand Architecture ont cherché à en jouer pour répondre au concours lancé fin 2010. Lauréate face à Rudy Ricciotti et deux agences locales, le projet de l’agence de Manuelle Gautrand tire son idée de l’environnement et plus particulièrement des toitures de tuiles mécaniques recouvrant les différentes toitures.
          </p>

          <p class="section-article__paragraph">
            La réponse des architectes est un ensemble de 13 volumes différents alternant les pans de toitures traités avec un seul matériau, un bardage en métal déployé de couleur cuivre. Cette juxtaposition d’espaces répond également à la demande de la maitrise d’ouvrage qui était de connecter les différents programmes entre-eux. Les différents programmes s’organisent comme suit : La Salle des Fêtes de 700 places assises située au Nord, le Grand Hall multifonctionnel de 1 870 m2 situé au sud, les espaces d’accueil généraux à l’Ouest, les espaces d’accueil des scolaires à l’Est, et enfin les stockages (450 m2) au nord-Est.
          </p>

          <p class="section-article__paragraph">
            Le grand Hall a pour vocation principal d’abriter les activités sportives comme le badminton dans le cadre de compétitions et de pratiques scolaires mais aussi des concerts de musique. La salle des fêtes quant à elle accueillera des banquets principalement. Certains évènements de la ville requièrent en revanche l’ensemble des deux espaces comme la Grande Foire aux livres.
          </p>
        </div>

        <img src="dist/img/img-content/article04.jpg" class="section-article__image">
        
      </section>

      <?php
        include "footer.php";
      ?>
    </div>

  <!-- Place JS here -->
  <script src="dist/js/app.min.js"></script>
    <script type="text/javascript">
    // VARIABLES POUR LE CAROUSSEL
    const caroussel = document.querySelector('.section-article__caroussel'),
        buttonPrev = document.querySelector('.section-article__button-caroussel-prev'),
        buttonNext = document.querySelector('.section-article__button-caroussel-next');
    let count = 1;

    caroussel.style.background = `url('dist/img/img-content/article01.jpg')`;

    buttonPrev.addEventListener('click', function(){
      if (count > 1) {
        count--;
        caroussel.style.background = `url('dist/img/img-content/article0${count}.jpg')`;
      }
    });

    buttonNext.addEventListener('click', function(){
      if (count < 3) {
        count++;
        caroussel.style.background = `url('dist/img/img-content/article0${count}.jpg')`;
      }
    });
  </script>
  </body>
</html>
