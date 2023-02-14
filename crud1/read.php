<?php 
$title = "Reading data from the database";
include 'header.php';
include 'db.php'; 
$sql = "select * from studentinfo";

$result = $conn -> query($sql); 

if ($result ->num_rows > 0)
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

    while ($row = $result -> fetch_assoc())
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
    }
    echo "</table>";
}
else 
{
    echo "No results";
}

$conn ->close()

?>






<?php include "footer.php"?>