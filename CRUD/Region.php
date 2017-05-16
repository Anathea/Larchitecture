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
        $sql = "DELETE FROM
                  `regions`
                WHERE
                  `id` = :id
                LIMIT 1
                ;";
        $stmt = DB::$pdo->prepare($sql);
        $stmt->bindValue(':id', $this->id, PDO::PARAM_INT);
        $stmt->execute();
    }

}
