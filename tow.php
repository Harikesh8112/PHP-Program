<?php
$a=array(
    array(1,2,3),
    array(4,5,6),
    array(7,8,9)
);
$b=array(
    array(9,8,7),
    array(6,5,4),
    array(3,2,1)
);
echo "Elements of matrix A  <br/>";

for($i=0;$i<3;$i++){
    for($j=0;$j<3;$j++){
        echo $a[$i][$j]." ";
        // echo "  *  ";/
    }
    echo "<br/>";
}
echo "Elements of matrix B  <br/>";

for($i=0;$i<3;$i++){
    for($j=0;$j<3;$j++){
        echo $b[$i][$j]." ";
    }
    echo "<br/>";
}
echo "Elements of A and B Sum <br/>";
for($i=0;$i<3;$i++){
    for($j=0;$j<3;$j++){
        echo $a[$i][$j]+$b[$i][$j]." ";
    }
    echo "<br/>";
}
?>