<?php
$n1=2;
while($n1<=10)
{
      echo $n1."table <br/>";
 for($star=1;$star<=10;$star++)
 {
   

    echo $n1."*".$star."=".$n1*$star."";
    echo "<br/>";
    
 }
 $n1++;
}



?>