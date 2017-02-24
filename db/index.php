<!DOCTYPE html>
<html>
<head>
  <title> DB Connection</title>

</head>
<body>
<?php
/**
 * Created by PhpStorm.
 * User: sboudy
 * Date: 2/24/2017
 * Time: 2:06 PM
 */

//try {
    $mysql = new mysqli("localhost", "root", "", "test");//,3306, ""
    //$db = mysqli_select_db('test');

    if ($mysql->connect_error) {
        die("Error: (". $mysql->connect_errno.').'.$mysql->connect_error);
    }else {echo "Good connection...";}//else {throw new Error("Connection error...");}
        echo "<br/>";

$student = mysqli_select_db($mysql,"student");// $mysql->select_db("student");
$result = mysqli_query($mysql,"select * from student");

while ($row = mysqli_fetch_row($result)){
    print_r($row);// $row;//["id"];
}

//print_r($student);
    //$query = mysqli_query("select * from student",)
/*
}catch(Exception $e){
    echo "Error: ";*/



?>
</body>
</html>

