<?php

  $a = 10;
  $b = 6;
  echo $a**$b;
  echo "<br>";



  $marks = 60;

  switch ($marks){
    case 90:
      echo "A";
      break;
    case 80:
      echo "B";
      break;
    case 70:
      echo "C";
      break;
    case 60:
      echo "D";
      break;
    case 50:
      echo "E";
      break;
    default:
      echo "F";
      break;
  }
  echo "<br>";

  for($i = 1; $i <= 10; $i++){
    echo $i . "<br>";
  }

  $i = 1;
  while($i <= 10){
    echo $i. "<br>";
    $i++;
  }
  echo "<br> <br>";  


  $i=1;
  do{
    echo $i. "<br>";
    $i++;
  }while($i <= 10);