<?php
// A to Z => 65--95;
// a to z => 97--122;
// 0 to 9 => 48--57;

for($i=65;$i<=69;$i++){
    for($j=65;$j<=$i;$j++){
        echo chr($i)."&nbsp;";
    }
    echo "<br/>";
}
for($i=70;$i<=73;$i++){
    for($j=73;$j>=$i;$j--){
        echo chr($i)."&nbsp;";
    }
    echo "<br/>";
}
?>