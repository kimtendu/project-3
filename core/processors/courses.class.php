<?php
/**
 * Created by PhpStorm.
 * User: Авнер
 * Date: 25.01.2017
 * Time: 19:04
 */

class Courses
{
    private $courceId;
    private $courceName;
    private $courseDescription;
    private $courseImg;
    private $pdo;

    public function __construct($pdo,$id){
        $this->pdo = $pdo;
        $this->id = $id;
    }

    public function getAllCource(){
        $statement= $this->pdo->prepare("SELECT * FROM course");
        $statement->execute();
        $results=$statement->fetchAll(PDO::FETCH_ASSOC);
        $json=json_encode($results);
        return $json;
    }

    public function getCourceById(){
        $statement= $this->pdo->prepare("SELECT * FROM course WHERE id =:id  ");
        $statement->bindParam(':id', $this->id, PDO::PARAM_INT);
        $statement->execute();
        $results=$statement->fetchAll(PDO::FETCH_ASSOC);
        $json=json_encode($results);
        return $json;
    }

    public function addCource(){}

    public function activateCource(){}

    public function deActivateCource(){}


}