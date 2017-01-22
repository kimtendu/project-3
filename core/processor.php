<?php
/**
 * Created by PhpStorm.
 * User: KimTenDu
 * Date: 03.01.2017
 * Time: 11:37
 */
ini_set('display_errors',1);
error_reporting(E_ALL);

#header('Content-Type: application/json');

#require_once('connectors.php');
#require_once('processors/auth.php');

$output=array(
    'error' => 'no data provided'
);
#echo ('hello world');
/*
if(!isset($_GET['id'])) {
    echo 'Error';
}
else {
    echo "Show post {$_GET['id']} - ";
    #$post = getPosts;
}

*/
switch($_SERVER['REQUEST_METHOD']){

    case 'GET':
        echo 'get it';
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
