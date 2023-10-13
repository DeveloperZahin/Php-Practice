<?php
    // OOP
    class Myclass{
        public $x, $y, $z;

        public function mysum(){
            $this->z = $this->x + $this->y;
            return $this->z;
        }
    }

    $class_obj = new Myclass();
    $class_obj->x = 100;
    $class_obj->y = 50;

    echo $class_obj->mysum();