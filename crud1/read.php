<?php 
$title = "Reading data from the database";
include 'header.php';
include 'db.php'; 

$sql = "select * from studentinfo"; // reads everything from the table 
//we put the action into a variable, this will be used in a query
$result = $conn -> query($sql); 
    // we're checking, if our query (with the variable that contains the desired action) could be done 
    // accessing the database, this will be the '$result'
        //the result is a successfull access for futher operations with the action (which is select *)

if ($result -> num_rows > 0)
    //if the result (which is 'select is from studentinfo (which is reading everything from the table)')
    //shows that there's more, than 0 rows aka the table is not empty, then do the following: 

    {
    echo "
        <table class = 'table table-bordered table-dark'>
        
            <tr>
                <th>ID</th>                 //th = table header
                <th>First Name</th>         //td = table content (cells) 
                <th>Last name</th>          //tr = table row
                <th>City</th>
                <th>Group ID</th>
            </tr>";

    //we print out the data in a table form, so that the user can read it

    while ($row = $result -> fetch_assoc())
    //fetch_assoc: fetching a result row as an ASSOCIATIVE ARRAY (we assign different variables for each value) (?)
    //while is used, because we want to print every possible row until there's nothing left (?)
    {
        echo "
            <tr>
                <td>
                    <a href = 'updatesingle.php?id= $row[id]'>$row[id] </a> 
                </td>     
                <td>$row[fname]</td> 
                <td>$row[lname]</td>
                <td>$row[city]</td>
                <td>$row[group_id]</td>
            </tr>";
    } //we fetched the row from the database-table with the 
    echo "</table>";
}
else 
{
    echo "No results";
}

$conn ->close() 

?>

<?php include "footer.php"?>