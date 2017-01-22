<?php
/**
 * Created by PhpStorm.
 * User: Авнер
 * Date: 03.01.2017
 * Time: 13:30
 */

mysql_connect('localhost', 'root', '');
mysql_select_db('tasks') or die(mysql_error());