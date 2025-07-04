<?php
$a=10;
$b=20;
$c="10";
if($a==$b)
{
    echo "a is greater than b";
}
else
{
    echo "b is greater than a";
}
echo "<br/>";

var_dump($a==$b);
echo "<br/>";
var_dump($a==$c);
echo "<br/>";
var_dump($a===$c);
echo "<br/>";

echo ++$a;
echo "<br/>";

echo $a++;
echo "<br/>";

echo $a;

?>