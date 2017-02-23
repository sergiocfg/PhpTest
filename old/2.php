<html>
<head>
</head>
<body>
<pre>
<?php
$stringComplexity = "this is a new string \t bdfhdfhd";
$string2 = "2";
echo $stringComplexity . $string2 . "<br />";
print "<br /> sello print";

$stringComplexity = strtoupper($stringComplexity);

print $stringComplexity . "<br />";
echo "leng: " . strlen($stringComplexity) . "<br/>";
echo "pos: " . strpos($stringComplexity,"NEW") . "<br/>";

$replaceEx = str_replace("NEW", "new1", $stringComplexity);
echo $replaceEx . " + " . $stringComplexity . "<br/>";
echo "substring: " . substr($stringComplexity, 2, 10) . "<br />"
?>
</pre>
</body>
</html>
