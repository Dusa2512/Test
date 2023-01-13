<?php

$host = "localhost";
$username ="root";
$password ="Ducsang1995py@";
$dbname = "mysql";

//Create connect
$connection=mysqli_connect($host,$username,$password,$dbname)
or die("could not connect!".mysqli_connect_error());

//Check connection
if($connection){
    echo "connected successfully";
}
mysqli_close($connection);
?>