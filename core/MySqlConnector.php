<?php
namespace Core\MySqlConnector;

class Connector{

	private $con = null;

	protected $table_name = "";

	function __construct(){
		echo "This is MySqlConnector<br/>";
	}
	private function prepareConnection(){

		echo "PREPARING THE CONNECTION ..... <br/>";

		$this->con = "MYSQL_CONNECTION";
	}

	protected function getConnection(){

		$this->prepareConnection();

		return $this->con;
	}

	public function getDBQuery(){


		return "SELECT * FROM {$this->table_name}";
	}

	public function getTableName(){
		
		return $this->table_name;
	}
}