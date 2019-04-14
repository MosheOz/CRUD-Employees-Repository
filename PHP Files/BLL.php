<?php

require_once 'DAL.php';
require_once 'Employee.php';


function getEmployees() {
    $sql = "SELECT firstName, lastName, country, city FROM employees";
    $employees = select($sql);
    
    foreach ($employees as $e) {
        $oopEmployees[] = new Employee($e->firstName, $e->lastName, $e->country, $e->city);
    }
    return $oopEmployees;
}

function addEmployees($firstName, $lastName, $country, $city ) {
    $sql = "insert into employees(firstName, lastName, country, city) "
            . "values('$firstName', '$lastName', '$country', '$city')";
    
    insert($sql);
}

function deleteEmployees($employeeID) {
    $sql = "delete from employees where employeeID = $employeeID";
    delete($sql);
}

    

