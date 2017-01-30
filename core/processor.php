<?php
/**
 * Created by PhpStorm.
 * User: KimTenDu
 * Date: 03.01.2017
 * Time: 11:37
 */
ini_set('display_errors',1);
error_reporting(E_ALL);

require_once('connectors.php');
require_once('processors/require.php');

$tmpSessionId = session_id();
session_start();
$apiRequest = stristr( $_SERVER['REQUEST_URI'], 'core');



switch ($apiRequest){
    case 'core/auth/': //auth
        $_POST = json_decode(file_get_contents('php://input'), true);
        $arr = array(
            'userSession' => $_POST['userSession'],
        );
        $user = new User($pdo, $tmpSessionId, $arr);
        $out =  $user->isAuth();
        echo $out;


        break;

    case 'core/login/': //login user
        $_POST = json_decode(file_get_contents('php://input'), true);

        $arr = array(
            'userEmail' => $_POST['userEmail'],
            'userPassword' =>$_POST['userPassword'],
        );
        $user = new User($pdo, $tmpSessionId, $arr);
        $out =  $user->logIn();


        echo $out;

        break;


}






//echo session_id();
/*

#header('Content-Type: application/json');

#require_once('processors/auth.php');

$output=array(
    'error' => 'no data provided'
);

/*
Router::get('/api/hello/world', function() {

});

Router::post('/api/dsfsdf/', function () {

});




switch($_SERVER['REQUEST_METHOD']){

    case 'GET':
        //echo 'get it';
        #$_SESSION['login'] != TRUE;
        $classtest = new Courses($pdo, 1);
        $return = $classtest->getCourceById();
        echo $return;
        #if(isset($_SESSION['id'])) echo 'tteeeest';
        break;
    case 'POST':
        echo 'post it';
        break;
    case 'DELETE':
        echo 'del it';
        break;
    case 'PUT':
        echo 'put it down';
        break;
    default:
        echo 'errorrrr';
        break;


}

*/

