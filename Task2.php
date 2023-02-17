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
    if(isset($_POST["calc"])){
        $n=$_POST["n"];
         $r;
        $re=0;
      
        while($n>0){
            $r=$n%10;
            $re=$re*10+$r;
            $n=$n/10;
        }
        echo $re;

    }
    ?>

    <h1>Reverse number</h1>
    <form method="post">
        <input type="number" name="n" required="true"/><br><br>
        <input type="submit" value="reverse" name="calc"/>
    </form>


<!-- <h1>Decimal to Binary number</h1>
    <?php
    // if(isset($_POST["calc"])){
    //     $n=$_POST["n"];
    //     echo "Binary number = ";
    //     echo decbin($n)."<br/>";
    // }
    ?>
    <form method="post">
        <input type="number" name="n" required="true"/><br><br>
        <input type="submit" value="reverse" name="calc"/>
    </form> -->


</body>
</html>