<?php
namespace Core;

class AutoLoader{

    private static $omitedFiles = ['.','..'];
    /**
     * Load Models 
     *
     * @return void
     */
    public static function requires($path){
		$files = scandir($path);
		
		
        foreach($files as $file){
			
            if(!in_array($file,AutoLoader::$omitedFiles)){
			   $fileName = $path."/".$file;
               require_once $fileName;
            }
        }
    }
}