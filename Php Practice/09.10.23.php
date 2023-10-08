<?php
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Traits
trait Greeting {
    public function sayHello(){
        echo "Hello, " .$this->name . "<br>";
    }
}


class Student {
    use Greeting;   // Traits Include
    public $name;
    public function __construct($name){
        $this->name = $name;
    }
}

$student = new Student("Zahin");

$student->sayHello();
echo "<br><br>";

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    // Static Methods
class Myclass{
    public static function add($a, $b){
        return $a + $b;
    }
    public static function subtract($a, $b){
        return $a - $b;
    }
}

    //Static Methods Call
    echo Myclass::add(10, 20);         //$result1 = Myclass::add(10, 20);
    echo "<br><br>";
    echo Myclass::subtract(10, 20);
    echo "<br><br>";



////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Instance
class person{
    public $name;
    public $age;
    public function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;
    }
    public function getName(){
        echo "Hello, My name is " . $this->name." and I am  " . $this->age ." years old.";
    }  
}
    //Class instance create
$person1 = new person("Zahin", 10);

    //Class instance call
    $person1->getName();



////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    // Static Popertise

    




