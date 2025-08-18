<?php 
//This function get triggered whenever we instanciate a object
spl_autoload_register(function($className){
    //We save full path to corrent working directory
    $originalDirectory = getcwd();
    //path to our current working directory in case we are already in root folder
    $pathRoot ="./";
    //Statement to check if we are in our 'root' folder
    if(basename(path: getcwd())  !== "trackit"){
        while(basename(path: getcwd()) !== "trackit"){
            //for each iteration we add two dots until we get to root directory
            $pathRoot .= "../";
            //And we move upwards
            chdir("./..");
        }
    }
    //We move back again to the original directory from where this script was included
    chdir(directory: $originalDirectory);
    //array with folders that contain the classes files of our proyect
    $arrPaths = ["$pathRoot"."classes/","$pathRoot"."classes/database/"];
    foreach($arrPaths as $path){
        //we chechk if the file exists
        if(file_exists($path.$className.".php")){
            //If found it will get included
            include $path.$className.".php";
        }
    }
});
