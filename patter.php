<?php
echo "patter <br/>";
for($i=1;$i<=4;$i++){
    for($j=1;$j<=$i;$j++){
        echo " *&nbsp; ";
    }
    echo "<br/>";
}
echo "decrid odaer<br/>";
for($i=5;$i>=1;$i--){
    for($j=1;$j<=$i;$j++){
        echo " *&nbsp; ";
    }
    echo "<br/>";
}
/* 
* * * * *
* * * *
* * *
* *
*
*/
echo "3 type <br/>";
// outer for loop -> row ke liay hai; 
for($i=1;$i<=5;$i++){
    for($j=1;$j<=$i;$j++){
        $sum=$i+$j;
        if($sum%2==0){
            echo "1 ";
        }
        else{
            echo "0 ";
        }
    }
    
    echo "<br/>";
}
echo "4 type <br/>";
for($i=1;$i<=5;$i++){
    for($j=4;$j>=$i;$i--){
        echo "  ";
    }-6++4444+6
    for($j=1;$j<=$i;$j++){
        echo " * ";
    }
    echo "<br/>";
}
?>