<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace CRUD;

use \PDO;

/**
 * Description of Actualite
 *
 * @author anathea
 */
class Actualite {

    public $id;
    public $date;
    public $architecte;
    public $realisation;
    public $rubrique;
    public $lieu;
    public $departement;
    public $description;
    public $visuel;

    public function __construct($id = -1, $date = null, $architecte = null,
            $realisation = null, $rubrique = null, $lieu = null,
            $departement = null, $description = null, $visuel = null)
    {
        $this->id = $id;
        $this->date = $date;
        $this->architecte = $architecte;
        $this->realisation = $realisation;
        $this->rubrique = $rubrique;
        $this->lieu = $lieu;
        $this->departement = $departement;
        $this->description = $description;
        $this->visuel = $visuel;
    }

    public function create()
    {
        $sql = "INSERT INTO `actualites`
                  (`date`, `architecte`, `realisation`, `rubrique`, `lieu`, `departement`, `description`, `visuel`)
                VALUES
                  (:date, :architecte, :realisation, :rubrique, :lieu, :departement, :description, :visuel)
                ;";
        $stmt = DB::$pdo->prepare($sql);
        $stmt->bindValue(':date', $this->date, PDO::PARAM_INT);
        $stmt->bindValue(':architecte', $this->architecte, PDO::PARAM_STR);
        $stmt->bindValue(':realisation', $this->realisation, PDO::PARAM_STR);
        $stmt->bindValue(':rubrique', $this->rubrique, PDO::PARAM_STR);
        $stmt->bindValue(':lieu', $this->lieu, PDO::PARAM_STR);
        $stmt->bindValue(':departement', $this->departement, PDO::PARAM_INT);
        $stmt->bindValue(':description', $this->description, PDO::PARAM_STR);
        $stmt->bindValue(':visuel', $this->visuel, PDO::PARAM_STR);
        $stmt->execute();
        $this->id = DB::$pdo->lastInsertId();
    }

    public function read()
    {
        $sql = "SELECT
                  `date`,
                  `architecte`,
                  `realisation`,
                  `rubrique`,
                  `lieu`,
                  `departement`,
                  `description`,
                  `visuel`
                FROM
                  `actualites`
                WHERE
                  `id` = :id
                  ;";
        $stmt = DB::$pdo->prepare($sql);
        $stmt->bindValue(':id', $this->id, PDO::PARAM_INT);
        $stmt->execute();
        $data = $stmt->fetch(PDO::FETCH_ASSOC);
        $this->date = $data["date"];
        $this->architecte = $data["architecte"];
        $this->realisation = $data["realisation"];
        $this->rubrique = $data["rubrique"];
        $this->lieu = $data["lieu"];
        $this->departement = $data["departement"];
        $this->description = $data["description"];
        $this->visuel = $data["visuel"];
    }

    public function update()
    {
        $sql = "UPDATE
                  `actualites`
                SET
                  `date` = :date,
                  `architecte` = :architecte,
                  `realisation` = :realisation,
                  `rubrique` = :rublique,
                  `lieu` = :lieu,
                  `departement` = :departement,
                  `description` = :description,
                  `visuel` = :visuel
                WHERE
                  `id` = :id
                ;";
        $stmt = DB::$pdo->prepare($sql);
        $stmt->bindValue(':id', $this->id, PDO::PARAM_INT);
        $stmt->bindValue(':date', $this->date, PDO::PARAM_INT);
        $stmt->bindValue(':architecte', $this->architecte, PDO::PARAM_STR);
        $stmt->bindValue(':realisation', $this->realisation, PDO::PARAM_STR);
        $stmt->bindValue(':rubrique', $this->rubrique, PDO::PARAM_STR);
        $stmt->bindValue(':lieu', $this->lieu, PDO::PARAM_STR);
        $stmt->bindValue(':departement', $this->departement, PDO::PARAM_STR);
        $stmt->bindValue(':description', $this->description, PDO::PARAM_STR);
        $stmt->bindValue(':visuel', $this->visuel, PDO::PARAM_STR);
        $stmt->execute();
    }

    public function delete()
    {
        $sql = "DELETE actua, imgs, entr, oeuvres
                FROM
                  `actualites` AS actua
                LEFT JOIN `actualites_images` AS imgs
                  ON imgs.id_actualite = actua.id
                LEFT JOIN `actualites_entreprises` AS entr
                  ON entr.id_actualite = actua.id
                LEFT JOIN `actualites_ouvrages` AS oeuvres
                  ON oeuvres.id_actualite = actua.id
                WHERE
                  actua.id = :id
                 ;";
        $stmt = DB::$pdo->prepare($sql);
        $stmt->bindValue(':id', $this->id, PDO::PARAM_INT);
        $stmt->execute();
    }

    public function createImage($img)
    {
        $img->id_actualite = $this->id;
        $img->create();
    }

    public function createOuvrage($oeuvre)
    {
        $oeuvre->id_actualite = $this->id;
        $oeuvre->create();
    }

    public function createEntreprise($entr)
    {
        $entr->id_actualite = $this->id;
        $entr->create();
    }

    public function readImages()
    {
        return ActualitesImage::readImages($this);
    }

    public function readOuvrages()
    {
        return ActualitesOuvrage::readOuvrages($this);
    }

    public function readEntreprises()
    {
        return ActualitesEntreprise::readEntreprises($this);
    }

    public static function readAll($offset = 0, $count = PHP_INT_MAX)
    {
        $sql = "SELECT
                  `id`,
                  `date`,
                  `architecte`,
                  `realisation`,
                  `rubrique`,
                  `lieu`,
                  `departement`,
                  `description`,
                  `visuel`
                FROM
                  `actualites`
                LIMIT :offset, :count
                ;";
        $stmt = DB::$pdo->prepare($sql);
        $stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
        $stmt->bindValue(':count', $count, PDO::PARAM_INT);
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $actus = [];
        foreach ($data as $row) {
            $actu = new Actualite($row["id"], $row["date"], $row["architecte"],
                    $row["realisation"], $row["rubrique"], $row["lieu"],
                    $row["departement"], $row["description"], $row["visuel"]);
            $actus[] = $actu;
        }
        return $actus;
    }

}
