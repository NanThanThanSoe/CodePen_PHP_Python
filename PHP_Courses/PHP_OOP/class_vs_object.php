<?php

class Person {
    
    public $firstName;
    public $lastName;
    public $gender;
    
    
    public function __construct($firstName, $lastName, $gender = 'f'){
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->gender = $gender;
    }
    
    public function sayHello() {
        return "Hello my name is " . $this->firstName . " " . $this->lastName;
    }
    
    public function getGender(){
        return $this->gender;
    }
 
}

$nan = new Person('Nan', 'Soe', 'f'); 
$tom = new Person('Jane', 'Ben', 'm');

echo $nan->sayHello();
echo "<br>";

echo $tom->sayHello(). " " . "Genter: ", $tom->gender;
echo "<br>";



?>