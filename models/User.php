<?php

namespace Model;
use Core\MySqlConnector\Connector;


class User extends Connector{


	protected $table_name = "users";


	function __construct(){
		//echo "THIS IS USER CLASS <br/>";

		//echo $this->getConnection();
	}

}