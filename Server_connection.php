<?php
//connect to the server
$con=mysqli_connect("127.0.0.1","root","","dummy");
if(!$con)
{
     die('oops connection problem ! --> '.mysqli_error($con));
}
//connect to the database
if(!mysqli_select_db($con,"slau_registration"))
{
     die('oops database selection problem ! --> '.mysqli_error($con));
}
?>