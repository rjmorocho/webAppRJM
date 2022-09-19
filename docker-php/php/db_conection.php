<?php  

$dbcon=mysqli_connect("db","root","secret","ejercicio3");  
mysqli_select_db($dbcon,"USERS"); 

if ($dbcon == false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>  