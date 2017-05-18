<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once "vendor/autoload.php";

use \CRUD\DB;
use \CRUD\Partenaire;
use \CRUD\Region;
use \CRUD\Revue;
use \CRUD\Actualite;
use \CRUD\ActualitesImage;
use \CRUD\ActualitesOuvrage;
use \CRUD\ActualitesEntreprise;
use \CRUD\RevueRegion;

echo "<pre>";

DB::init();

//$region = new Region();
//$region->nom = "chatPacha";
//$region->create();
//$region->read();
//var_dump($region);
//$region->nom = "Chat marche !!!";
//$region->update();
//$region->read();
//var_dump($region);
//$region = new Region(30);
//$region->delete();
//$region = new Region(30);
//$region->read();
//var_dump($region);
//
//$partenaire = new Partenaire(2);
//$partenaire->nom = "truc";
//$partenaire->libelle = "Agencement, mobilier, métiers d'art, décoration, cheminées";
//$partenaire->departement = "69";
//$partenaire->site = "http://www.equip-plus.fr/";
//$region->createPartenaire($partenaire);
//$partenaire->read();
//var_dump($partenaire);
//$partenaire->nom = "Equi'plus";
//$partenaire->libelle = "Agencement, mobilier, métiers d'art, décoration, cheminées";
//$partenaire->departement = "68";
//$partenaire->site = "http://www.equip-plus.fr/";
//$partenaire->update();
//$partenaire->read();
//var_dump($partenaire);
//$partenaire->delete();
//$partenaire->read();
//var_dump($partenaire);
//
//$revue = new Revue(11);
//$revue->date = "2017";
//$revue->numero = "286";
//$revue->visibilite = 0;
//$revue->create();
//$revue->read();
//var_dump($revue);
//$revue->date = "2017";
//$revue->numero = "286";
//$revue->visibilite = 1;
//$revue->update();
//$revue->read();
//var_dump($revue);
//$revue->delete();
//
//$actualite = new Actualite();
//$actualite->date = 2009;
//$actualite->architecte = "ABH Architectes";
//$actualite->realisation = "Truc qui n'est pas une licorne";
//$actualite->rubrique = "Truc chiant";
//$actualite->lieu = "Loin";
//$actualite->departement = 69;
//$actualite->description = "Cette création objectivement assez moche a été "
//        . "imaginé par ABH Architectes. Personellement, je ne leur confirais pas"
//        . " les plans de ma maison. En plus, y'a pas de licorne.";
//$actualite->visuel = "truc-pas-licorne.png";
//$actualite->create();
//$actualite->read();
//var_dump($actualite);
//
//$image = new ActualitesImage();
//$image->image = "paslicorne.png";
//$actualite->createImage($image);
//$image->image = "licorne.png";
//$actualite->createImage($image);
//$image->image = "beurk.png";
//$actualite->createImage($image);
//var_dump($actualite->readImages());
//
//$blabla = new ActualitesOuvrage();
//$blabla->nom = "Surface";
//$blabla->description = "Trop";
//$actualite->createOuvrage($blabla);
//$blabla->nom = "Maître d’ouvrage";
//$blabla->description = "Papso II - Stargime";
//$actualite->createOuvrage($blabla);
//var_dump($actualite->readOuvrages());
//
//$contact = new ActualitesEntreprise();
//$contact->role = "Terrassement";
//$contact->nom = "Un incompétent";
//$actualite->createEntreprise($contact);
//$contact->role = "Gros œuvre";
//$contact->nom = "Autre incompétent";
//$actualite->createEntreprise($contact);
//var_dump($actualite->readEntreprises());
//
//$actualite->delete();

$region = new Region();
$region->nom = "Piounyah";
$region->create();
$region->read();
var_dump($region);

$region1 = new Region();
$region1->nom = "I don't care either tbh";
$region1->create();
$region1->read();
var_dump($region1);

$partenaire = new Partenaire();
$partenaire->nom = "Partenaire";
$partenaire->libelle = "Fenêtre";
$partenaire->departement = "69";
$partenaire->site = "http://www.equip-plus.fr/";
$region->createPartenaire($partenaire);
$partenaire->read();
var_dump($partenaire);

$revue = new Revue();
$revue->date = "2017";
$revue->numero = "286";
$revue->visibilite = 0;
$revue->create();
$revue->read();
var_dump($revue);

$rr = new RevueRegion();
$rr->img = "trez.png";
$rr->lien = "http://easteregg.com";
$rr->revue = $revue;
$rr->region = $region;
$rr->create();
$rr->read();
var_dump($rr);

$rr1 = new RevueRegion();
$rr1->img = "trezeu.png";
$rr1->lien = "http://easteregugg.com";
$rr1->revue = $revue;
$rr1->region = $region1;
$rr1->create();
$rr1->read();
var_dump($rr1);

var_dump($region->readPartenaires());
var_dump($revue->readRegions());
var_dump($region->readRevues());
var_dump($region1->readRevues());

$revue->delete();
$region->delete();
$region1->delete();

echo "</pre>";