<?php
//Array
    $city = array("Dhaka", "Chittagong", "Shylet", "CoxsBazer");
    echo $city[0]."<br>";



//One-dimensional arrays with Foreach 
    $submark = array("Bangla"=>87, "English"=>90, "Math"=>90,);
    echo "<ol>";
    foreach ($submark as $subject => $mark) {
        echo "<li>$subject: $mark<br> </li>";
      }
    echo "</ol>";
      
    echo $submark["Bangla"]."<br>";



//Multidimensional arrays
    $studentinfo = array(
        array ("zahin", 23),
        array ("putul", 24),
        array ("salman", 2),
        array ("rakib", 26)
    );
    echo $studentinfo[0][0]."<br>";





