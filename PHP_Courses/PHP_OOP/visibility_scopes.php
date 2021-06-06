<?php

//public  -- allow public access
//private  --access within class
//protected  -- cant access outside the class




//subclass              //base class
class Employee extends Person {
    
    public $jobTitle;
    
    
    public function __construct($jobTitle, $firstName, $lastName, $gender='f') {
        //$this->jobTitle = $jobTitle;
        $this->setJobTitle($jobTitle);
        
        parent::__construct($firstName, $lastName, $gender);
        
    }
    
    public function getJobTitle() {
        return $this->jobTitle;
    }
    
    public function setJobTitle($jobTitle) {
        $this->jobTitle = ucfirst($jobTitle);  //uppercase
    }
    
    public function sayHello() {
        $message =  "Hello my name is " . $this->firstName . " " . $this->lastName . "<br>";
        
        $message .= "My job title is " . $this->jobTitle;
        
        return $message;
    }
    
}


//base class
class Person {
    
    public $firstName;
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

echo "<br>";
//echo $jane->sayHello();

echo $jane->firstName;
echo "<br>";





?>