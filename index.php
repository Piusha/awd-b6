<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);


//include_once('./core/MongoConnector.php');
include_once('./core/MySqlConnector.php');



$mysql = new MySqlConnector\Conector();
//$mongo = new MongoConnector\Conector();

////$mysql->con = "MYSQL CONNECTION  ";

$mysql->getConnetion();
echo "<br/>";

//echo "OUTSIDE THE CLASS  ".$mysql->con;