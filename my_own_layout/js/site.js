// a simple function that triggers alert box 
function hello()
{
    alert("Welcome to my website"); 
}

//a simple fucniton to add 2 numbers; 
function add () 
{
    document.write(5+6); 
}

//function to change the background color of the page
function changeColor()
{
    let color = document.getElementById('background').value; 
    document.body.style.backgroundColor = color; 
}

//function to change the font color of the page
function changeFontColor()
{
    let colorf = document.getElementById('font').value; 
    document.body.style.color = colorf; 
}

function crud() 
{
    let fname = (document.form1.fname.value).trim(); // its removing all the spaces before + after; 
    if (fname.length < 5)
    {
        alert ("First name must have at least 5 characters");
        return false; 
    }
}
function fnameVal() 
{
    let fname = (document.form1.fname.value).trim(); // its removing all the spaces before + after; 
    if (fname.length < 5)
    {
        alert ("First name must have at least 5 characters");
        return false; 
    }
}