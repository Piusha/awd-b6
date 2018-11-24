<?php
namespace Controller;

use Model\User;

class UserController{


	private $user = null;
	public function __construct(){
		$this->user = new User();
	}
	public function index(){


		echo "<pre>";
		print_r($this->user->getALlUsers());
		//echo 'this is UserController INDEX';
	}

	public function list($id){
		echo "this is list function---> $id";
	}
}