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

      <section class="section-contact">
        <h2 class="section-contact__title">
          Nous contacter
        </h2>

        <form class="section-contact__form">
          <div class="section-contact__form-part">
            <label class="section-contact__label">
              Raison sociale*
            </label>
            <input type="text" name="social-reason" id="social-reason" class="section-contact__input">

            <label class="section-contact__label">
              Nom*
            </label>
            <input type="text" name="name" id="name" class="section-contact__input">

            <label class="section-contact__label">
              Téléphone*
            </label>
            <input type="tel" name="phone" id="phone" class="section-contact__input">

            <label class="section-contact__label">
              Adresse mail*
            </label>
            <input type="email" name="mail" id="mail" class="section-contact__input">

            <label class="section-contact__label">
              Service*
            </label>
            <select name="service" id="service" class="section-contact__select">
              <option class="section-contact__option">
                Commercial
              </option>
              <option class="section-contact__option">
                Rédactionnel / Publicité
              </option>
              <option class="section-contact__option">
                Administratif / Comptabilité
              </option>
              <option class="section-contact__option">
                Direction
              </option>
            </select>
          </div>

          <div class="section-contact__form-part">
            <label class="section-contact__label">
            Message*
            </label>
            <textarea name="message" id="message" class="section-contact__textarea"></textarea>

            <input type="submit" value="Envoyer" class="section-contact__input section-contact__input--validator">
            <input type="reset" value="Effacer" class="section-contact__input section-contact__input--validator">
          </div>
        </form>
      </section>

      <?php
        include "footer.php";
      ?>
    </div>

  <!-- Place JS here -->
  <script src="dist/js/app.min.js"></script>
  </body>
</html>
