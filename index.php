<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once 'Core/MySqlConnection.php';
require_once 'Core/Model.php';
require_once 'Core/AutoLoader.php';
require_once 'Core/View.php';
require_once 'Core/Controller.php';
require_once 'Core/Bootstrap.php';


Core\AutoLoader::requires('Config');
Core\AutoLoader::requires('Lib');

Core\AutoLoader::requires(MODEL_PATH);
Core\AutoLoader::requires(CONTROLLER_PATH);


new Core\Bootstrap();
?>
