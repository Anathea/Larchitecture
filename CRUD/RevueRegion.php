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
 * Description of RevueRegion
 *
 * @author anathea
 */
class RevueRegion {

    public $id;
    public $img;
    public $lien;
    public $revue;
    public $region;

    function __construct($id = -1, $img = null, $lien = null, $revue = null, $region = null) {
        $this->id = $id;
        $this->img = $img;
        $this->lien = $lien;
        $this->revue = $revue;
        $this->region = $region;
    }

    public function create()
    {
        $sql = "INSERT INTO `revues_regions`
                  (`id_revue`, `id_region`, `img`, `lien`)
                VALUES
                  (:id_revue, :id_region, :img, :lien)
                ;";
        $stmt = DB::$pdo->prepare($sql);
        $stmt->bindValue(':id_revue', $this->revue->id, PDO::PARAM_INT);
        $stmt->bindValue(':id_region', $this->region->id, PDO::PARAM_INT);
        $stmt->bindValue(':img', $this->img, PDO::PARAM_STR);
        $stmt->bindValue(':lien', $this->lien, PDO::PARAM_STR);
        $stmt->execute();
        $this->id = DB::$pdo->lastInsertId();
    }

    public function read()
    {
        $sql = "SELECT
                  rr.id AS id,
                  rr.img AS img,
                  rr.lien AS lien,
                  rev.id AS rev_id,
                  rev.date AS rev_date,
                  rev.numero AS rev_num,
                  rev.visibilite AS rev_visibilite,
                  reg.id AS reg_id,
                  reg.nom AS reg_nom
                FROM
                  revues_regions AS rr
                INNER JOIN revues AS rev
                  ON rev.id = rr.id_revue
                INNER JOIN regions AS reg
                  ON reg.id = rr.id_region
                WHERE
                  rr.id = :id
                ;";
        $stmt = DB::$pdo->prepare($sql);
        $stmt->bindValue(':id', $this->id, PDO::PARAM_INT);
        $stmt->execute();
        $data = $stmt->fetch(PDO::FETCH_ASSOC);
        $this->revue = new Revue($data["rev_id"], $data["rev_date"], $data["rev_num"], $data["rev_visibilite"]);
        $this->region = new Region($data["reg_id"], $data["reg_nom"]);
        $this->img = $data["img"];
        $this->lien = $data["lien"];
    }

    public function update()
    {
        $sql = "UPDATE
                  `revues_regions`
                SET
                  `id_revue` = :id_revue,
                  `id_region` = :id_region,
                  `img` = :img,
                  `lien` = :lien
                WHERE
                  `id` = :id
                ;";
        $stmt = DB::$pdo->prepare($sql);
        $stmt->bindValue(':id', $this->id, PDO::PARAM_INT);
        $stmt->bindValue(':id_revue', $this->revue->id, PDO::PARAM_INT);
        $stmt->bindValue(':id_region', $this->region->id, PDO::PARAM_INT);
        $stmt->bindValue(':img', $this->img, PDO::PARAM_STR);
        $stmt->bindValue(':lien', $this->lien, PDO::PARAM_STR);
        $stmt->execute();
    }

    public function delete()
    {
        $sql = "DELETE FROM
                  `revues_regions`
                WHERE
                  `id` = :id
                LIMIT 1
                ;";
        $stmt = DB::$pdo->prepare($sql);
        $stmt->bindValue(':id', $this->id, PDO::PARAM_INT);
        $stmt->execute();
    }

    public static function readRegions($revue)
    {
        $sql = "SELECT
                  rr.id AS id,
                  rr.img AS img,
                  rr.lien AS lien,
                  reg.id AS reg_id,
                  reg.nom AS reg_nom
                FROM
                  revues_regions AS rr
                INNER JOIN regions AS reg
                  ON reg.id = rr.id_region
                WHERE
                  rr.id_revue = :id
                ;";
        $stmt = DB::$pdo->prepare($sql);
        $stmt->bindValue(':id', $revue->id, PDO::PARAM_INT);
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $revue_regions = [];
        foreach ($data as $row) {
            $region = new Region($row["reg_id"], $row["reg_nom"]);
            $revue_region = new RevueRegion($row["id"], $row["img"], $row["lien"], $revue, $region);
            $revue_regions[] = $revue_region;
        }
        return $revue_regions;
    }

    public static function readRevues($region)
    {
        $sql = "SELECT
                  rr.id AS id,
                  rr.img AS img,
                  rr.lien AS lien,
                  rev.id AS rev_id,
                  rev.date AS rev_date,
                  rev.numero AS rev_num,
                  rev.visibilite AS rev_visibilite
                FROM
                  revues_regions AS rr
                INNER JOIN revues AS rev
                  ON rev.id = rr.id_revue
                WHERE
                  rr.id_region = :id
                ;";
        $stmt = DB::$pdo->prepare($sql);
        $stmt->bindValue(':id', $region->id, PDO::PARAM_INT);
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $region_revues = [];
        foreach ($data as $row) {
            $revue = new Revue($row["rev_id"], $row["rev_date"], $row["rev_num"], $row["rev_visibilite"]);
            $region_revue = new RevueRegion($row["id"], $row["img"], $row["lien"], $revue, $region);
            $region_revues[] = $region_revue;
        }
        return $region_revues;
    }

}
