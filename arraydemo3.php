<?php
//write a php script to create an array with five names.Now disply names in ascending and desceding order.
$names=array("Rohit","Mohit","Shobhit","Ram","Sohan");
echo "<h2>NAMES OF WY FRIENDS.</h2>";
foreach ($names as $n){
    echo $n."<br/>";
}
sort($names); //this functin sorts array element
echo "<h2>Names is ascendind order</h2>";
foreach($names as $n){
    echo $n."<br/>";
}
rsort($names); //This functin reverse array elements.
echo "<h2>Names is descendind order</h2>";
foreach($names as $n){
    echo $n."<br/>";
}

?>