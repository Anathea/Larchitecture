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
    $revue = new Partenaire(); 
    $revue->nom = htmlentities($_POST["nom"] ?? "");
    $revue->region = htmlentities($_POST["region"] ?? "");
    $revue->departement = intval($_POST["departement"] ?? "");
    $revue->lien = htmlentities($_POST["lien"] ?? "");
    $revue->create();
}
?>
	<title>Partenaires</title>
    </head>
    <body class="partenaires clearfix">
	<div id="haut">
            <a href="../index.php" id="site">Voir site</a>
            <a href="index.php" id="deconnexion">Se deconnecter</a>
	</div>
	<h1>Partenaires</h1>
	<div class="contenu">
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
		<img src="img-content/line.png">
		<div class="formulaire-actu">
                    <form action="ajout-partenaires.php" method="POST">
				<div class="gauche">
                                    <input type="hidden" name="action" value="add">
					<input type="text" name="nom" placeholder="Nom">
					<input type="text" name="region" placeholder="Region">
                                        <input type="number" name="departement" placeholder="Département">
					<input type="text" name="lien" placeholder="Lien vers le site">
					<input type="submit" name="ajouter" value="Ajouter">
				</div>
			</form>
		</div>
	</div>
    </body>
</php>

