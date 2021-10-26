<?php

  // PHP CODING EXAMINATION
  // MG Baybay | October 26 2021 

  // PART 1: LOOPS
  // Part 1-A: While Loop (Get sum of all even numbers using while loop)
  function getEvenSum(int $num) {
    $sum = 0;
    $i = 0;
    while ($i <= $num) {
      if ($i % 2 == 0) 
        $sum += $num;
      $i++;
    }
    echo "The sum of even numbers is: $sum <br>";
  }

  // Part 1-B: Do-while Loop (Display all odd numbers)
  function displayOddNum(int $num) {
    $i = 0;  
    do {
      if ($i % 2 != 0)
        echo $i. " ";
      $i++;
    } while ($i <= $num);
    echo "<br>";
  }

  // Part 1-C: For Loop (Display the first 10 numbers in Fibonacci sequence)
  function fibSequence($num){
    $num1 = 0;
    $num2 = 1;
  
    $i = 0;
    while ($i < $num){
        echo ' '.$num1;
        $num3 = $num2 + $num1;
        $num1 = $num2;
        $num2 = $num3;
        $i = $i + 1;
    }
  }

  // PART 2: ARRAYS
  // Part 2-A: Display the value with most occurrence, in case of tie, arrange them alphabetically
  function mostOccurrence($array) {
    $values = array_count_values($array);
    $highest = max($values);
    $arr = array_keys($values, $highest);
    sort($arr);
    $string = join(', ', $arr);
    echo $string . "<br>";
  }

  // Part 2-B: Sort the array in ascending order. If the value is odd number, round it up to the nearest tens
  function sortNum($array) {
    sort($array);
    foreach ($array as &$value) {
      if ($value % 2 != 0)
        $value = round($value, -1);
    }
    print_r($array);
  }

  // Part 2-C: Display non-repetitive items
  function displayUnique($array) {
    print_r(array_unique($array));
  }

  // TESTS
  $arr1 = array('Marvin', 'Marco', 'Marvin', 'Marco', 'Marco', 'Marvin', 'Christian');
  $arr2 = array(9863, 7127, 2020, 80, 131, 55, 100);
  $arr3 = array('red', 'blue', 'black', 'red', 'blue', 'blue', 'red', 'gold');
  
  getEvenSum(10);
  displayOddNum(10);
  fibSequence(10);
  mostOccurrence($arr1);
  sortNum($arr2);
  displayUnique($arr3);
  
?> 