<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once 'Core/AutoLoader.php';


Core\AutoLoader::requires('Config');
Core\AutoLoader::requires('Lib');
Core\AutoLoader::requires('Core');

Core\AutoLoader::requires(CONTROLLER_PATH);


new Core\Bootstrap();
?>
