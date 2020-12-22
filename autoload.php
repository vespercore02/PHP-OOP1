<?php 

spl_autoload_register(function($class){

    //include_once str_replace("\\","/",$class). ".php";

    $path = "includes/";
    $extension = ".php";
    $fullpath = $path . $class . $extension;

    if (!file_exists($fullpath)) {
        # code...
        return false;
    }

    include_once $fullpath;
});

?>