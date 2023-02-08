<?php include "header.php"; 
$age = $_POST ['age']; 

if ($age < 18){
    echo "You are not eligible for voting."; 
}
else if ($age >= 18)
{
    echo "You are eligible for voting.";
}
?>

<?php include "footer.php" ?>