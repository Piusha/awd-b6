<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once 'Core/AutoLoader.php';
Core\AutoLoader::requires('Config');


$routs = $_GET['url'];

$explodedUrl = explode('/',$routs);
echo "<pre>";
print_r($explodedUrl);

// 
// Framework\AutoLoader::requires('framework/core');
// Framework\AutoLoader::requires('framework/models');
// $userObj = new Model\User();
// $userList = $userObj->getAllUsers();

?>
