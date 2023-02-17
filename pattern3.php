<?php
for($i=1;$i<=5;$i++){
    for($k=4;$k>=$i;$k--){
        echo "&nbsp;";
    }

    for($j=1;$j<=$i;$j++){
        echo " &nbsp;* ";
    }
    echo "<br/>";
}
for($i=65;$i<=69;$i++){
    for($k=69;$k>=$i;$k--){
        echo "&nbsp;";
    }

    for($j=65;$j<=$i;$j++){
        echo chr($i)." &nbsp;" ;
    }
    echo "<br/>";
}

?>