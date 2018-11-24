<?php
/**
 * User model
 */

namespace Model;
use Core\Model;

class User extends Model{

	protected $table = 'users';


	function __construct(){
		parent::__construct();
	}

	public function getAllUsers(){
		return $this->find();
	}

	public function getUserById($id){
		return $this->select('first_name,last_name')
		->where("first_name='{$id}'")->find();
	}
}