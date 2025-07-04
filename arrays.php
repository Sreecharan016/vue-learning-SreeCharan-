<?php
$arr=["charan","kiran","teja","koushik","ramakrishna"];
for($i=0;$i<count($arr);$i++)
{
    if($i%2==0)
    {
    echo " <h1 style='color:red'>$arr[$i]</h2> <br/>";
    }   
}
foreach($arr as $a)
{
    echo "$a <br/>";
}
// associative array

$employeedetails=[
    "name"=>"Sreecharan",
    "id"=>"1",
    "age"=>"23",
    "designation"=>"developer",
    "sal"=>"500000"
];
foreach($employeedetails as $emp)
{
    echo "$emp <br/>";
}
//multi-dimensional array
echo "<table border=1>";
$arr=[
    [1,"charan","adb"],
    [2,"kiran","wgl"],
    [3,"teja","vizag"]
];
for($i=0;$i<count($arr);$i++)
{
    echo "<tr>";
    for($j=0;$j<count($arr[$i]);$j++)
    {
        echo "<td>";
        echo $arr[$i][$j];
                echo "</td>";

        echo "<br/>";
    }
        echo "<tr>";

}
echo "</table>";



?>