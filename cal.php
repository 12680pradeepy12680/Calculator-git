<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $n1 = $_POST['num1'];
  $n2 = $_POST['num2'];
  $op = $_POST['operation'];

  switch ($op) {
    case 'add':
      $result = $n1 + $n2;
      echo "Result: $result";
      break;
    default:
      echo "Operation not supported yet.";
  }
}
?>
