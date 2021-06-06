<?php

//public  -- allow public access
//private  --access within class
//protected  -- cant access outside the class




//subclass              //base class
class Employee extends Person {
    
    private $jobTitle;
    private $jobNumber;
        
    public function __construct($jobTitle, $firstName, $lastName, $gender='f') {
        
        $this->jobTitle = $jobTitle;
        
        parent::__construct($firstName, $lastName, $gender);
        
    }
    
    public function __set($name, $value) {
        $this->$name = ucfirst($value);
    }
    
    
    public function __get($name) {
        return $this->$name;
    }
    
    
    public function sayHello() {
        $message =  "Hello my name is " . $this->firstName . " " . $this->lastName . "<br>";
        
        $message .= "My job title is " . $this->jobTitle;
        
        return $message;
    }
    
}

//base class
class Person {
    
    protected $firstName;
    public $lastName;
    public $gender;
    
    
    public function __construct($firstName, $lastName, $gender = 'f'){
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->gender = $gender;
    } 
    
    public function getGender(){
        return $this->gender;
    }
    
 
}

$jane = new Employee('backend developer', 'Jane', 'Fisher');
$jane->jobTitle = 'Tester';
echo $jane->jobTitle;

echo "<br>";
$jane->jobNumber = 5;
echo $jane->jobNumber;

echo "<br>";


echo "<br>";





?>