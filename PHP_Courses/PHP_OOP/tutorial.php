<?php

//public  -- allow public access
//private  --access within class
//protected  -- cant access outside the class

//diff btw 
//static can be access without instantiate the class but const need to
//cannot use $this-> in static 
//best time to use static keyword is ??

//subclass              //base class
class Employee extends Person {
    
    static $employeeNumber = 100;
    
    const COMPANY_NAME = 'ACME';   //can never be change , it is constant
    
    public $jobTitle;
    private static $jobNumber = 10;
    
    public static function generatePaySlip() {
        return self::$bloodType;
    }
        
    public function __construct($jobTitle, $firstName, $lastName, $gender='f') {
        
        $this->jobTitle = $jobTitle;
        //echo self::COMPANY_NAME;   //need to use self to call const
        //echo parent::EYE_COLOR;  //from parent or base class
        
        //echo self::getEmployeeNumber();
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
    
    protected static $bloodType = 'A+';
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

$jane = new Employee('test', 'test', 'test');

//echo Employee::COMPANY_NAME;  //call class name then constant and cannot change the value
//echo Employee::EYE_COLOR;  //employee has access to person


//echo Employee::$employeenumber;
//echo Employee::getEmployeeNumber();


echo Employee::generatePaySlip();

echo "<br>";

echo "<br>";


echo "<br>";





?>