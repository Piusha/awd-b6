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
		return $this->select('first_name,last_name')->find();
	}
}