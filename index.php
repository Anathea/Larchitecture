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

DB::init();
$region = new Region();
$region->nom = "chatPacha";
$region->create();
$region->read();
var_dump($region);
$region->nom = "Chat marche !!!";
$region->update();
$region->read();
var_dump($region);
$region = new Region(30);
$region->delete();
$region = new Region(30);
$region->read();
var_dump($region);

$partenaire = new Partenaire(2);
$partenaire->nom = "truc";
$partenaire->libelle = "Agencement, mobilier, métiers d'art, décoration, cheminées";
$partenaire->id_region = "1";
$partenaire->departement = "69";
$partenaire->site = "http://www.equip-plus.fr/";
$partenaire->create();
$partenaire->read();
var_dump($partenaire);
$partenaire->nom = "Equi'plus";
$partenaire->libelle = "Agencement, mobilier, métiers d'art, décoration, cheminées";
$partenaire->id_region = "";
$partenaire->departement = "68";
$partenaire->site = "http://www.equip-plus.fr/";
$partenaire->update();
$partenaire->read();
var_dump($partenaire);
$partenaire->delete();
$partenaire->read();
var_dump($partenaire);

$revue = new Revue(11);
$revue->date = "2017";
$revue->numero = "286";
$revue->visibilite = 0;
$revue->create();
$revue->read();
var_dump($revue);
$revue->date = "2017";
$revue->numero = "286";
$revue->visibilite = 1;
$revue->update();
$revue->read();
var_dump($revue);
$revue->delete();
