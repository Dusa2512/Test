<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>To-Do List</title>
</head>

<body>
<h1>To-Do List</h1>
<form action="./Todo-mysql.php" target="_self" method="post">
    <label for="todo">work:</label>
    <input type="text" name="todo" id="todo">
    <button type="submit" style="height: 20px;width: 40px" >ADD</button>
</form>
<?php
include "Todo-mysql.php";
$rowdata =mysqli_query($connection,"Select * from data_todo")

?>
<table>
    <tbody>
<!--    --><?php
    while ($row=mysqli_fetch_array($rowdata))
    ?>
        <?php foreach (["id"] as $item) {?>
            <tr>
                <td><?php echo $item ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>