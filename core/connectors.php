<?php
/**
 * Created by PhpStorm.
 * User: Kimtendu
 * Date: 03.01.2017
 * Time: 13:30
 */


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