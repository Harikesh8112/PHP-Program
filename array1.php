<?php
$arr=array("c","c++","java","javascript","php");
echo "<h1>traversal of array using for loop</h1>";
for($i=0;$i<count($arr);$i++){
    echo $arr[$i]."<br/>";
}
echo "<h1>traversal of array using foreach loop</h1>";
foreach($arr as $x){
    echo $x."<br/>";
}


?>