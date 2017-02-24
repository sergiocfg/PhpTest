<?php
/**
 * Created by PhpStorm.
 * User: SelloDell
 * Date: 2/22/2017
 * Time: 10:21 PM
 */
$num1 = $_POST["num1"];
$num2 = $_POST["num2"];
if((!empty($num1) and !empty($num2)) && (is_numeric($num1) && is_numeric($num2)))
{
    print "+ - * / % ^ sqrt:" . "<br/>";
    echo $num1 + $num2 . "<br/>";
    echo $num1 - $num2 . "<br/>";
    echo $num1 * $num2 . "<br/>";
    echo $num1 / $num2 . "<br/>";
    echo $num1 % $num2 . "<br/>";
    echo pow($num1, $num2) . "<br/>";
    echo sqrt($num1) . "<br/>";
}else {
    echo "Corect Data";
}
?>