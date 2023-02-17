<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fibonacci series</title>
</head>
<body>
    <?php
    if(isset($_POST["calc"])){
        $n=$_POST["n"];
        $n1=0;
        $n2=1;
        echo $n1."  ".$n2;
        for($i=1;$i<=$n-2;$i++){
            $n3=$n1+$n2;
            echo $n3."&nbsp; ";
            $n1=$n2;
            $n2=$n3;
        }
    }
    ?>
    <h1>Fibonacci Series</h1>
    <form action="" method="post">
        Enter Number <input type="number" name="n" requried/><br><br>   
        <input type="submit" value="fibo"name="calc"><br><br>
    </form>
</body>
</html>