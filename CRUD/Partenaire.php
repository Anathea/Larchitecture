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
 * Description of Partenaire
 *
 * @author anathea
 */
class Partenaire {

    public $id;
    public $nom;
    public $libelle;
    public $id_region;
    public $departement;
    public $site;

    public function __construct($id = -1, $nom = null, $libelle = null, $id_region = null, $departement = null, $site = null)
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->libelle = $libelle;
        $this->id_region = $id_region;
        $this->departement = $departement;
        $this->site = $site;
    }

    public function create()
    {
        $sql = "INSERT INTO `partenaires`
                  (`nom`, `libelle`, `id_region`, `departement`, `site`)
                VALUES
                  (:nom, :libelle, :id_region, :departement, :site)
                ;";
        $stmt = DB::$pdo->prepare($sql);
        $stmt->bindValue(':nom', $this->nom, PDO::PARAM_STR);
        $stmt->bindValue(':libelle', $this->libelle, PDO::PARAM_STR);
        $stmt->bindValue(':id_region', $this->id_region, PDO::PARAM_INT);
        $stmt->bindValue(':departement', $this->departement, PDO::PARAM_STR);
        $stmt->bindValue(':site', $this->site, PDO::PARAM_STR);
        $stmt->execute();
        $this->id = DB::$pdo->lastInsertId();
    }

    public function read()
    {
        $sql = "SELECT
                  `nom`,
                  `libelle`,
                  `id_region`,
                  `departement`,
                  `site`
                FROM
                  `partenaires`
                WHERE
                  `id` = :id
                  ;";
        $stmt = DB::$pdo->prepare($sql);
        $stmt->bindValue(':id', $this->id, PDO::PARAM_INT);
        $stmt->execute();
        $data = $stmt->fetch(PDO::FETCH_ASSOC);
        $this->nom = $data["nom"];
        $this->libelle = $data["libelle"];
        $this->id_region = $data["id_region"];
        $this->departement = $data["departement"];
        $this->site = $data["site"];
    }

    public function update()
    {
        $sql = "UPDATE
                  `partenaires`
                SET
                  `nom`= :nom,
                  `libelle` = :libelle,
                  `id_region` = :id_region,
                  `departement` = :departement,
                  `site` = :site
                WHERE
                  `id` = :id
                ;";
        $stmt = DB::$pdo->prepare($sql);
        $stmt->bindValue(':id', $this->id, PDO::PARAM_INT);
        $stmt->bindValue(':nom', $this->nom, PDO::PARAM_STR);
        $stmt->bindValue(':libelle', $this->libelle, PDO::PARAM_STR);
        $stmt->bindValue(':id_region', $this->id_region, PDO::PARAM_INT);
        $stmt->bindValue(':departement', $this->departement, PDO::PARAM_STR);
        $stmt->bindValue(':site', $this->site, PDO::PARAM_STR);
        $stmt->execute();
    }

    public function delete()
    {
        $sql = "DELETE FROM
                  `partenaires`
                WHERE
                  `id` = :id
                LIMIT 1
                ;";
        $stmt = DB::$pdo->prepare($sql);
        $stmt->bindValue(':id', $this->id, PDO::PARAM_INT);
        $stmt->execute();
    }

    public static function readPartenaires($region)
    {
        $sql = "SELECT
                  `nom`,
                  `libelle`,
                  `id_region`,
                  `departement`,
                  `site`
                FROM
                  `partenaires`
                WHERE
                  `id_region` = :id
                  ;";
        $stmt = DB::$pdo->prepare($sql);
        $stmt->bindValue(':id', $region->id, PDO::PARAM_INT);
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $partenaires = [];
        foreach ($data as $row) {
            $partenaires[] = new Partenaire($row["nom"], $row["libelle"], $row["id_region"], $row["departement"], $row["site"]);
        }
        return $partenaires;
    }
    
    public static function readAll($offset = 0, $count = PHP_INT_MAX)
    {
        $sql = "SELECT
                  `id`,
                  `nom`,
                  `libelle`,
                  `id_region`,
                  `departement`,
                  `site`
                  FROM
                  `partenaires`
                  LIMIT :offset, :count
                  ;";
        $stmt = DB::$pdo->prepare($sql);
        $stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
        $stmt->bindValue(':count', $count, PDO::PARAM_INT);
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $partenaires = [];
        foreach ($data as $row) {
            $partenaire = new Partenaire($row["id"], $row["nom"], $row["libelle"], $row["id_region"], $row["departement"], $row["site"]);
            $partenaires[] = $partenaire;
        }
        return $partenaires;
    }

}
