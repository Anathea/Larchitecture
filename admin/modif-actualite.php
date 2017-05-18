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
$actus = Actualite::readAll();
require 'header.php';
?>
	<title>Modifier une actualite</title>
    </head>
    <body class="modif-actu clearfix">
	<div id="haut">
            <a href="../index.php" id="site">Voir site</a>
            <a href="index.php" id="deconnexion">Se deconnecter</a>
	</div>
	<h1>Actualités</h1>
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
		<table>
			<tr>
				<th>Date</th>
				<th>Architecte</th>
				<th>Lieu</th>
				<th>Département</th>
				<th></th>
				<th></th>
			</tr>
                        <?php 
                        foreach ($actus as $revue) {
                        ?>
			<tr>
				<td><?=$revue->date?></td>
				<td><?=$revue->architecte?></td>
				<td><?=$revue->lieu?></td>
				<td><?=$revue->departement?></td>
				<td><a href=""><img src="img-content/pencil.png"></a></td>
				<td><a href=""><img src="img-content/poubelle.png"></a></td>
			</tr>
                        <?php } ?>
		</table>
	</div>
    </body>
</php>
