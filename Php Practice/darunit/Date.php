<?php

    // This is an example of php data and time.
    

    //  date example
    echo "Date Example:<br>";
    echo "Today date is: ".date('d-m-y').'<br>';
    echo "Today date is: ".date('d/m/y').'<br>';
    echo "Today date is: ".date('d.m.y').'<br><br>';

    //  this month day/month/year.
    echo "Day/Month/Year Example:<br>";
    echo "This month day: ".date('d').'<br>';
    echo "This month: ".date('m').'<br>';
    echo "This year: ".date('Y').'<br><br>';

    //  time example
    echo "Time Example:<br>";
    echo "Time: ".date('h:i:sa').'<br><br>';

    //  time zone set example
    echo "Timezone set (Asia/Dhaka) Example:<br>";
    echo date_default_timezone_set('Asia/Dhaka');
    echo "Time: ".date('h:i:sa').'<br><br>';



    
    //  strtotime()function

    // Tomorrow date
    $tomorrowDate=strtotime('tomorrow');
    echo "Tomorrow date is: ".date('Y-m-d H:i:sa',$tomorrowDate)."<br><br>";

    // echo "Next Saturday date
    $nextSaturdayDate=strtotime('next Saturday');
    echo "Next saturday date is: ".date('Y-m-d H:i:sa',$nextSaturdayDate)."<br><br>";

    // echo "After 2month date
    $afterTwoMonthDate=strtotime('+2 Month');
    echo "After 2month  date is: ".date('Y-m-d H:i:sa',$afterTwoMonthDate)."<br><br>";