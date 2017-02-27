<?php
require "select.php";
print_r($_POST);
$id = $_POST["id"];
$name = $_POST["name"];
$lastName = $_POST["lastName"];
$score=$_POST["score"];

$host = $_POST["host"];
$user = $_POST["user"];
$pass = $_POST["pass"];
$db   = $_POST["db"];
$mytable = $_POST["mytable"];/**/


/*
$records = array("id"=>$_POST["id"],
    "name" => $_POST["name"],
    "lastName" => $_POST["lastName"],
    "score" => $_POST["score"]);
print_r($records);*/
echo "<br/>";


$mysql = new mysqli($host, $user, $pass, $db);

if ($mysql->connect_error) {
    die("Error: (". $mysql->connect_errno.').'.$mysql->connect_error);
}else {echo "Good connection...";}//else {throw new Error("Connection error...");}
echo "<br/>";

$sql = "update student set name = '$name',lastName = '$lastName', score = '$score' where id = '$id'";

if($mysql->query($sql) == true)
{
    echo "..Done..<br/>";
}else {
    echo "Error: " . $sql;
}
$mysql->close();

mysqlSelect($host,$user,$pass,$db,$mytable);

