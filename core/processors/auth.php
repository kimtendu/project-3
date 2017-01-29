<?php
/**
 * Created by PhpStorm.
 * User: Авнер
 * Date: 03.01.2017
 * Time: 21:11
 */
/*
header('Content-Type: application/json');
$output = array();

#session_start();

if (isset($_SESSION['userID'])){
    $output = array('success' => 'logined');
}else{
    $output = array('success' => ' not logined');
}

echo json_encode($output);

*/

class Auth{
    private $sessionId;
    static $userid;

    public function __construct($pdo, $sessionId){
        $this->sessionId = $sessionId;

    }



}