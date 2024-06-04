<html>

<body>
    welcome
    <?php
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    // retrive from data 
    $fname = $_POST["fname"] ;
    $lname = $_POST["lname"] ;
   
    // display data
    echo "First Name: ". $fname ." <br> ";
    echo "Last Name: " . $fname ." <br> ";
    
}
?>
</body>

</html>