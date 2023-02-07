<?php include "header.php"; 
$fname = $_POST ['fname']; 
$lname = $_POST ['lname'];
$dob = $_POST["birthdate"];
$color = $_POST["favcolor"];

echo "<h3> Hello $fname $lname , You are welcome to my website</h3>";
?>


<?php include "footer.php" ?>