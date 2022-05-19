<?php
  // If Button clicked
  if(isset($_POST['submit'])) {
    // Ensures inputs fields are not empty
    if($_POST['minimum'] != "" and $_POST['maximum'] != "") {
      
      // Get Max and Min from user
      $minimum = $_POST['minimum']; 
      $maximum = $_POST['maximum'];


      // Initializes Variables
      $numberDisplay = "";
      $counter = $minimum;

      // IF the minimum is lower than the maximum
      if ($minimum <= $maximum) {
        // Displays every number from inputted minimum to the maximum
        while (($counter >= $minimum) and ($counter <= $maximum)) {
          $numberDisplay = $counter . "<br>";
          $counter++;
          echo $numberDisplay;
        }
        // IF the user inputted a minimum higher than the maximum
      } else {
        echo "<h4>Please enter a minimum number LOWER than the maximum!</h4>";
      }
      

      // If user did fill all input fields, yet pressed button
    } else {
      echo "<h4>Please fill both boxes.</h4>";
    }
  }
?>