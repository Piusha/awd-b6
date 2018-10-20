<?php
namespace MySqlConnector;
class Conector{

	private $con = "CON";
	function __construct(){
		echo "This is MySqlConnector<br/>";
	}

	public function getConnetion(){
		echo "ACCESS INSIDE THE CLASS". $this->con;
	}
}