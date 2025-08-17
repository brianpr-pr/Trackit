<?php
spl_autoload_register(function($className){
    $generalPath = "./classes";
    include_once "$generalPath/$className.php";
});