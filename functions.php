<?php
function test()
{
    echo "user details";
}

function demo()
{
    test();
        echo "<br/>";

    echo "User name is charan";
    echo "<br/>";
    echo "user age is 23";
        echo "<br/>";
        echo "<hr/>";

}
demo()


function sum($n1,$n2)
{
    echo $n1+$n2;
}
sum(10,30);

function user($name,$color)
{
    echo "<h1 style='color:$color'>$name</h1>";
}
user("charan","red");
user("kiran","orange");


function even($n1)
{
    if($n1%2==0 )
    {
        return true;
    }
    else {
        return false;
    }
    // return true;
}
    if(even(6))
    {
        echo "even";
    }
    else{
        echo "odd";
    }

?>