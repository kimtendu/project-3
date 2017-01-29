<?php
/**
 * Created by PhpStorm.
 * User: Авнер
 * Date: 25.01.2017
 * Time: 19:16
 */

/*
$host = 'localhost';
$user = 'root';
$db = 'school';
$pass='';
$charset= 'UTF8';
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$opt = array(
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
);
$pdo = new PDO($dsn, $user, $pass, $opt);


$statement=$pdo->prepare("SELECT * FROM course");
$statement->execute();
$results=$statement->fetchAll(PDO::FETCH_ASSOC);
$json=json_encode($results);
 echo $json;

*/
echo'<pre>';
print_r ($_POST);
echo '</pre>';
#echo $_SERVER['REQUEST_FILENAME'];