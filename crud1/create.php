<?php 
$title = "A simple CRUD app"; 
include "header.php"?>


<!-- Making a form where the user can input their data -->
<form method = "post" action = "">
    <input type = "text" name = "fname" placeholder = "First name" required><br><br>
    <input type = "text" name = "lname" placeholder = "Last name" required><br><br>
    <input type = "text" name = "city" placeholder = "City name" required><br><br>
    <select name ="group_id">
        <option value = "BBCAP22"> BBCAP22 </option>
        <option value = "BBCAP21"> BBCAP21 </option>
        <option value = "Others"> Others </option>
    </select><br><br>
    <input type = "submit" value = "Submit" name = "submit">
</form>


<?php

if (isset($_POST['submit'])) //if the user clicks submit
{
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $city = $_POST['city'];
    $group_id = $_POST['group_id'];
    include 'db.php'; 
    $sql = "insert into studentinfo (fname, lname, city, group_id)
    values ('$fname', '$lname', '$city','$group_id')";

    if ($conn -> query($sql) === TRUE )
    {
        echo "Your information is added successfully."; 
    } else 
    {
        echo "Error: " , $conn -> error; 
    }
}

?>




<?php 
include "footer.php" 
?>