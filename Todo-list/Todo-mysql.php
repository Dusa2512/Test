<?php

$host = "localhost";
$username = "root";
$password = "Ducsang1995py@";
$dbname = "todo_list";

//Create connect
$connection = mysqli_connect($host, $username, $password, $dbname)
or die("could not connect!" . mysqli_connect_error());

function createTable($connection){
    if(getData($connection)) {return;}
    $sql = "CREATE TABLE data_todolist (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Todo varchar (30) NOT null ";
    $connection->query($sql);

}

function getData($connection){
    $sql = "Select *from data_todolist";
    return $connection->query($sql);
}


//Check connection
if ($connection) {
    echo "connected successfully" . "<br>";

    createTable($connection);
    $result = getData($connection);

    if ($result->num_rows > 0) {
// output data of each row
        while ($row = $result->fetch_assoc()) {
            echo " - id: " . $row["id"] . " - Todo: " . $row["Todo"] ."<br>";
        }
    }
}
mysqli_close($connection);

header("location:Api_html.php");







