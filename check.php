<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find Greatest number</title>
</head>
<body>
    <?php
    $g=0;
    if(isset($_POST["check"])){
        $n1=$_POST["n1"];
        $n2=$_POST["n2"];
        $n3=$_POST["n3"];
        // $g=($n1>$n2)?(($n1>$n3)?$n1:$n3):(($n2>$n3)?$n2:$n3);
        $g=($n1>$n2)?(($n2>$n3)?$n1:$n3):(($n2>$n3)?$n2:$n3);
        


        // if($n1>$n2 && $n1>$n3){
        //     echo "Greatest Number = ".$n1;
        // }elseif($n2>$n3 && $n2>$n1){
        //     echo "Greatest Number = ".$n2;
        // }else{
        //     echo "Greatest Number = ".$n3;
        // }
    }
    ?>

    <h1>Find Greatest Number </h1>
    <form method="post">    
        Enter First number <input type="number" name="n1" requried="true"/><br><br>
        Enter Second number <input type="number" name="n2" requried="true"/><br><br>
        Enter Third Number <input type="number" name="n3" requried="true"/><br><br>
        <input type="submit" value="Chech" name="check"><br><br>
        <?php
        if($g!=0 && isset($g)){
            echo "Greatest number = ".$g;
        }
        ?>
    </form>
</body>
</html>