<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_POST["clac"])){
        $n=$_POST["n"];
        $sum=0;
        while($n!=0){
            $res=$n%10;
            $sum=$sum+$res*$res*$res;
            $n=$n/10;
        }
        echo $sum;
    }

    ?>
    <h1>Armstrong number</h1>
    <form action="" method="post">
        Enter A number <input type="number" name="n" requried/><br><br>
        <input type="submit" value="Armstrong" name="clac"><br><br>
    </form>
</body>
</html>