<?php
namespace Core;

abstract class View  {

	protected $layout = null;
	private $viewName =  null;
	
	public function render($viewName){

		$this->viewName = $viewName;

		$layoutName = VIEW_PATH."/layout/{$this->layout}.php";
		
		if(file_exists($layoutName)){

			require($layoutName);
		}
		
	}

	public function content(){
		require_once VIEW_PATH."/{$this->viewName}.php";
	}
}