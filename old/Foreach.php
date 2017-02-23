<?php
$myArray1 =array ("one","sa","yy","sello",45);

echo "for: <br/>";
for ($i=0; $i < count($myArray1); $i++)
{
  echo $myArray1[$i] . "\n";
  //echo "<br/>";
}
echo "<br/>foreach: <br/>";
foreach ($myArray1 as $value)
{
  echo $value . "\n";
  //echo "<br/>";
}

if($myArray1[1]=="sa")
{
  echo "ok";
}else {
echo "no";
}
 ?>
