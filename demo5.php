<?php
for($i=65;$i<=69;$i++){
    for($a=68;$a>=$i;$a--){
        echo " &nbsp; ";
    }
    for($j=65;$j<=$i;$j++){
        echo chr($i)." &nbsp;   ";
    }
    echo "<br/>";
}

?>