<!DOCTYPE html>
<html>
<head>
  <title> DB Connection</title>

</head>
<body>
<?php

require "select.php";

$host = "localhost";
$user = "root";
$pass = "";
$db   = "test";
$mytable = "student";
mysqlSelect($host,$user,$pass,$db,$mytable);    // list table
    ?>

<!--//------------------------------------ insert -------
-->
<form action="insert.php" method="post">
    <input type="text" placeholder="Id" name="id"><br/>
    <input type="text" placeholder="Name" name="name"><br/>
    <input type="text" placeholder="Last Name" name="lastName"><br/>
    <input type="text" placeholder="Score" name="score">

    <input type="hidden", name = "host", value = "localhost">
    <input type="hidden", name = "user", value = "root">
    <input type="hidden", name = "pass", value = "">
    <input type="hidden", name = "db", value = "test">
    <input type="hidden", name = "mytable", value = "student">
    <input type="submit" value="Insert">
</form>
<br/>

<!--//------------------------------------ update -------
-->
<form action="update.php" method="post">
    <input type="text" placeholder="Old Id" name="id"><br/>
    <input type="text" placeholder="Name" name="name"><br/>
    <input type="text" placeholder="Last Name" name="lastName"><br/>
    <input type="text" placeholder="Score" name="score">

    <input type="hidden", name = "host", value = "localhost">
    <input type="hidden", name = "user", value = "root">
    <input type="hidden", name = "pass", value = "">
    <input type="hidden", name = "db", value = "test">
    <input type="hidden", name = "mytable", value = "student">
    <input type="submit" value="Update">
</form>
<br/>

<!--//------------------------------------ delete -------
-->
<form action="delete.php" method="post">
    <input type="text" placeholder="Id" name="id">

    <input type="hidden", name = "host", value = "localhost">
    <input type="hidden", name = "user", value = "root">
    <input type="hidden", name = "pass", value = "">
    <input type="hidden", name = "db", value = "test">
    <input type="hidden", name = "mytable", value = "student">
    <input type="submit" value="Delete">
</form>

<style>
    table#t01
    {
        display:  table;
        width:100%;
        //background-color:#eee;
        border:1px solid  #666666;
        border-spacing:5px;
        padding: 1px;
        text-align: left;
    }
    table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
    }

</style>
</body>
</html>

