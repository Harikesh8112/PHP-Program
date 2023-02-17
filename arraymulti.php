<?php
//This is multidemensl array
$arr=array(
array(1001,"Brijesh Mishra",40000),
array(1002,"Hari",30000),
array(1003,"Ram",20000),
array(1004,"Rama",25000)
);
echo "<h2>List of Employee.</h2>";
for($i=0;$i<4;$i++)
{
    for($j=0;$j<3;$j++)
    {
        echo $arr[$i][$j]."&nbsp;&nbsp;&nbsp;&nbsp;";
    }
    echo "<br/>";
}
?>
