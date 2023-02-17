<?php
$arr1=array(
    array(1,2,3),
    array(4,5,6),
    array(7,8,9)
);
$arr2=array(
    array(1,0,0),
    array(0,1,0),
    array(0,0,1)
);
$arr3=array();
for($i=0;$i<3;$i++){
    for($j=0;$j<3;$j++){
    $arr3[$i][$j]=0;
    for($k=0;$k<3;$k++){
       $arr3[$i][$j]=$arr3[$i][$j]+$arr1[$i][$k]*$arr2[$k][$j];
    }
        
    }
}
echo "<h2>Result</h2><br/>  ";
for($i=0;$i<3;$i++){
    for($j=0;$j<3;$j++){
        echo $arr3[$i][$j]." ";
        // echo "  *  ";/
    }
    echo "<br/>";
}
?>