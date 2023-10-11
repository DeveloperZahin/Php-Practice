<?php
//  Method call | Constructor | Inheritance


class category{

        //Properties
    public $name;
    public $age;

        //Methods
    public function addcategory(){
        echo "I'm from addcategory <br>";
        $title1 = "Title Text";
        echo $title1;
    }
}

        //Object Create
    $category_obj = new category();

        //Values assign
    $category_obj->name = "Fruits";
    $category_obj->age = 10;

    echo $category_obj->name;
    echo $category_obj->age;

        //Methods Calls
    $category_obj->addcategory();
    
    echo "<br><br>";








        //Constructor
    class message{
        public $notice;

            //Constructor
        function __construct(){
            $this -> notice = "You have been successfully <br>";
            $this -> classnotice();
        }
        function classnotice(){
            echo "I'm from class notice<br>";
        }
    }
        //Object Create
    $obj = new Message();
    echo $obj->notice;
    echo "<br><br>";







        //Inheritance

    class father{
        public $bankbalance = "1M";
    }

    class son extends father{
        public $lone = "2M";
    }
    class grandson extends son{

    }

    $grandson_obj = new grandson();
    echo $grandson_obj->bankbalance;