    <?php
    $title = "Exercise 1";
    include "header.php" ?>

    <h4>3.1 Write a simple PHP script to print your information (Name and your groupid). </h4>
    <?php
    echo "Viktória Szabó <br>";
    echo "BBCAP22";
    ?>

    <h4>3.2 Write PHP code to display the following message.</h4>
    <?php
    echo "Hello world! My name is \"David\"";
    ?>

    <h4>3.3 Write the PHP code in to display the current date </h4>
    <?php echo date("d.M.Y")?>

    <h4>3.4 $title = "PHP is interesting”</h4>
    <?php
    $title = "PHP is interesting";
    echo "<h4>" . $title . "</h4>"
    ?>

    <h4>3.5 Use HTML table into echo and include 3 columns S.n., Name and grade</h4>

    <?php 
    
    $g1 = 5;
    $g2 = 4;
    $g3 = 5;

    echo "
    <table>

    <tr>
        <th> S.n. </th>
        <th> Name </th>
        <th> Grade </th>
    </tr>
    <td> 1 </td> 
    <td> Pekka </td> 
    <td> $g1 </td> 
    </tr>
    <td> 2 </td> 
    <td> Johanna </td> 
    <td> $g2 </td> 
    </tr>
    <td> 3 </td>
    <td> John </td>  
    <td> $g3 </td> 3
    </tr>

    </table>
    "
    ?> 

    <h4>Take a screenshot that verifies, you have set up the development environment and include it as an image in ex1.php. 
</h4>

    <img src = "devs.png" alt ="image">



    <script> //js starting tag
    
    document.write("Hello World, this is Javascript"); //semicolon can be left out 

    </script>
    <noscript>
        Plase enable JS to view this content;
    </noscript>
    <input type = "button" onclick = "hello()" value = "Click me">

    <script>
        //window alert
        //window.alert("This will trigger an alert box"); 
        //window.alert(5+10); 
        // document.write
        document.write("This will trigger an alert box")

    </script>

    <input type = "button" onclick = "add()" value = "Click to add">

    <p id = "place1" style = "color: red; background-color: yellow; "> </p>
    <span id = "place2" style = "color: red; background-color: green; "> </span>

    <script>
        document.getElementById("place1").innerHTML = "This will go to place1"; 
        document.getElementById("place2").innerHTML = "This will go to span"; 
    </script>

    <h2>Change background color</h2>

    <form>
        <input type = "color" name = "background" onchange = "changeColor('background', this.value)">
    </form>



    <?php include "footer.php" ?>
