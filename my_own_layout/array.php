<?php include "header.php"?> 

<h4>1.  Write a php script to display courses as list. Use \li\</h4>
<?php
$courses1 = array("PHP", "HTML", "JavaScript", "CMS", "Project");
$num = count($courses1);

for ($i = 0; $i <$num; $i++) 
{
    echo "<li>$courses1[$i]";
}
?>

<h4><br>2. Delete an element from the array below:</h4>
<?php 
echo "deleted \"JavaScript\"<br>"; 
    $courses2=array("PHP", "HTML", "JavaScript", "CMS", "Project");
unset($courses2[2]);
var_dump($courses2);
?>

<h4><br>3. Sort the following array: <br>
$courses3=array("PHP", "HTML", "JavaScript", "CMS", "Project"); </h4>
<h4>a) ascending order sort by value</h4>
<?php 
$courses3a=array("PHP", "HTML", "JavaScript", "CMS", "Project");
asort($courses3a); 

$num = count($courses3a);
for ($i = 0; $i <$num; $i++) 
{
    echo "$courses3a[$i]<br>";
}
?>

<h4>b) ascending order sort by Key</h4>
<?php
$courses3b=array("PHP" => "web programming", "HTML" => "website design", "JavaScript" => "OOP", "CMS" => "website management", "Project" => "group work");

ksort($courses3b);
foreach ($courses3b as $k => $k_value) 
{
    echo $k_value . "<br>";
}
?>
<h4>c) descending order sort by Value</h4>
<?php 
   $courses3c=array("PHP", "HTML", "JavaScript", "CMS", "Project");
   arsort($courses3c); 
   
   $num = count($courses3c);
   for ($i = 0; $i <$num; $i++) 
   {
       echo "$courses3c[$i]<br>";
   }
?>
<h4>c) descending order sort by Key</h4>
<?php
$courses3b=array("PHP" => "web programming", "HTML" => "website design", "JavaScript" => "OOP", "CMS" => "website management", "Project" => "group work");

Krsort($courses3b);
foreach ($courses3b as $k => $k_value) 
{
    echo $k_value . "<br>";
}
?>

<h4><br>4. Change the following array's all values to upper case.<br>
$courses4=array("php", "html", "javascript", "cms", "project");
</h4>

<?php 
$courses4 = array("PHP", "HTML", "JavaScript", "CMS", "Project");

$courses4 = array_map('strtolower', $courses4);
$num = count($courses1);

for ($i = 0; $i <$num; $i++) 
{
    echo "<li>$courses1[$i]";
}
?>

<h4><br>5. Write comments to explain the following code (when asked):</h4>

<?php
echo "<hr><h2> Calculation average temperature: </h2>";
$month_temp = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,
68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";

// what is explode and what does the below code do? : 
$temp_array = explode(',', $month_temp);
$tot_temp = 0;

// What is count?

// this function counts the number of elements within the array --> after that it could be used in for-loops

$temp_array_length = count($temp_array);
foreach($temp_array as $temp)
{
 $tot_temp += $temp;
}
 $avg_high_temp = $tot_temp/$temp_array_length;
 echo "Average Temperature is : ".$avg_high_temp."
"; 

// what does sort do?

// this function sets the elements of the array in a specific order

sort($temp_array);
echo "<br> List of five lowest temperatures :";
for ($i=0; $i< 5; $i++)
{ 
echo $temp_array[$i].", ";
}
echo "<br>List of five highest temperatures :";

// explain the following loop

// this loop writes out all the elements of the array until the last one

for ($i=($temp_array_length-5); $i< ($temp_array_length); $i++)
{
echo $temp_array[$i].", ";
}
?>

<?php include "footer.php"?>