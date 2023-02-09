<?php include "header.php" ?>

<h4>1. Write a script that gets the current month and prints one of the following responses, depending on whether it's August or not:</h4>
<?php
$m = date("F"); 
if ($m == "August")
{
    echo "It's August, so it's still holiday."; 
} else if ($m != "August"){
    echo "Not August, this is ";
    echo $m; 
    echo " so I don't have any holidays"; 
}
?>

<h4>2. Assign colour red to a variable name $color and check to print one the following responses (if else statement)</h4>
<?php
$color = "red"; 
if ($color == "red")
{
    echo "The color is red";
} else if ($color != "red")
{
    echo "The color is not red"; 
}
?>

<h4>3. Write a program to grade students based on their total score for a subject. Use variable to hold the total score. The grading scheme is: </h4>
<?php 
$score = 25; 
/*Excellent: >80; 
Great >70 & less than 80;
Good >60 & less than 70; 
Pass >50 & less than 60
Fail <50*/
if ($score >= 80)
{
    echo "<h4>'Excellent' </h4>";
} else if ($score >= 70 && $score < 80)
{
    echo "<h4>'Great' </h4>";
} else if ($score >= 60 && $score < 70)
{
    echo "<h4>'Good' </h4>";
} else if ($score >= 50 && $score < 70)
{
    echo "<h4>'Pass'</h4>";
} else if ($score < 50)
{
    echo "<h4>'Fail'</h4>";
} 
?>

<h4>4. Write a program to get inputs (age and name) from the user and based on their age, decide if he/she is eligible for voting. (18 or more than 18 years is eligible for voting,) </h4>
<form action ="eligible.php" method = "post">
    <input type ="text" name ="name" required placeholder = "Your name" class ="form-control">
    <input type ="number" name ="age" required placeholder = "Your age" class ="form-control">
    <input type = "submit" value ="submit">
</form>

<?php include "footer.php" ?> 