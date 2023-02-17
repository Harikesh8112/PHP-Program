<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>find sum</title>
</head>
<body>
 <?php
//  if(isset($_POST["calc"])){
//     $n = $_POST["n"];
    
//     $s=0;
//     while($n>0){
//         $r=$n%10;
//         $s=$s+$r;
//         $n=$n/10;
//     }
//     echo "Sum".$s;
   
//  }
 ?>
<!-- 
      <h1>Find sum in given number</h1>
     <form method="post">
        <input type="number" name="n"/><br><br>
        <input type="submit" value="sum" name="calc">
     </form> -->

<!-- Qua no 4 -->
<h1>Even number</h1>
<?php
if(isset($_POST["calc"])){
    $n1=$_POST["n1"];
    $n2=$_POST["n2"];
    for($i=$n1;$i<=$n2;$i++){
        if($i%2==0){
            echo "  ".$i;
        }
    }
}
?>
<form method="post">
   Enter a lower limit : <input type="number" name="n1" required="true"/><br><br>
    Enter a upper limit : <input type="number" name="n2" required="true"/><br><br>
    <input type="submit" name="calc" value="calc"/>
</form>
</body>
</html>