<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * One day... Maybe...
 */

namespace CRUD;

use \PDO;
use \CRUD\DB;

/**
 * Description of region
 *
 * @author anathea
 */
class Region {

    public $id;
    public $nom;

    public function __construct($id = -1, $nom = null)
    {
        $this->id = $id;
        $this->nom = $nom;
    }

    public function create()
    {
        $sql = "INSERT INTO `regions`
                  (`nom`)
                VALUES
                  (:nom)
                ;";
        $stmt = DB::$pdo->prepare($sql);
        $stmt->bindValue(':nom', $this->nom, PDO::PARAM_STR);
        $stmt->execute();
        $this->id = DB::$pdo->lastInsertId();
    }

    public function read()
    {
        $sql = "SELECT
                  `nom`
                FROM
                  `regions`
                WHERE
                  `id` = :id
                  ;";
        $stmt = DB::$pdo->prepare($sql);
        $stmt->bindValue(':id', $this->id, PDO::PARAM_INT);
        $stmt->execute();
        $data = $stmt->fetch(PDO::FETCH_ASSOC);
        $this->nom = $data["nom"];
    }

    public function update()
    {
        $sql = "UPDATE
                  `regions`
                SET
                  `nom`= :nom
                WHERE
                  `id` = :id
                ;";
        $stmt = DB::$pdo->prepare($sql);
        $stmt->bindValue(':id', $this->id, PDO::PARAM_INT);
        $stmt->bindValue(':nom', $this->nom, PDO::PARAM_STR);
        $stmt->execute();
    }

    public function delete()
    {
        $sql = "DELETE reg, rr, part
                FROM
                  `regions` AS reg
                LEFT JOIN `revues_regions` AS rr
                  ON rr.id_region = reg.id
                LEFT JOIN `partenaires` AS part
                  ON part.id_region = reg.id
                WHERE
                  reg.id = :id
                ;";
        $stmt = DB::$pdo->prepare($sql);
        $stmt->bindValue(':id', $this->id, PDO::PARAM_INT);
        $stmt->execute();
    }

    public function createPartenaire($part)
    {
        $part->id_region = $this->id;
        $part->create();
    }

    public function readPartenaires()
    {
        return Partenaire::readPartenaires($this);
    }

    public function readRevues()
    {
        return RevueRegion::readRevues($this);
    }

    public static function readAll($offset = 0, $count = PHP_INT_MAX)
    {
        $sql = "SELECT
                  `id`,
                  `nom`
                  FROM
                  `regions`
                  LIMIT :offset, :count
                  ;";
        $stmt = DB::$pdo->prepare($sql);
        $stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
        $stmt->bindValue(':count', $count, PDO::PARAM_INT);
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $regs = [];
        foreach ($data as $row) {
            $reg = new Region($row["id"], $row["nom"]);
            $regs[] = $reg;
        }
        return $regs;
    }

}
