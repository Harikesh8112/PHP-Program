<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial</title>
</head>
<body>
    <?php
    function fact($n){
        if($n==0 || $n==1){
            return 1;
        }else{
            return $n*fact($n-1);
        }
    }
    if(isset($_POST["fact"])){
        $n=$_POST["n"];
        $res=fact($n);
        echo $res;
    }
    ?>
    <h1>Factorial Number</h1>
    <form action="" method="post">
        Enter Number <input type="number" name="n" requried/> <br><br>
        <input type="submit" value="Factorial" name="fact"><br><br>
    </form>
</body>
</html>