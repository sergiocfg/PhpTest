<!DOCTYPE html>
<html>
<head>
    <title>Frist PHP Form</title>
<h3>.Hello.</h3>
</head>
<body>

<!--        get post        //create form...-->
<form action="form1.php" method="post">
    <input type="text" placeholder="Number" name="num1"><br/>
    <input type="text" placeholder="Number" name="num2">
    <input type="submit" value="Send">
</form>

<?php
/**
 * Created by PhpStorm.
 * User: SelloDell
 * Date: 2/22/2017
 * Time: 7:00 PM
 */
//-----------------------



//------------------                                     //array
$array1 = array("name"=>"sergio","last name"=>"boudy");
$array2 = array("name"=>"idania","last name"=>"chiky");
$array3 = ["name","idania1","last name","chiky1"];

print_r($array1);
echo "<br/>";
print_r($array2);
echo "<br/>";

echo $array1["name"] . ", " . $array1["last name"];
echo "<br/>";

echo $array3[0] . ", " . $array3[1];
echo "<br/>";

sort($array1);      //
var_dump($array1);  //similar to print_r
echo "<br/>";

echo "<br/>".".END.";
?>
</body>
</html>
