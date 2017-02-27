<!DOCTYPE html>
<html>
<head>
    <title> DB Connection</title>

</head>
<body>
<?php

function mysqlSelect($host,$user,$pass,$db,$mytable)
{
    echo $host . "<br/>";
    echo  $user . "<br/>";
    echo $pass . "<br/>";
    echo $db   . "<br/>";
    echo $mytable . "<br/>";
    $mysql = new mysqli($host, $user, $pass, $db);

    if ($mysql->connect_error) {
        die("Error: (". $mysql->connect_errno.').'.$mysql->connect_error);
    }else {echo "Good connection...";}//else {throw new Error("Connection error...");}
    echo "<br/>";

    //$student = mysqli_select_db($mysql,$mytable);//
    $result = mysqli_query($mysql,"select * from student");

    echo "Columns: " . $result->field_count . "<br/>";
    echo "Rows: " . $result->num_rows . "<br/>";

    //------------------generate a table---------------

    echo "<table id='t01'><tr>";//open header row
    $fld = $result->fetch_fields();//mysqli_fetch_field($result)
    foreach ($fld as $colName)
    {
        echo "<th>" . $colName->name . "</th>";
    }
    echo "</tr>";//close row

    foreach ($result as $row)
    {
        echo "<tr>";
        foreach ($row as $col)
        {
            echo "<th>" . $col . "</th>";
        }
        echo "</tr>";
    }
    echo "</table>";

    echo "<br/>";
    $mysql->close();
}
?>
<!--//------------------------------------ insert -------
-->

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

