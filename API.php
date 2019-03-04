<?php

require_once "BLL.php";
require_once "Error.php";

$command = $_GET["command"];

switch ($command) {
    
    case "getEmployees":
        
        $employees = getEmployees();
        echo json_encode($employees);
        break;
    
    case "addEmployees":
        
        $firstName = $_REQUEST["firstName"];
        $lastName = $_REQUEST["lastName"];
        $country = $_REQUEST["country"];
        $city = $_REQUEST["city"];
        
        if ((($firstName) == null) || (!isset($firstName))) {
            $error = new Error("Missing First Name!", 400);
            echo json_encode($error);
            break;
        }
        if ((($lastName) == null) || (!isset($lastName))) {
            $error = new Error("Missing Last Name!", 400);
            echo json_encode($error);
            break;
        }
        
        addEmployees($firstName, $lastName, $country, $city );
        break;
    
    case "deleteEmployees":
        $employeeID= $_REQUEST["employeeID"];
        deleteEmployees($employeeID);
        break;
}

