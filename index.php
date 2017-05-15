<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require 'crud/DB.php';
require 'crud/Region.php';

DB::init();
//$region = new Region();
//$region->nom = 'chatPacha';
//$region->create();
//$region->read();
//var_dump($region);
//$region->nom = 'Pouchin !';
//$region->update();
//$region->read();
//var_dump($region);
$region = new Region(30);
$region->delete();
$region = new Region(30);
$region->read();
var_dump($region);
