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
 * Description of ActualitesEntreprise
 *
 * @author anathea
 */
class ActualitesEntreprise {

    public $id;
    public $role;
    public $nom;
    public $id_actualite;

    public function __construct($id = -1, $role = null, $nom = null, $id_actualite = null)
    {
        $this->id = $id;
        $this->role = $role;
        $this->nom = $nom;
        $this->id_actualite = $id_actualite;
    }

    public function create()
    {
        $sql = "INSERT INTO `actualites_entreprises`
                  (`role`, `nom`, `id_actualite`)
                VALUES
                  (:role, :nom, :id_actualite)
                ;";
        $stmt = DB::$pdo->prepare($sql);
        $stmt->bindValue(':role', $this->role, PDO::PARAM_STR);
        $stmt->bindValue(':nom', $this->nom, PDO::PARAM_STR);
        $stmt->bindValue(':id_actualite', $this->id_actualite, PDO::PARAM_INT);
        $stmt->execute();
        $this->id = DB::$pdo->lastInsertId();
    }

    public function read()
    {
        $sql = "SELECT
                  `role`,
                  `nom`,
                  `id_actualite`
                FROM
                  `actualites_entreprises`
                WHERE
                  `id` = :id
                  ;";
        $stmt = DB::$pdo->prepare($sql);
        $stmt->bindValue(':id', $this->id, PDO::PARAM_INT);
        $stmt->execute();
        $data = $stmt->fetch(PDO::FETCH_ASSOC);
        $this->role = $data["role"];
        $this->nom = $data["nom"];
        $this->id_actualite = $data["id_actualite"];
    }

    public function update()
    {
        $sql = "UPDATE
                  `actualites_entreprises`
                SET
                  `role` = :role,
                  `nom` = :nom,
                  `id_actualite` = :id_actualite
                WHERE
                  `id` = :id
                ;";
        $stmt = DB::$pdo->prepare($sql);
        $stmt->bindValue(':id', $this->id, PDO::PARAM_INT);
        $stmt->bindValue(':role', $this->role, PDO::PARAM_STR);
        $stmt->bindValue(':nom', $this->nom, PDO::PARAM_STR);
        $stmt->bindValue(':id_actualite', $this->id_actualite, PDO::PARAM_INT);
        $stmt->execute();
    }

    public function delete()
    {
        $sql = "DELETE FROM
                  `actualites_entreprises`
                WHERE
                  `id` = :id
                LIMIT 1
                ;";
        $stmt = DB::$pdo->prepare($sql);
        $stmt->bindValue(':id', $this->id, PDO::PARAM_INT);
        $stmt->execute();
    }

    public static function readEntreprises($actu)
    {
        $sql = "SELECT
                  `id`,
                  `role`,
                  `nom`,
                  `id_actualite`
                FROM
                  `actualites_entreprises`
                WHERE
                  `id_actualite` = :id
                  ;";
        $stmt = DB::$pdo->prepare($sql);
        $stmt->bindValue(':id', $actu->id, PDO::PARAM_INT);
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $entrs = [];
        foreach ($data as $row) {
            $entr = new ActualitesEntreprise($row["id"], $row["role"], $row["nom"], $row["id_actualite"]);
            $entrs[] = $entr;
        }
        return $entrs;
    }

}
