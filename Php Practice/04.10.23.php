<?php
// Perameter | Sumation | IF ELSE FUNCTION | Loop


        //Functions call with parameters
    echo "<br><br>";

    function title ($titleclass){
        echo $titleclass;
    };
    title("I'm function parameter");
    echo "<br><br>";


        //Functions call without parameters
    echo "<br><br>";
    
    function title2(){
        echo "I'm function parameter";
    };
    title2();
    echo "<br><br>";


        //Function Sumation with parameters
    function sumation($valu1, $valu2){
        $sum;
        $sum = $valu1 + $valu2;
        echo $sum;
    };
    sumation(10, 20);
    echo "<br><br>";


            //Function Sumation without parameters
    function sumation2(){
        $sum;
        $sum = 10 + 20;
        echo $sum;
    };
    sumation2();
    echo "<br><br>";


        //IF ELSE FUNCTION
    $name = "Hey Zahin you got an ";
    $mark = 44;

    if ($mark < 0 || $mark > 100){
        echo "<h4 style='color:red;'>Please enter a number voild number!</h4>";
    }
    elseif ($mark < 40){
        echo $name ."F";
    }
    elseif ($mark >= 40 && $mark < 50){
        echo $name."C";
    }
    elseif ($mark >= 50 && $mark < 60){
        echo $name."B";
    }
    elseif ($mark >= 60 && $mark < 70){
        echo $name."A-";
    }
    elseif ($mark >= 70 && $mark < 80){
        echo $name."A";
    }
    elseif ($mark >= 80 && $mark <= 100){
        echo $name."A+";
    }
    else{
        echo "System Error!";
    }

    echo "<br><br>";

        //If Else Function With Multiple Users
    function result ($studentname, $studentmark){
        echo "Hey " .$studentname." ";


        if ($studentmark < 0 || $studentmark > 100){
            echo "<h4 style='color:red;'>Please enter a number voild number!</h4><br>";
        }
        elseif ($studentmark < 40){
            echo "you got an F<br>";
        }
        elseif ($studentmark >= 40 && $studentmark < 50){
            echo "you got an C<br>";
        }
        elseif ($studentmark >= 50 && $studentmark < 60){
            echo "you got an B<br>";
        }
        elseif ($studentmark >= 60 && $studentmark < 70){
            echo "you got an A-<br>";
        }
        elseif ($studentmark >= 70 && $studentmark < 80){
            echo "you got an A<br>";
        }
        elseif ($studentmark >= 80 && $studentmark <= 100){
            echo "you got an A+<br>";
        }
        else{
            echo "System Error!<br>";
        }
    }


    result ("Zahin", 250);
    result ("putul", 100);
    echo "<br><br>";



        //For Loop
    for ($i=0; $i<10; $i++){
        echo $i ."<br><br>";
    }

        //For each loop
    $marks = [10,20,30,40];
    foreach ($marks as $markinfo){
        echo $markinfo ."<br><br>";
    }
