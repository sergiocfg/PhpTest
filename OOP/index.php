<?php
/**
 * Created by PhpStorm.
 * User: sboudy
 * Date: 2/23/2017
 * Time: 12:06 PM
 */
include ("Man.php");
include ("Woman.php");


echo ".oop.<br/>";
$woman = new Woman(50,15,2);
$man = new Man(100,12,1);

echo $man->Weight() . "<br/>";
echo $woman->Weight() . "<br/>";



try
{
    $divide =1;
    $suma=15/$divide;
}
catch(Error $e)
{
    echo $e->getMessage();
}

finally
{
    // Executed regardless of whether an exception has been thrown, and before normal execution resumes
}