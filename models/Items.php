<?php
namespace Model;
use Core\MySqlConnector\Connector;


class Items extends Connector{


	protected $table_name ="items";

	function __construct(){
		//echo "THIS IS USER CLASS <br/>";

		//echo $this->getConnetion();
	}

}