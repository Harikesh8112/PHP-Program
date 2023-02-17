<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        calculetar
    </h1>
    <form action="" method="post">
    A <input type="number" name="n1" ><br><br>
    B <input type="number" name="n2" ><br><br>
    select option 
    <input type="radio" name="op" value="add">+
    <input type="radio" name="op" value="sub">-
     <input type="submit" name="sum" value="sum" ><br><br>
    </form>
    <?php
    function add($x,$y){
        return ($x+$y);
    }
    function sub($x,$y){
        return ($x-$y);
    }
    if(isset($_POST["sum"])){
        $n1=$_POST["n1"];
        $n2=$_POST["n2"];
        $op=$_POST["op"];
        if($op=="add"){
           $s= add($n1,$n2);
        }elseif($op=="sub"){
           $s= sub($n1,$n2);
        }
        echo $s;
    }
    ?>
</body>
</html>