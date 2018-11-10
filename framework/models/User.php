<?php

namespace Model;
use Core\MySqlConnector\Connector;


class User extends Connector{


	protected $table_name = "users";


	function __construct(){
		$this->getConnection();
	}


	public function getAllUsers(){
		$this->preapareStatement("SELECT * FROM users");
		return $this->fetchData();
	}

}