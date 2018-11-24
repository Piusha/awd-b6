<?php
/**
 * Base model class
 */
namespace Core;

use Core\MySqlConnection;


abstract class Model extends MySqlConnection{

	protected $table = null;
	protected $select = '*';
	protected $where = null;
	

	function __construct(){
		$this->getConnection();
	}

	protected function select($select = '*'){
        $this->select = $select;
        return $this;
	}



	protected function where($where){

	
		if($where != null){
            $this->where = "WHERE {$where}";
        }
        
        return $this;
	}
	private function prepareSelectQuery(){

		$query =  "SELECT  
                {$this->select}  FROM  
				{$this->table} {$this->where}";
				
        return $query;
	}

	public function find(){
        $this->preapareStatement($this->prepareSelectQuery());
        return $this->fetchData();
    }
	



}