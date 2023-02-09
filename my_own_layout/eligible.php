<?php include "header.php"; 
$age = $_POST ['age']; 

if ($age < 18){
    echo "<h4>You are not eligible for voting.</h4>"; 
}
else if ($age >= 18)
{
    echo "<h4>You are eligible for voting.</h4>";
}
?>

<?php include "footer.php" ?>