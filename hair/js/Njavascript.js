function validate(){

var name = document.getElementById("reg").EID.value;
var pass = document.getElementById("reg").pw.value;
var email = document.getElementById("reg").email.value;


if (name===""|| email === "" || pass==="")
    alert("You must fill in all the blanks"); 
else { 
alert("You Signed up successfully");
window.location.href='index.php';
}


}




function Elog(){

var name = document.getElementById("f2").username.value;
var epass = document.getElementById("f2").pw.value;


if (name==="" || epass==="")
{
alert("You must fill in all the blanks");
}
else
{ 
alert("Welcome!");
window.location.href='index.php';
}


}




function Mlog(){

var name = document.getElementById("f3").username.value;
var pass = document.getElementById("f3").pw.value;


if (name==="" || pass==="")
{
alert("You must fill in all the blanks");
}
else
{ 
alert("Welcome!");
window.location.href='dashboard.php';
}


}


function toEdit(){
    
   window.location.href='editReview.php';

    
}

function toprof(){
   window.location.href='userprofile.php';
    
}


