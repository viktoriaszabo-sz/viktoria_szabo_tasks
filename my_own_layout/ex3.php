<?php include "header.php" ?>

<h3> Exercise 3: Inclass exercise, variables <br><br></h3>

<h3>
    1. Create a simple html form to get Firstname and Lastname from the user and use echo echo statement to print using 
    (h3) tag: Hello …., You are welcome to my site.  
</h3>
<form action = "action.php" method = "post">
<div class = "row">
    <div class = "col-md-4">
        <input type = "text" name ="fname" required placeholder = "First name" class ="form-control">
    </div>
</div>
<div class ="row">
    <div class = "col-md-4">
        <input type = "text" name ="lname" required placeholder =  "Last name" class ="form-control">
    </div>
</div>
    Birthdate: <input type = "date" name ="birthdate"><br>
    Select your fav color: <input type = "color" name = "favcolor"><br>
    <input type = "submit" value ="submit">
</form>

<h3> 3. Prepare a simple html table and apply bootstrap style to the table. You may use the same table that you did in 3.5.<h3>

<table class="table table-bordered table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Gender</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Viktória</td>
      <td>Szabó</td>
      <td>female</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Katie</td>
      <td>Brudere</td>
      <td>female</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Roy</td>
      <td>Liu</td>
      <td>male</td>
    </tr>
  </tbody>
</table>


<h3>4. </h3>

<?php

$name = "Viktória";
$city = "Tatabánya";

echo $name . " " . $city;
echo " <br> The lenght of " . $name . " is " . strlen($name);

?>


<h3>5. Write a script to add up the numbers: 298, 234, 46. Use variables to store these numbers and echo 
    statement to output your answer.</h2>
<?php
$n1 = 298;
$n2 = 234;
$n3 = 46;

echo $n1 + $n2 + $n3; 
?>

<h3>6. Write a PHP script to detect the browser being used to view your pages. (Use predefined variables: $_SERVER)</h3>

<?php

$host = $_SERVER['HTTP_USER_AGENT'];
echo $host; 

?>

<h3>7. Write a PHP script in the footer section of your universal footer just below the Copyright 
    information to display the last modification time of a file. (Hint: Use predefined variable, 
    basename function & date function to print the date and time)</h3>

    

<?php include "footer.php" ?>