<?php
$myArray1 =array ("one","sa","yy","sello",45);
print_r($myArray1);
echo "<br/>";

$myArray2 = [23,"one","sa","yy","sello",$myArray1];
print_r($myArray2);
echo "<br/>";
print_r($myArray2[1]);
echo "<br/>";
print_r(gettype($myArray2[5]));
echo "<br/>";
//add element to Array
array_push($myArray1,"add sello");
print_r($myArray1);
echo "<br/>";

$myArray1[]=$myArray2;
print_r($myArray1);
echo "<br/>";

//remove element
echo "remove element <br/>";
array_pop($myArray1);
print_r($myArray1);
echo "<br/>";

echo "sort element <br/>";
sort($myArray1);
print_r($myArray1);
echo "<br/>";

echo "count element <br/>";
print_r(count($myArray1));
echo "<br/>";
?>
