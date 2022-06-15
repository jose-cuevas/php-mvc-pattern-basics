<?php

require_once "config/constants.php";
require_once "config/db.php";

if (isset($_GET['controller'])){
    $controllerPath = CONTROLLERS . $_GET['controller'] . "Controller.php";
    // echo $controllerPath;
    
    if (file_exists($controllerPath)){
        require_once $controllerPath; 
    } 
    else {
        $errorMsg = "This web page doesn´t exist";
        require_once VIEWS . "error/error.php";
    }

} else {
    require_once VIEWS . "main/main.php";
}

