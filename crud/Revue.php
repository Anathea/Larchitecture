<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

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
        $sql = "DELETE FROM
                  `revues`
                WHERE
                  `id` = :id
                LIMIT 1
                ;";
        $stmt = DB::$pdo->prepare($sql);
        $stmt->bindValue(':id', $this->id, PDO::PARAM_INT);
        $stmt->execute();
    }

}
