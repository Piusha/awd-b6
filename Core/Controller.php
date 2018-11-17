<?php
namespace Core;
use Core\View;

abstract class Controller  extends View{

	protected $layout = 'mars';

	function __construct(){
		
	}
}