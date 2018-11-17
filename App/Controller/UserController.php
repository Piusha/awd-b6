<?php
namespace Controller;

class UserController{


	// public function __construct(){
	// 	echo "THIS HomeController";
	// }
	public function index(){
		echo 'this is UserController INDEX';
	}

	public function list($id){
		echo "this is list function---> $id";
	}
}