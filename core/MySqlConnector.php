<?php
namespace MySqlConnector;
class Conector{

	function __construct(){
		echo "This is MySqlConnector<br/>";
	}

	public function connect(){
		return "connect";
	}
}