<?php
/**
 * This is my sql connection class that create connection with mysql database
 */
namespace Core;
use \PDO;
abstract class MySqlConnection{
    private $conn = null;
	private $statement = null;
	
	private static function prepareConnectionString(){
        $servername     = DB_HOST;
        $dbname         = DB_NAME;
        return "mysql:host=$servername;dbname=$dbname";
    }

	protected function getConnection(){
		$username       = DB_USER_NAME;
        $password       = DB_PASSWORD;
        try {
            $this->conn = new PDO(self::prepareConnectionString(), $username, $password);
            // set the PDO error mode to exception
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return true;
        }
        catch(PDOException $e){
            echo "Error: " . $e->getMessage();
        }
        return false;
	}
	/**
     * Prepare mysql statement
     * @param $query
     */
    protected  function preapareStatement($query){

        $this->statement = $this->conn->prepare($query); 
        $this->statement->execute();
	}
	
    protected function fetchData($entity = null){
        if($entity == null){
            $this->statement->setFetchMode(PDO::FETCH_ASSOC); 
            return $this->statement->fetchAll();
        }
        return $this->statement->fetchAll(PDO::FETCH_CLASS,$entity);
    }


} 