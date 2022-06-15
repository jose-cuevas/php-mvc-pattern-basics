<?php

require_once MODELS . "employeeModel.php";

$action = "";
if (isset($_GET['action'])){
    $action =  $_GET['action'];
}

if (function_exists($action)){
    call_user_func($action, $_REQUEST);
}else{
    errorMessage("This action doesn´t exit");    
}

// CONTROLLER FUNCTIONS

function getAllEmployees()
{
    $employees = get();
    if (isset($employees)){
        require_once VIEWS . "/employee/employeeDashboard.php";
    } else {
        errorMessage("Database loading problems");
    }
}

function errorMessage($errorMsg)
{
    require_once VIEWS . "/error/error.php";
}