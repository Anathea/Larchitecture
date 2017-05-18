<?php
require_once "../vendor/autoload.php";

use \CRUD\DB;
use \CRUD\Partenaire;
use \CRUD\Region;
use \CRUD\Revue;
use \CRUD\Actualite;
use \CRUD\ActualitesImage;
use \CRUD\ActualitesOuvrage;
use \CRUD\ActualitesEntreprise;
use \CRUD\RevueRegion;

DB::init();
require 'header.php';
$action = $_POST["action"] ?? ""; 
if ($action === "add") {
    $revue = new Actualite(); 
    $revue->architecte = htmlentities($_POST["architecte"] ?? "");
    $revue->lieu = htmlentities($_POST["lieu"] ?? "");
    $revue->realisation = htmlentities($_POST["realisation"] ?? "");
    $revue->rubrique = htmlentities($_POST["rubrique"] ?? "");
    $revue->departement = intval($_POST["departement"] ?? "");
    $revue->description = htmlentities($_POST["description"] ?? "");
    $revue->visuel = htmlentities($_POST["visuel"] ?? "");
    $revue->create();
}
?>
	<title>Actualité</title>
    </head>
    <body class="actu clearfix">
	<div id="haut">
            <a href="../index.php" id="site">Voir site</a>
            <a href="index.php" target="_blank" rel="noopener noreferrer" id="deconnexion">Se deconnecter</a>
	</div>
	<h1>Actualités</h1>
	<div class="contenu clearfix">
		<div class="julien">
			<ul>
                            <li><a href="modif-actualite.php">Actualités</a></li>
                            <li><a href="ajout-actualite.php">Ajouter</a></li>		
                            <li><a href="modif-actualite.php">Modifier</a></li>		
			</ul>
			<ul>
                            <li><a href="modif-partenaire.php">Partenaires</a></li>
                            <li><a href="ajout-partenaires.php">Ajouter</a></li>
                            <li><a href="modif-partenaire.php">Modifier</a></li>		
			</ul>
			<ul>
                            <li><a href="modif-revue.php">Revues</a></li>	
                            <li><a href="ajout-revues.php">Ajouter</a></li>		
                            <li><a href="modif-revue.php">Modifier</a></li>
			</ul>
		</div>
		<img src="img-content/line.png" alt="">
		<div class="formulaire-actu">
                    <form action="ajout-actualite.php" method="POST">
				<div class="gauche">
                                    <input type="hidden" name="action" value="add">
                                    <input type="number" name="date" placeholder="Année">
					<input type="text" name="architecte" placeholder="Architecte">
					<input type="text" name="realisation" placeholder="Nom du projet">
					<input type="text" name="lieu" placeholder="Lieu">
                                        <input type="number" name="departement" placeholder="Numéro du département">
				</div>
				<div class="droite">
					<textarea placeholder="description" rows="17" cols="50"></textarea>
					<input type="text" name="lien" placeholder="Lien vers les images">
					<input type="submit" name="" value="+">
					<input type="submit" name="ajouter" value="Ajouter">
				</div>
                    </form>
		</div>
	</div>
    </body>
</php>
