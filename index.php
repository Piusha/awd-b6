<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);


//include_once('./core/MongoConnector.php');
include_once('./core/MySqlConnector.php');

//include Model classes

include_once('./models/User.php');
include_once('./models/Items.php');

// $mysql = new MySqlConnector\Conector();
// //$mongo = new MongoConnector\Conector();

// ////$mysql->con = "MYSQL CONNECTION  ";

// $mysql->getConnetion();
// echo "<br/>";

// //echo "OUTSIDE THE CLASS  ".$mysql->con;


$user = new Model\User();

echo "<br/>";
echo "<br/>";
echo $user->getDBQuery();


echo "<br/>";
echo "<br/>";
echo $user->getTableName();
//echo $user->getConnection();
//echo "<br/>";
$items = new Model\Items();

echo "<br/>";
echo "<br/>";
echo $items->getDBQuery();


echo "<br/>";
echo "<br/>";
echo $items->getTableName();

