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
 * Description of ActualitesImage
 *
 * @author anathea
 */
class ActualitesImage {

    public $id;
    public $image;
    public $id_actualite;

    public function __construct($id = -1, $image = null, $id_actualite = null)
    {
        $this->id = $id;
        $this->image = $image;
        $this->id_actualite = $id_actualite;
    }

    public function create()
    {
        $sql = "INSERT INTO `actualites_images`
                  (`image`, `id_actualite`)
                VALUES
                  (:image, :id_actualite)
                ;";
        $stmt = DB::$pdo->prepare($sql);
        $stmt->bindValue(':image', $this->image, PDO::PARAM_STR);
        $stmt->bindValue(':id_actualite', $this->id_actualite, PDO::PARAM_INT);
        $stmt->execute();
        $this->id = DB::$pdo->lastInsertId();
    }

    public function read()
    {
        $sql = "SELECT
                  `id`,
                  `image`,
                  `id_actualite`
                FROM
                  `actualites_images`
                WHERE
                  `id` = :id
                  ;";
        $stmt = DB::$pdo->prepare($sql);
        $stmt->bindValue(':id', $this->id, PDO::PARAM_INT);
        $stmt->execute();
        $data = $stmt->fetch(PDO::FETCH_ASSOC);
        $this->image = $data["image"];
        $this->id_actualite = $data["id_actualite"];
    }

    public function update()
    {
        $sql = "UPDATE
                  `actualites_images`
                SET
                  `id` = :id,
                  `image` = :image,
                  `id_actualite` = :id_actualite
                WHERE
                  `id` = :id
                ;";
        $stmt = DB::$pdo->prepare($sql);
        $stmt->bindValue(':id', $this->id, PDO::PARAM_INT);
        $stmt->bindValue(':image', $this->image, PDO::PARAM_STR);
        $stmt->bindValue(':id_actualite', $this->id_actualite, PDO::PARAM_INT);
        $stmt->execute();
    }

    public function delete()
    {
        $sql = "DELETE FROM
                  `actualites_images`
                WHERE
                  `id` = :id
                LIMIT 1
                ;";
        $stmt = DB::$pdo->prepare($sql);
        $stmt->bindValue(':id', $this->id, PDO::PARAM_INT);
        $stmt->execute();
    }

    public static function readImages($actu)
    {
        $sql = "SELECT
                  `id`,
                  `image`,
                  `id_actualite`
                FROM
                  `actualites_images`
                WHERE
                  `id_actualite` = :id
                  ;";
        $stmt = DB::$pdo->prepare($sql);
        $stmt->bindValue(':id', $actu->id, PDO::PARAM_INT);
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $imgs = [];
        foreach ($data as $row) {
            $img = new ActualitesImage($row["id"], $row["image"], $row["id_actualite"]);
            $imgs[] = $img;
        }
        return $imgs;
    }

}
