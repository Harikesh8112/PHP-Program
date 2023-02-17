<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sum Digits</title>
</head>
<body>
    <?php
    function add($x,$y){
        return ($x+$y);
    }
    if(isset($_POST["sum"])){
        $n1=$_POST["n1"];
        $n2=$_POST["n2"];
        $res = add($n1,$n2);
    }

    ?>
    <h1>SUM DIGIT</h1>
    <form action="" method="post">
        Enter First Number <input type="number" name="n1" requried><br><br>
        Enter Second Number <input type="number" name="n2" requried/><br><br>   
        <input type="submit" value="Sun" name="sum"><br><br>
        <?php
        if(isset($res)){
            echo "Sum Digit = ".$res;
        }

        ?>
    </form>
</body>
</html>