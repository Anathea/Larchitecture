<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace CRUD;

use \PDO;
use \CRUD\DB;

/**
 * Description of ActualitesOuvrage
 *
 * @author anathea
 */
class ActualitesOuvrage {

    public $id;
    public $nom;
    public $description;
    public $id_actualite;

    public function __construct($id = -1, $nom = null, $description = null, $id_actualite = null)
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->description = $description;
        $this->id_actualite = $id_actualite;
    }

    public function create()
    {
        $sql = "INSERT INTO `actualites_ouvrages`
                  (`nom`, `description`, `id_actualite`)
                VALUES
                  (:nom, :description, :id_actualite)
                ;";
        $stmt = DB::$pdo->prepare($sql);
        $stmt->bindValue(':nom', $this->nom, PDO::PARAM_STR);
        $stmt->bindValue(':description', $this->description, PDO::PARAM_STR);
        $stmt->bindValue(':id_actualite', $this->id_actualite, PDO::PARAM_INT);
        $stmt->execute();
        $this->id = DB::$pdo->lastInsertId();
    }

    public function read()
    {
        $sql = "SELECT
                  `nom`,
                  `description`,
                  `id_actualite`
                FROM
                  `actualites_ouvrages`
                WHERE
                  `id` = :id
                  ;";
        $stmt = DB::$pdo->prepare($sql);
        $stmt->bindValue(':id', $this->id, PDO::PARAM_INT);
        $stmt->execute();
        $data = $stmt->fetch(PDO::FETCH_ASSOC);
        $this->nom = $data["nom"];
        $this->description = $data["description"];
        $this->id_actualite = $data["id_actualite"];
    }

    public function update()
    {
        $sql = "UPDATE
                  `actualites_ouvrages`
                SET
                  `nom` = :nom,
                  `description` = :description,
                  `id_actualite` = :id_actualite
                WHERE
                  `id` = :id
                ;";
        $stmt = DB::$pdo->prepare($sql);
        $stmt->bindValue(':id', $this->id, PDO::PARAM_INT);
        $stmt->bindValue(':nom', $this->nom, PDO::PARAM_STR);
        $stmt->bindValue(':description', $this->description, PDO::PARAM_STR);
        $stmt->bindValue(':id_actualite', $this->id_actualite, PDO::PARAM_INT);
        $stmt->execute();
    }

    public function delete()
    {
        $sql = "DELETE FROM
                  `actualites_ouvrages`
                WHERE
                  `id` = :id
                LIMIT 1
                ;";
        $stmt = DB::$pdo->prepare($sql);
        $stmt->bindValue(':id', $this->id, PDO::PARAM_INT);
        $stmt->execute();
    }

    public static function readOuvrages($actu)
    {
        $sql = "SELECT
                  `id`,
                  `nom`,
                  `description`,
                  `id_actualite`
                FROM
                  `actualites_ouvrages`
                WHERE
                  `id_actualite` = :id
                  ;";
        $stmt = DB::$pdo->prepare($sql);
        $stmt->bindValue(':id', $actu->id, PDO::PARAM_INT);
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $oeuvres = [];
        foreach ($data as $row) {
            $oeuvre = new ActualitesOuvrage($row["id"], $row["nom"], $row["description"], $row["id_actualite"]);
            $oeuvres[] = $oeuvre;
        }
        return $oeuvres;
    }

}
