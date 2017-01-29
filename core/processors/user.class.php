<?php

/**
 * Created by PhpStorm.
 * User: kimtendu
 * Date: 25.01.2017
 * Time: 18:43
 */
class User
{
    private $userId;
    private $userName;
    private $userPassword;
    private $userEmail;
    private $userImage;
    private $userPhone;
    private $userActive;
    private $userRole;
    private $userSession;
    private $userCoursesList;
    private $pdo;
    private $test;

    public function __construct($pdo, $sessionId,$arrInput){
        $this->pdo = $pdo;
        $this->userSession= $sessionId;
        #$this->test = $arrInput;
        $this->userEmail= $arrInput['userEmail'];
        $this->userPassword = $arrInput['userPassword'];

        /*$this->userId = $arrInput['userId'];
        $this->userName = $arrInput['userName'];

        $this->userEmail= $arrInput['userEmail'];
        $this->userImage = $arrInput['userImage'];
        $this->userPhone= $arrInput['userPhone'];
        $this->userActive = $arrInput['userActive'];
        $this->userRole = $arrInput['userRole'];

        $this->userCoursesList= $arrInput['userCoursesList'];
        */
    }

    public function addUser(){
    }

    public static function getAllUsers() {

        return false;
    }

    public function deleteUser(){}

    public function isAuth(){
        $statement= $this->pdo->prepare("SELECT * FROM users WHERE password =:password AND email=:email");
        $statement->bindParam(':email', $this->userEmail, PDO::PARAM_INT);
        $statement->bindParam(':password', $this->userPassword, PDO::PARAM_INT);
        $statement->execute();
        $results=$statement->fetchAll(PDO::FETCH_ASSOC);
        $json=json_encode($results);
        return $json;




    }




}

/*
 * usage
 * User::getAllUsers();
 * $user = User::find(2323);
*/