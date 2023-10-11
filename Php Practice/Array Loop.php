<?php
    // Array | Loop


        //Hello world from the server and send the request to the server
    echo "Hello World<br>";


    $name = ["Abu Zahin", "Mohammad Nowsin"];
    echo "Hey, I'm ".$name[0]."<br>"; //Multiple Data Points



        //Multidimational Array
    $studentdata = ["Zahin", 10, 4.5, true];
        //echo $studentdata;       //Not Why
        echo implode("<br> ", $studentdata)."<br>";

    


        //Multidimational Array
    $multidata = [
        ["Zahin", 10, 4.5, true],
        ["Abu Zahin", 10, 4.5, true],
        ["Mohammad Nowsin", 10, 4.5, true]
    ];
        echo $multidata[2][0]."<br>";

        //Associative Array
    $studentinfo = [
        "Student" => "Student",
        "Age" => 10,
        "Marks" => 4.5,
        "Status" => true
    ];
    echo $studentinfo["Student"]."<br><br>";



    //For Loop
    $studentlist = ["Zahin", "Abu Zahin", "Mohammad Nowsin"];
    for ($i=0; $i<count($studentlist); $i++){
        echo $studentlist[$i]."<br>";
    };




    //End





