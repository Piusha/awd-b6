<?php
namespace Core\MySqlConnector;
use \PDO;

class Connector{
	private $con = null;

	private static function prepareConnectionString(){
		$servername     = DB_HOST;
        $dbname         = DB_NAME;
        return "mysql:host=$servername;dbname=$dbname";
	}

	private function prepareConnection(){

		$username       = DB_USER_NAME;
        $password       = DB_PASSWORD;
        try {
            $this->con = new PDO(self::prepareConnectionString(), $username, $password);
            // set the PDO error mode to exception
            $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return true;
        }
        catch(PDOException $e){
            echo "Error: " . $e->getMessage();
        }
        return false;
	}

	protected function getConnection(){

		$this->prepareConnection();

		return $this->con;
	}

	public function preapareStatement($query){
        $this->statement = $this->con->prepare($query); 
        $this->statement->execute();
	}
	
    public function fetchData($entity = null){
        if($entity == null){
            $this->statement->setFetchMode(PDO::FETCH_ASSOC); 
            return $this->statement->fetchAll();
        }
        return $this->statement->fetchAll(PDO::FETCH_CLASS,$entity);
    }
}