<?php

// Define the 2D array
$my_array = array(
  array(1, 2, 3, 'A'),
  array(1, 2, 'B', 'C'),
  array(1, 'D', 'E', 'F'),
  array(1, 2, 3),
  array(1, 2),
  array(1),
  array('A'),
  array('B', 'C'),
  array('D', 'E', 'F')
);

// Loop through the array and print each element
foreach ($my_array as $row) {
  foreach ($row as $element) {
    echo $element . " ";
  }
  echo "\n";
}

// Define the number of rows
$num_rows = 3;

// Loop through the rows
for ($i = 1; $i <= $num_rows; $i++) {
  // Loop through the columns for each row
  for ($j = 1; $j <= $i; $j++) {
    // Print an asterisk for each column
    echo $my_array[3][$j-1] . " ";
  }
  // Print a new line after each row
  echo "\n";
}
?>