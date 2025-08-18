<?php    
spl_autoload_register(function($className){
    $arrPaths = ["./classes/","./classes/database/"];
    foreach($arrPaths as $path){
        if(file_exists($path.$className.".php")){
            include $path.$className.".php";
        }
    }
});