<?php

// Check if the form has been submitted
if (isset($_POST['submit'])) {

  // Get the number from the form input
  $number = $_POST['number'];

  // Check if the number is odd or even using an if-else statement
  if ($number % 2 == 0) {
    echo $number . " is even.";
  } else {
    echo $number . " is odd.";
  }
}

?>

<form method="post">
  <label for="number">Number:</label>
  <input type="number" name="number" id="number">
  <button type="submit" name="submit">Check</button>
</form>
