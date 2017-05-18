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
$revues = Revue::readAll();
require 'header.php';
?>
	<title>Modifier une revue</title>
    </head>
    <body class="modif-revues clearfix">
	<div id="haut">
            <a href="../index.php" id="site">Voir site</a>
            <a href="index.php" id="deconnexion">Se deconnecter</a>
	</div>
	<h1>Revues</h1>
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
				<th>Numero</th>
				<th>Région</th>
				<th>Date</th>
				<th></th>
				<th></th>
			</tr>
                        <?php 
                        foreach ($revues as $revue) {
                            $regions = $revue->readAll();
                            foreach ($regions as $region) {
                         ?>
                                    <tr>
                                        <td><?=$revue->numero ?></td>
                                        <td><?=$region->region->nom ?></td>
                                        <td><?=$revue->date ?></td>
                                        <td><a href=""><img src="img-content/pencil.png" alt="éditer"></a></td>
                                        <td><a href=""><img src="img-content/poubelle.png" alt="supprimer"></a></td>
                                    </tr>
                        <?php }
                         } 
                         ?>
		</table>
	</div>
    </body>
</html>
