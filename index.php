<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);


//require_once('MongoConnector.php');
//require_once('MySqlConnector.php');
include_once('./core/MongoConnector.php');
include_once('./core/MySqlConnector.php');



$mysql = new MySqlConnector\Conector();
$mongo = new MongoConnector\Conector();

echo $mysql->connect();