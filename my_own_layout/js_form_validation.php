<?php 
$title = "JavaScript events and form validations"; 
include "header.php" ?>

<h2>Simple button to display date<br></h2>

<button onclick = "this.innerHTML = Date()"> Click to know date </button>
        <!-- onclick -> event --> 

<h2><br>Make a button and a placeholder as a paragraph for the date<br></h2>

<button onblur = "getElementById('p1').innerHTML = Date()">Clcik to know date</button>
    <p id = "p1" ></p>

<h2>Change background color</h2>
<form>
    <input type = "color" id = "background" onchange = "changeColor()" > <!-- changeColor() function was inclass last time 
                                                                            (site.js file) -->
</form>

<h2>Change font color</h2>
<form>
    <input type = "color" id = "font" onchange = "changeFontColor()" > 
</form>


<h2>On Mouse Over & On Mouse Out </h2>

<span onmouseover = "this.style.color = 'blue'; 
                    this.style.backgroundColor = 'yellow'
                    this.style.fontSize = '3em';" onmouseout = "
                    this.style.color = 'white'; 
                    this.style.backgroundColor = 'blue'
                    this.style.fontSize = '1em';"
                    >something 
</span>





<?php include "footer.php" ?>