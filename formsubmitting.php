<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $fname = $_POST["fname"];
    $lname = $_POST["fname"];
    

    // Display the submitted data
    echo "fName: " . $fname . "<br>";
    echo "lName: " . $lname . "<br>";
  
}
?>