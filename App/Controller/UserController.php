<?php
namespace Controller;

use Model\User;
use Core\Controller;

class UserController extends Controller{


	private $user = null;
	public function __construct(){
		$this->user = new User();
	}
	public function index(){
		
		$this->view->users = $this->user->getALlUsers();
		$this->render('user/index');
	}

	public function findById($id){
		print_r($this->user->getUserById($id));
	}
}