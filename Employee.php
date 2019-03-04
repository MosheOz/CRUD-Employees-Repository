<?php

class Employee {
    public $firstName;
    public $lastName;
    public $country;
    public $city;
    public $employeeID;


    public function __construct($firstName, $lastName, $country, $city) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->country = $country;
        $this->city = $city;
    }   
}