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
 * Description of Revue
 *
 * @author anathea
 */
class Revue {

    public $id;
    public $date;
    public $numero;
    public $visibilite;

    public function __construct($id = -1, $date = null, $numero = null, $visibilite = 1)
    {
        $this->id = $id;
        $this->date = $date;
        $this->numero = $numero;
        $this->visibilite = $visibilite;
    }

    public function create()
    {
        $sql = "INSERT INTO `revues`
                  (`date`, `numero`, `visibilite`)
                VALUES
                  (:date, :numero, :visibilite)
                ;";
        $stmt = DB::$pdo->prepare($sql);
        $stmt->bindValue(':date', $this->date, PDO::PARAM_INT);
        $stmt->bindValue(':numero', $this->numero, PDO::PARAM_INT);
        $stmt->bindValue(':visibilite', $this->visibilite, PDO::PARAM_INT);
        $stmt->execute();
        if ($stmt->errorCode() !== '00000') {
            die('Truc');
        }
        $this->id = DB::$pdo->lastInsertId();
    }

    public function read()
    {
        $sql = "SELECT
                  `date`,
                  `numero`,
                  `visibilite`
                FROM
                  `revues`
                WHERE
                  `id` = :id
                  ;";
        $stmt = DB::$pdo->prepare($sql);
        $stmt->bindValue(':id', $this->id, PDO::PARAM_INT);
        $stmt->execute();
        $data = $stmt->fetch(PDO::FETCH_ASSOC);
        $this->date = $data["date"];
        $this->numero = $data["numero"];
        $this->visibilite = $data["visibilite"];
    }

    public function update()
    {
        $sql = "UPDATE
                  `revues`
                SET
                  `date`= :date,
                  `numero` = :numero,
                  `visibilite` = :visibilite
                WHERE
                  `id` = :id
                ;";
        $stmt = DB::$pdo->prepare($sql);
        $stmt->bindValue(':id', $this->id, PDO::PARAM_INT);
        $stmt->bindValue(':date', $this->date, PDO::PARAM_INT);
        $stmt->bindValue(':numero', $this->numero, PDO::PARAM_INT);
        $stmt->bindValue(':visibilite', $this->visibilite, PDO::PARAM_INT);
        $stmt->execute();
    }

    public function delete()
    {
        $sql = "DELETE rev, rr
                FROM
                  `revues` AS rev
                LEFT JOIN `revues_regions` AS rr
                  ON rr.id_revue = rev.id
                WHERE
                  rev.id = :id
                ;";
        $stmt = DB::$pdo->prepare($sql);
        $stmt->bindValue(':id', $this->id, PDO::PARAM_INT);
        $stmt->execute();
    }

    public function readRegions()
    {
        return RevueRegion::readRegions($this);
    }

    public static function readAll($offset = 0, $count = PHP_INT_MAX)
    {
        $sql = "SELECT
                  `id`,
                  `date`,
                  `numero`,
                  `visibilite`
                FROM
                  `revues`
                LIMIT :offset, :count
                ;";
        $stmt = DB::$pdo->prepare($sql);
        $stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
        $stmt->bindValue(':count', $count, PDO::PARAM_INT);
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $revs = [];
        foreach ($data as $row) {
            $rev = new Revue($row["id"], $row["date"], $row["numero"], $row["visibilite"]);
            $revs[] = $rev;
        }
        return $revs;
    }

}
