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

      <section class="section-abonnement">
        <h2 class="section-abonnement__title">
          Abonnement
        </h2>

        <form class="section-abonnement__form">
          <div class="section-abonnement__form-part section-abonnement__form-part--active">
            <label class="section-abonnement__label">
              Raison sociale
            </label>
            <input type="text" name="social-reason" id="social-reason" class="section-abonnement__input">

            <label class="section-abonnement__label">
              Activité
            </label>
            <input type="text" name="activity" id="activity" class="section-abonnement__input">

            <label class="section-abonnement__label">
              Nom*
            </label>
            <input type="text" name="name" id="name" class="section-abonnement__input">

            <label class="section-abonnement__label">
              Prénom*
            </label>
            <input type="text" name="first-name" id="first-name" class="section-abonnement__input">

            <label class="section-abonnement__label">
              Fonction
            </label>
            <input type="text" name="function" id="function" class="section-abonnement__input">
          </div>

          <div class="section-abonnement__form-part">
            <label class="section-abonnement__label">
              Adresse*
            </label>
            <input type="text" name="adress" id="adress" class="section-abonnement__input">

            <label class="section-abonnement__label">
              Code Postal*
            </label>
            <input type="text" name="postcode" id="postcode" class="section-abonnement__input">

            <label class="section-abonnement__label">
              Ville*
            </label>
            <input type="text" name="city" id="city" class="section-abonnement__input">

            <label class="section-abonnement__label">
              Pays*
            </label>
            <input type="text" name="country" id="country" class="section-abonnement__input">

            <label class="section-abonnement__label">
              Téléphone*
            </label>
            <input type="text" name="phone" id="phone" class="section-abonnement__input">
          </div>

          <div class="section-abonnement__form-part">
            <label class="section-abonnement__label">
              Fax
            </label>
            <input type="text" name="fax" id="fax" class="section-abonnement__input">

            <label class="section-abonnement__label">
              Adresse email*
            </label>
            <input type="email" name="mail" id="mail" class="section-abonnement__input">

            <label class="section-abonnement__label">
              Zone géographique
            </label>
            <select name="zone" id="zone" class="section-abonnement__select">
              <option class="section-abonnement__option">
                France Métropolitaine
              </option>
              <option class="section-abonnement__option">
                Europe
              </option>
              <option class="section-abonnement__option">
                DOM
              </option>
              <option class="section-abonnement__option">
                TOM
              </option>
            </select>

            <label class="section-abonnement__label">
              Choix de la revue
            </label>
            <input type="number" value="285" min="200" max="285" name="revue" id="revue" class="section-abonnement__input">

            <label class="section-abonnement__label">
              Quantité
            </label>
            <select name="quantity" id="quantity" class="section-abonnement__select">
              <option class="section-abonnement__option">
                1
              </option>
              <option class="section-abonnement__option">
                5
              </option>
              <option class="section-abonnement__option">
                10
              </option>
              <option class="section-abonnement__option">
                20
              </option>
            </select>
          </div>
          
          <input type="submit" value="Envoyer" class="section-abonnement__input section-abonnement__input--validator">
        </form>
        <button class="section-abonnement__button section-abonnement__button-form">
          Précédent
        </button>
        <button class="section-abonnement__button section-commande__button-form section-abonnement__button--active">
          Suivant
        </button>
        <span class="section-abonnement__form-step">1/3</span>

        <h2 class="section-abonnement__title">
          Nos tarifs
        </h2>

        <table class="section-abonnement__table  section-abonnement__table--euro  section-abonnement__table--active">
          <tr class="section-abonnement__tr">
            <td class="section-abonnement__td">
              Quantité
            </td>
            <td class="section-abonnement__td">
              5
            </td>
            <td class="section-abonnement__td">
              10
            </td>
            <td class="section-abonnement__td">
              20
            </td>
          </tr>
          <tr class="section-abonnement__tr">
            <td class="section-abonnement__td">
              France
            </td>
            <td class="section-abonnement__td">
              75€<br>
              +15€ (frais de port)
            </td>
            <td class="section-abonnement__td">
              155€<br>
              +30€ (frais de port)
            </td>
            <td class="section-abonnement__td">
              240€<br>
              +60€ (frais de port)
            </td>
          </tr>
          <tr class="section-abonnement__tr">
            <td class="section-abonnement__td">
              DOM
            </td>
            <td class="section-abonnement__td">
              75€<br>
              +30€ (frais de port)
            </td>
            <td class="section-abonnement__td">
              155€<br>
              +60€ (frais de port)
            </td>
            <td class="section-abonnement__td">
              240€<br>
              +80€ (frais de port)
            </td>
          </tr>
          <tr class="section-abonnement__tr">
            <td class="section-abonnement__td">
              TOM
            </td>
            <td class="section-abonnement__td">
              75€<br>
              +45€ (frais de port)
            </td>
            <td class="section-abonnement__td">
              155€<br>
              +85€ (frais de port)
            </td>
            <td class="section-abonnement__td">
              240€<br>
              +130€ (frais de port)
            </td>
          </tr>
          <tr class="section-abonnement__tr">
            <td class="section-abonnement__td">
              Europe
            </td>
            <td class="section-abonnement__td">
              75€<br>
              +30€ (frais de port)
            </td>
            <td class="section-abonnement__td">
              155€<br>
              +60€ (frais de port)
            </td>
            <td class="section-abonnement__td">
              240€<br>
              +80€ (frais de port)
            </td>
          </tr>
        </table>

        <table class="section-abonnement__table  section-abonnement__table--franc">
          <tr class="section-abonnement__tr">
            <td class="section-abonnement__td">
              Quantité
            </td>
            <td class="section-abonnement__td">
              5
            </td>
            <td class="section-abonnement__td">
              10
            </td>
            <td class="section-abonnement__td">
              20
            </td>
          </tr>
          <tr class="section-abonnement__tr">
            <td class="section-abonnement__td">
              France
            </td>
            <td class="section-abonnement__td">
              90.75 CHF<br>
              +18.15 CHF (frais de port)
            </td>
            <td class="section-abonnement__td">
              187.55 CHF<br>
              +36.30 CHF (frais de port)
            </td>
            <td class="section-abonnement__td">
              290.40 CHF<br>
              +72.60 CHF (frais de port)
            </td>
          </tr>
          <tr class="section-abonnement__tr">
            <td class="section-abonnement__td">
              DOM
            </td>
            <td class="section-abonnement__td">
              90.75 CHF<br>
              +36.30 CHF (frais de port)
            </td>
            <td class="section-abonnement__td">
              187.55 CHF<br>
              +72.60 CHF (frais de port)
            </td>
            <td class="section-abonnement__td">
              290.40 CHF<br>
              +96.8 CHF (frais de port)
            </td>
          </tr>
          <tr class="section-abonnement__tr">
            <td class="section-abonnement__td">
              TOM
            </td>
            <td class="section-abonnement__td">
              90.75 CHF<br>
              +54.45 CHF (frais de port)
            </td>
            <td class="section-abonnement__td">
              187.55 CHF<br>
              +102.85 CHF (frais de port)
            </td>
            <td class="section-abonnement__td">
              290.40 CHF<br>
              +157.30 CHF (frais de port)
            </td>
          </tr>
          <tr class="section-abonnement__tr">
            <td class="section-abonnement__td">
              Europe
            </td>
            <td class="section-abonnement__td">
              90.75 CHF<br>
              +36.30 CHF (frais de port)
            </td>
            <td class="section-abonnement__td">
              187.55 CHF<br>
              +72.60 CHF (frais de port)
            </td>
            <td class="section-abonnement__td">
              290.40 CHF<br>
              +96.8 CHF (frais de port)
            </td>
          </tr>
        </table>

        <button class="section-abonnement__button  section-abonnement__button--euro">
          Prix en euro
        </button>
        <button class="section-abonnement__button  section-abonnement__button--franc">
          Prix en franc suisse
        </button>

        <form class="section-abonnement__form-mobile">
          <label class="section-abonnement__label">
            Quantité
          </label>
          <select class="section-abonnement__select section-abonnement__select--quantite" name="quatity" id="quantity">
            <option class="section-abonnement__option">
              5
            </option>
            <option class="section-abonnement__option">
              10
            </option>
            <option class="section-abonnement__option">
              20
            </option>
          </select>

          <label class="section-abonnement__label">
            Localisation
          </label>
          <select class="section-abonnement__select section-abonnement__select--localisation" name="quatity" id="quantity">
            <option class="section-abonnement__option">
              France
            </option>
            <option class="section-abonnement__option">
              Dom
            </option>
            <option class="section-abonnement__option">
              Tom
            </option>
            <option class="section-abonnement__option">
              Europe
            </option>
          </select>

          <label class="section-abonnement__label">
            Devise
          </label>
          <select class="section-abonnement__select section-abonnement__select--devise" name="quatity" id="quantity">
            <option class="section-abonnement__option">
              Euro
            </option>
            <option class="section-abonnement__option">
              Franc Suisse
            </option>
          </select>
        </form>

        <button class="section-abonnement__button section-abonnement__button--price">
          Voir le prix :
        </button>

        <span class="section-abonnement__price">
          75 € + 15 € (frais de port)
        </span>

        <img src="dist/img/img-content/revue.jpg" alt="couverture revue" class="section-abonnement__img">
      </section>

      <?php
        include "footer.php";
      ?>
    </div>

  <!-- Place JS here -->
  <script src="dist/js/app.min.js"></script>
  <script type="text/javascript">
    // VARIABLES POUR LA FONCTION D'AFFICHAGE/MASQUAGE DES TABLEAUX DE PRIX
    const buttonEuro = document.querySelector('.section-abonnement__button--euro'),
        buttonFranc = document.querySelector('.section-abonnement__button--franc'),
        tableEuro = document.querySelector('.section-abonnement__table--euro'),
        tableFranc = document.querySelector('.section-abonnement__table--franc');

    // FONCTION D'AFFICHAGE/MASQUAGE DES TABLEAUX DE PRIX
    function switchTable(table1, table2) {
      if (!table1.classList.contains('section-abonnement__table--active') && table2.classList.contains('section-abonnement__table--active')) {
        table1.classList.add('section-abonnement__table--active');
        table2.classList.remove('section-abonnement__table--active');
      }
    }

    // ecoute du clic sur le bouton "Prix en euro"
    buttonEuro.addEventListener('click', function() {
      switchTable(tableEuro, tableFranc);
    });

    // ecoute du clic sur le bouton "Prix en franc"
    buttonFranc.addEventListener('click', function() {
      switchTable(tableFranc, tableEuro);
    });

        // VARIABLES POUR LA FONCTION DE CHANGEMENT DE PRIX
    const quantiteSelect = document.querySelector('.section-abonnement__select--quantite'),
          localisationSelect = document.querySelector('.section-abonnement__select--localisation'),
          deviseSelect = document.querySelector('.section-abonnement__select--devise'),
          buttonPrice = document.querySelector('.section-abonnement__button--price'),
          price = document.querySelector('.section-abonnement__price');

    buttonPrice.addEventListener('click', function(){
      if (deviseSelect.value === "Euro") {
        switch (quantiteSelect.value) {
          case "5":
            switch (localisationSelect.value) {
              case "France":
                price.textContent = "75 € + 15 € (frais de port)";
                break;
              case "Dom":
                price.textContent = "75 € + 30 € (frais de port)";
                break;
              case "Tom":
                price.textContent = "75 € + 45 € (frais de port)";
                break;
              case "Europe":
                price.textContent = "75 € + 30 € (frais de port)";
                break;
            }
            break;
          case "10":
            switch (localisationSelect.value) {
              case "France":
                price.textContent = "155 € + 30 € (frais de port)";
                break;
              case "Dom":
                price.textContent = "155 € + 60 € (frais de port)";
                break;
              case "Tom":
                price.textContent = "155 € + 85 € (frais de port)";
                break;
              case "Europe":
                price.textContent = "155 € + 60 € (frais de port)";
                break;
            }
            break;
          case "20":
            switch (localisationSelect.value) {
              case "France":
                price.textContent = "240 € + 60 € (frais de port)";
                break;
              case "Dom":
                price.textContent = "240 € + 80 € (frais de port)";
                break;
              case "Tom":
                price.textContent = "240 € + 130 € (frais de port)";
                break;
              case "Europe":
                price.textContent = "240 € + 80 € (frais de port)";
                break;
            }
            break;
        }
      } else if (deviseSelect.value === "Franc Suisse") {
        switch (quantiteSelect.value) {
          case "5":
            switch (localisationSelect.value) {
              case "France":
                price.textContent = "90.75 CHF + 15 CHF (frais de port)";
                break;
              case "Dom":
                price.textContent = "90.75 CHF + 36.30 CHF (frais de port)";
                break;
              case "Tom":
                price.textContent = "90.75 CHF + 54.45 CHF (frais de port)";
                break;
              case "Europe":
                price.textContent = "90.75 CHF + 36.30 CHF (frais de port)";
                break;
            }
            break;
          case "10":
            switch (localisationSelect.value) {
              case "France":
                price.textContent = "187.55 CHF + 36.30 CHF (frais de port)";
                break;
              case "Dom":
                price.textContent = "187.55 CHF + 72.60 CHF (frais de port)";
                break;
              case "Tom":
                price.textContent = "187.55 CHF + 102.85 CHF (frais de port)";
                break;
              case "Europe":
                price.textContent = "187.55 CHF + 72.60 CHF (frais de port)";
                break;
            }
            break;
          case "20":
            switch (localisationSelect.value) {
              case "France":
                price.textContent = "290.40 CHF + 72.60 CHF (frais de port)";
                break;
              case "Dom":
                price.textContent = "290.40 CHF + 96.8 CHF (frais de port)";
                break;
              case "Tom":
                price.textContent = "290.40 CHF + 157.30 CHF (frais de port)";
                break;
              case "Europe":
                price.textContent = "290.40 CHF + 96.8 CHF (frais de port)";
                break;
            }
            break;
        }
      }
    });
  </script>
  </body>
</html>
