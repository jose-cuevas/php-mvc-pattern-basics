<?php

require_once MODELS . "hobbiesModel.php";

$action = "";

if (isset($_GET['action'])){
    $action = $_GET['action'];
}

if (function_exists($action)){
    call_user_func($action, $_REQUEST);
}


// CONTROLLER FUNCTIONS

function getAllHobbies(){
    $hobbies = get();
    if (isset($hobbies)){
        require_once VIEWS . "/hobbie/hobbieDashboard.php";
    } else {
        errorMessage("Problems loading database");
    }
}

function errorMessage($errorMsg){
    require_once VIEWS . "/error/error.php";
}