<?php
namespace Controller;
use Core\Controller;

class HomeController extends Controller{


	public function __construct(){
		parent::__construct();
	}
	public function index(){
		

		$this->render('home/index');
	}

	public function getAll(){
		

		$this->render('home/getAll');
	}
}