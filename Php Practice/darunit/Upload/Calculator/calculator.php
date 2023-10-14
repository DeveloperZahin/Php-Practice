<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $num1 = $_POST['num1'];
  $operator = $_POST['operator'];
  $num2 = $_POST['num2'];

  switch ($operator) {
    case 'add':
      $result = $num1 + $num2;
      break;
    case 'subtract':
      $result = $num1 - $num2;
      break;
    case 'multiply':
      $result = $num1 * $num2;
      break;
    case 'divide':
      $result = $num1 / $num2;
      break;
    default:
      $result = 'Invalid operator';
  }

  echo "Result: $result";
}

?>
