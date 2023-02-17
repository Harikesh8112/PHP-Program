<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Prime</title>
</head>
<body>
    <?php
    $msg="";
    if(isset($_POST["check"])){
        $n=$_POST["n"];
        $c=0;
        for($i=1;$i<=$n;$i++){
            if($n%$i==0){
                $c++;
            }
        }
        $msg=($c==2)?"Number is prime = ".$n :"Number is not Prime = ".$n;
       
    }
    ?>
    <h1>Chech is Prime Number</h1>
    <form action="" method="post">
        Enter a number <input type="number" name="n" requried="true"><br><br>
        <input type="submit" value="Chech" name="check"><br><br>
        <?php
        if(isset($msg) && $msg!=""){
            echo $msg;
        }
        ?>
    </form>
</body>
</html>