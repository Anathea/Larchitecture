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

      <section class="section-commande">
        <h2 class="section-commande__title">
          Commande
        </h2>

        <form class="section-commande__form">
          <div class="section-commande__form-part section-commande__form-part--active">
            <label class="section-commande__label">
              Raison sociale
            </label>
            <input type="text" name="social-reason" id="social-reason" class="section-commande__input">

            <label class="section-commande__label">
              Activité
            </label>
            <input type="text" name="activity" id="activity" class="section-commande__input">

            <label class="section-commande__label">
              Nom*
            </label>
            <input type="text" name="name" id="name" class="section-commande__input">

            <label class="section-commande__label">
              Prénom*
            </label>
            <input type="text" name="first-name" id="first-name" class="section-commande__input">

            <label class="section-commande__label">
              Fonction
            </label>
            <input type="text" name="function" id="function" class="section-commande__input">
          </div>

          <div class="section-commande__form-part">
            <label class="section-commande__label">
              Adresse*
            </label>
            <input type="text" name="adress" id="adress" class="section-commande__input">

            <label class="section-commande__label">
              Code Postal*
            </label>
            <input type="text" name="postcode" id="postcode" class="section-commande__input">

            <label class="section-commande__label">
              Ville*
            </label>
            <input type="text" name="city" id="city" class="section-commande__input">

            <label class="section-commande__label">
              Pays*
            </label>
            <input type="text" name="country" id="country" class="section-commande__input">

            <label class="section-commande__label">
              Téléphone*
            </label>
            <input type="text" name="phone" id="phone" class="section-commande__input">
          </div>

          <div class="section-commande__form-part">
            <label class="section-commande__label">
              Fax
            </label>
            <input type="text" name="fax" id="fax" class="section-commande__input">

            <label class="section-commande__label">
              Adresse email*
            </label>
            <input type="email" name="mail" id="mail" class="section-commande__input">

            <label class="section-commande__label">
              Zone géographique
            </label>
            <select name="zone" id="zone" class="section-commande__select">
              <option class="section-commande__option">
                France Métropolitaine
              </option>
              <option class="section-commande__option">
                Europe
              </option>
              <option class="section-commande__option">
                DOM
              </option>
              <option class="section-commande__option">
                TOM
              </option>
            </select>

            <label class="section-commande__label">
              Choix de la revue
            </label>
            <input type="number" value="285" min="200" max="285" name="revue" id="revue" class="section-commande__input">

            <label class="section-commande__label">
              Quantité
            </label>
            <select name="quantity" id="quantity" class="section-commande__select">
              <option class="section-commande__option">
                1
              </option>
              <option class="section-commande__option">
                5
              </option>
              <option class="section-commande__option">
                10
              </option>
              <option class="section-commande__option">
                20
              </option>
            </select>
          </div>
          
          <input type="submit" value="Envoyer" class="section-commande__input section-commande__input--validator">
        </form>
        <button class="section-commande__button section-commande__button-form">
          Précédent
        </button>
        <button class="section-commande__button section-commande__button-form section-commande__button--active">
          Suivant
        </button>
        <span class="section-commande__form-step">1/3</span>

        <h2 class="section-commande__title">
          Nos tarifs
        </h2>

        <table class="section-commande__table  section-commande__table--euro  section-commande__table--active">
          <tr class="section-commande__tr">
            <td class="section-commande__td">
              Quantité
            </td>
            <td class="section-commande__td">
              5
            </td>
            <td class="section-commande__td">
              10
            </td>
            <td class="section-commande__td">
              20
            </td>
          </tr>
          <tr class="section-commande__tr">
            <td class="section-commande__td">
              France
            </td>
            <td class="section-commande__td">
              75€<br>
              +15€ (frais de port)
            </td>
            <td class="section-commande__td">
              155€<br>
              +30€ (frais de port)
            </td>
            <td class="section-commande__td">
              240€<br>
              +60€ (frais de port)
            </td>
          </tr>
          <tr class="section-commande__tr">
            <td class="section-commande__td">
              DOM
            </td>
            <td class="section-commande__td">
              75€<br>
              +30€ (frais de port)
            </td>
            <td class="section-commande__td">
              155€<br>
              +60€ (frais de port)
            </td>
            <td class="section-commande__td">
              240€<br>
              +80€ (frais de port)
            </td>
          </tr>
          <tr class="section-commande__tr">
            <td class="section-commande__td">
              TOM
            </td>
            <td class="section-commande__td">
              75€<br>
              +45€ (frais de port)
            </td>
            <td class="section-commande__td">
              155€<br>
              +85€ (frais de port)
            </td>
            <td class="section-commande__td">
              240€<br>
              +130€ (frais de port)
            </td>
          </tr>
          <tr class="section-commande__tr">
            <td class="section-commande__td">
              Europe
            </td>
            <td class="section-commande__td">
              75€<br>
              +30€ (frais de port)
            </td>
            <td class="section-commande__td">
              155€<br>
              +60€ (frais de port)
            </td>
            <td class="section-commande__td">
              240€<br>
              +80€ (frais de port)
            </td>
          </tr>
        </table>

        <table class="section-commande__table  section-commande__table--franc">
          <tr class="section-commande__tr">
            <td class="section-commande__td">
              Quantité
            </td>
            <td class="section-commande__td">
              1
            </td>
            <td class="section-commande__td">
              5
            </td>
            <td class="section-commande__td">
              10
            </td>
            <td class="section-commande__td">
              20
            </td>
          </tr>
          <tr class="section-commande__tr">
            <td class="section-commande__td">
              France
            </td>
            <td class="section-commande__td">
              90.75 CHF<br>
              +18.15 CHF (frais de port)
            </td>
            <td class="section-commande__td">
              187.55 CHF<br>
              +36.30 CHF (frais de port)
            </td>
            <td class="section-commande__td">
              290.40 CHF<br>
              +72.60 CHF (frais de port)
            </td>
          </tr>
          <tr class="section-commande__tr">
            <td class="section-commande__td">
              DOM
            </td>
            <td class="section-commande__td">
              90.75 CHF<br>
              +36.30 CHF (frais de port)
            </td>
            <td class="section-commande__td">
              187.55 CHF<br>
              +72.60 CHF (frais de port)
            </td>
            <td class="section-commande__td">
              290.40 CHF<br>
              +96.8 CHF (frais de port)
            </td>
          </tr>
          <tr class="section-commande__tr">
            <td class="section-commande__td">
              TOM
            </td>
            <td class="section-commande__td">
              90.75 CHF<br>
              +54.45 CHF (frais de port)
            </td>
            <td class="section-commande__td">
              187.55 CHF<br>
              +102.85 CHF (frais de port)
            </td>
            <td class="section-commande__td">
              290.40 CHF<br>
              +157.30 CHF (frais de port)
            </td>
          </tr>
          <tr class="section-commande__tr">
            <td class="section-commande__td">
              Europe
            </td>
            <td class="section-commande__td">
              90.75 CHF<br>
              +36.30 CHF (frais de port)
            </td>
            <td class="section-commande__td">
              187.55 CHF<br>
              +72.60 CHF (frais de port)
            </td>
            <td class="section-commande__td">
              290.40 CHF<br>
              +96.8 CHF (frais de port)
            </td>
          </tr>
        </table>

        <button class="section-commande__button  section-commande__button--euro">
          Prix en euro
        </button>
        <button class="section-commande__button  section-commande__button--franc">
          Prix en franc suisse
        </button>

        <form class="section-commande__form-mobile">
          <label class="section-commande__label">
            Quantité
          </label>
          <select class="section-commande__select section-commande__select--quantite" name="quatity" id="quantity">
            <option class="section-commande__option">
              1
            </option>
            <option class="section-commande__option">
              5
            </option>
            <option class="section-commande__option">
              10
            </option>
            <option class="section-commande__option">
              20
            </option>
          </select>

          <label class="section-commande__label">
            Localisation
          </label>
          <select class="section-commande__select section-commande__select--localisation" name="quatity" id="quantity">
            <option class="section-commande__option">
              France
            </option>
            <option class="section-commande__option">
              Dom
            </option>
            <option class="section-commande__option">
              Tom
            </option>
            <option class="section-commande__option">
              Europe
            </option>
          </select>

          <label class="section-commande__label">
            Devise
          </label>
          <select class="section-commande__select section-commande__select--devise" name="quatity" id="quantity">
            <option class="section-commande__option">
              Euro
            </option>
            <option class="section-commande__option">
              Franc Suisse
            </option>
          </select>
        </form>

        <button class="section-commande__button section-commande__button--price">
          Voir le prix :
        </button>

        <span class="section-commande__price">
          19 € + 3 € (frais de port)
        </span>

        <img src="dist/img/img-content/revue.jpg" alt="couverture revue" class="section-commande__img">
      </section>

      <?php
        include "footer.php";
      ?>
    </div>

  <!-- Place JS here -->
  <script src="dist/js/app.min.js"></script>
    <script type="text/javascript">
    // VARIABLES POUR LE FORMULAIRE MOBILE
    const formParts = document.querySelectorAll('.section-commande__form-part'),
          buttonsForm = document.querySelectorAll('.section-commande__button-form');
          submit = document.querySelector('.section-commande__input--validator');
          formStep = document.querySelector('.section-commande__form-step');
    let count = 0;

          // FONCTION FORMULAIRE MOBILE
          buttonsForm[0].addEventListener('click', function(event){
            if (count >= 0) {
              count--;
              formStep.textContent = `${count+1}/3`;
              for (let i = 0; i < formParts.length; i++) {
                formParts[i].classList.remove('section-commande__form-part--active');
              }
              formParts[count].classList.add('section-commande__form-part--active');

              if (count === 0) {
                this.classList.remove('section-commande__button--active');
              } else if (count === formParts.length - 2) {
                buttonsForm[1].classList.add('section-commande__button--active');
                submit.classList.remove('section-commande__button--active');
              }
            }
          });

          buttonsForm[1].addEventListener('click', function(event){
            if (count < formParts.length - 1){
              count++;
              formStep.textContent = `${count+1}/3`;
              for (let i = 0; i < formParts.length; i++) {
                formParts[i].classList.remove('section-commande__form-part--active');
              }
              formParts[count].classList.add('section-commande__form-part--active');

              if (count === 1) {
                buttonsForm[0].classList.add('section-commande__button--active');
              } else if (count === formParts.length - 1) {
                this.classList.remove('section-commande__button--active');
                submit.classList.add('section-commande__button--active');
              }
            }
          });


    // VARIABLES POUR LA FONCTION D'AFFICHAGE/MASQUAGE DES TABLEAUX DE PRIX
    const buttonEuro = document.querySelector('.section-commande__button--euro'),
        buttonFranc = document.querySelector('.section-commande__button--franc'),
        tableEuro = document.querySelector('.section-commande__table--euro'),
        tableFranc = document.querySelector('.section-commande__table--franc');

    // FONCTION D'AFFICHAGE/MASQUAGE DES TABLEAUX DE PRIX
    function switchTable(table1, table2) {
      if (!table1.classList.contains('section-commande__table--active') && table2.classList.contains('section-commande__table--active')) {
        table1.classList.add('section-commande__table--active');
        table2.classList.remove('section-commande__table--active');
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
    const quantiteSelect = document.querySelector('.section-commande__select--quantite'),
          localisationSelect = document.querySelector('.section-commande__select--localisation'),
          deviseSelect = document.querySelector('.section-commande__select--devise'),
          buttonPrice = document.querySelector('.section-commande__button--price'),
          price = document.querySelector('.section-commande__price');

    buttonPrice.addEventListener('click', function(){
      if (deviseSelect.value === "Euro") {
        switch (quantiteSelect.value) {
          case "1":
            switch (localisationSelect.value) {
              case "France":
                price.textContent = "19 € + 3 € (frais de port)";
                break;
              case "Dom":
                price.textContent = "19 € + 8 € (frais de port)";
                break;
              case "Tom":
                price.textContent = "19 € + 10 € (frais de port)";
                break;
              case "Europe":
                price.textContent = "19 € + 8 € (frais de port)";
                break;
            }
            break;
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
          case "1":
            switch (localisationSelect.value) {
              case "France":
                price.textContent = "22.99 CHF + 3.63 CHF (frais de port)  ";
                break;
              case "Dom":
                price.textContent = "22.99 CHF + 9.68 CHF (frais de port)";
                break;
              case "Tom":
                price.textContent = "22.99 CHF + 12.10 CHF (frais de port)";
                break;
              case "Europe":
                price.textContent = "22.99 CHF + 9.68 CHF (frais de port)";
                break;
            }
            break;
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
