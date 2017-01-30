<?php
/**
 * Created by PhpStorm.
 * User: Авнер
 * Date: 25.01.2017
 * Time: 19:16
 */
require_once('core/connectors.php');
require_once('core/processors/require.php');

$name= 'kimtendu@list.ru';
$pass = '123456';

$statement= $pdo->prepare("SELECT * FROM users WHERE email=:email AND password =:password");
$statement->bindParam(':email', $name);
$statement->bindParam(':password', $pass);
$statement->execute();
$results=$statement->fetchAll(PDO::FETCH_ASSOC);
$json=json_encode($results);

echo'<pre>';
print_r ($results['0']['name']);
echo '</pre>';
#echo $_SERVER['REQUEST_FILENAME'];