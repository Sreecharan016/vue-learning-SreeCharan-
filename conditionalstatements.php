<?php
$userage=19;

if($userage>18)
{
    echo "user eligible to vote";
}
else{
    echo "not eligible to vote";
}
echo "<br/>";    
//else-if 
echo "<br/>";    
echo "<br/>";    

$char="#";
if($char>='0' && $char<='9')
{
    echo "it is digit";
}
elseif(($char>='A' && char <='Z')|| ($char>='a' && char <='z'))
{
    
    {
        echo "it is a alphabet";
    }
}
else
{
    echo "it is special character";
}
echo "<br/>";
echo "Enter your name: ";
$name = trim(fgets(STDIN));
echo "Hello, $name!";
echo $name;


$name = $_POST['username'];
echo "Hello, $name!";
?>


