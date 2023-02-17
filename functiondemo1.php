<?php
//write a function to find sum of two numbers.
if(isset($_POST["calc"]))
{
    $n1=$_POST["n1"];
    $n2=$_POST["n2"];
    $res=add($n1,$n2);
    echo "Result=".$res."<br/>";
}
    function add($x,$y)
    {
        return ($x+$y);
    }


// $a=100;
// $b=200;
// $res=add($a,$b);
// echo "Result = ".$res;
?>
<form method="post">
    Enter a number: <input type="number" name="n1" required="true"/><br><br>
    Enter b number: <input type="number" name="n2" required="true"/><br><br>
    <input type="submit" name="calc" value="sum" />
</form>