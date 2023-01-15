<?php

$host = "localhost";
$username = "root";
$password = "Ducsang1995py@";
$dbname = "hai";

//Create connect
$connection = mysqli_connect($host, $username, $password, $dbname)
or die("could not connect!" . mysqli_connect_error());

//Check connection
if ($connection) {
    echo "connected successfully" . "<br>";

    $sql = "CREATE TABLE data_staff (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Salary varchar (30) NOT null ,
position varchar (30) NOT NULL ,
username VARCHAR(30) NOT NULL,
password VARCHAR(30) NOT NULL,
email VARCHAR(50))";
    $sql = "Select *from data_staff";
    $connection->query($sql);
    $result = $connection->query($sql);

    if ($result->num_rows > 0) {
// output data of each row
        while ($row = $result->fetch_assoc()) {
            echo " - id: " . $row["id"]  . " - Name: " . $row["username"]  . " - password:"
                . $row["password"] . " - email:" . $row["email"]." - Salary:".$row["Salary"]
                . " - position:".$row["position"]."<br>";
        }
    }
}
mysqli_close($connection);
?>

<html>
<head>
    <title>To-Do List</title>
</head>
<body>
<h1>To-Do List</h1>
<table>
    <tr>
        <th>Name</th>
        <th>Description</th>
        <th>Completed</th>
        <th>Actions</th>
    </tr>
    <?php foreach($result as $row) { ?>
        <tr>
            <td><?php echo $row['username']; ?></td>
            <td><?php echo $row['password']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['Salary']; ?></td>
            <td><?php echo $row['position']; ?></td>
            <td>
                <a href="complete.php?id=<?php echo $row['id']; ?>">Complete</a>
                <a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
            </td>
        </tr>
    <?php } ?>
</table>
<a href="add.php">Add Item</a>
</body>
</html>



