<?php

//public  -- allow public access
//private  --access within class
//protected  -- cant access outside the class




//subclass              //base class
class Employee extends Person {
    
    const COMPANY_NAME = 'ACME';   //can never be change , it is constant
    
    public $jobTitle;
    private $jobNumber;
        
    public function __construct($jobTitle, $firstName, $lastName, $gender='f') {
        
        $this->jobTitle = $jobTitle;
        //echo self::COMPANY_NAME;   //need to use self to call const
        //echo parent::EYE_COLOR;  //from parent or base class
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
    
    const EYE_COLOR = 'brown';
    
    protected $firstName;
    public $lastName;
    public $gender;
    
    
    public function __construct($firstName, $lastName, $gender = 'f'){
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->gender = $gender;
        //echo self::EYE_COLOR;   //use self inside itself
    } 
    
    public function getGender(){
        return $this->gender;
    }
    
 
}

$jane = new Employee('backend developer', 'Jane', 'Fisher');

//echo Employee::COMPANY_NAME;  //call class name then constant and cannot change the value
echo Employee::EYE_COLOR;  //employee has access to person
echo "<br>";

echo "<br>";


echo "<br>";





?>