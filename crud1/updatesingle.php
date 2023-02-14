<?php 
$title = "Update your info";
include "header.php";

// variables that we're gonna work with later on

$a = $_GET['id']; //aka $a = ID
include 'db.php';

$result = mysqli_query($conn,
"Select * from studentinfo 
where id = '$a' "); //aka where the ID-s are the same, aka finds the ID --> we'll be able to see that row 

$row = mysqli_fetch_array($result); //put the row into an array --> [(id), fname, lname, city, group_id]

?>

<h2>Update your information below</h2>

<form name = "update" method = "post" action = "">

    <input type = "text" name = "fname" placeholder = "First name" required value = "<?php echo $row['fname']; ?>" ><br><br>
    <input type = "text" name = "lname" placeholder = "Last name" required value = "<?php echo $row['lname']; ?>"><br><br>
    <input type = "text" name = "city" placeholder = "City name" required value = "<?php echo $row['city']; ?>"><br><br>
                                <!-- has to be same value as the one in the table row (pl.: exact same name)-->

    <select name ="group_id">
        <option value = "BBCAP22"> BBCAP22 </option>
        <option value = "BBCAP21"> BBCAP21 </option>
        <option value = "Others"> Others </option>
    </select><br><br>
    <input type = "submit" value = "Update your info" name = "update"><br><br>
    <input type = "submit" value = "Delete your info" name = "delete">

</form>

<?php

if (isset($_POST['update']))
{
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $city = $_POST['city'];
    $group_id = $_POST['group_id'];
    $query = mysqli_query($conn, 
    "UPDATE studentinfo 
    set fname = '$fname', lname = '$lname', city = '$city', group_id = 'group_id' 
    where id = '$a' "); //these are sql statements, look them up seperately
                        //changes only that row, where the $a is located 

    if ($query)
    {
        echo "<h2> Your information updated successfully. </h2>"; //if the query could be done, it prints out success
    }
    else 
    { 
        echo "Record not modified"; //if the query couldn't be done, it fails
    }
} else if (isset($_POST['delete']))
{
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $city = $_POST['city'];
    $group_id = $_POST['group_id'];
    $query = mysqli_query($conn, 
    "DELETE from studentinfo
    where id = '$a'");

    if ($query)
    {
        echo "<h2> Your information deleted successfully. </h2>"; //if the query could be done, it prints out success
    }
    else 
    { 
        echo "Record not modified"; //if the query couldn't be done, it fails
    }
}
