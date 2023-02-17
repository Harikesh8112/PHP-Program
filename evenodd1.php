<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>check even or odd</title>
</head>
<body>
    <?php
    $res="";
    if(isset($_POST["calc"])){
        $n=$_POST["n"];
        $res=($n%2==0)? "Number is even":"Number is odd";

    }
    ?>
    <h2>Check Even odd</h2>
    <form action="" method="post">
        Enter a number <input type="number" name="n" requried/><br><br>
        <input type="submit" value="Check" name="calc"/><br><br>
        <?php
        if(isset($res)){
        echo $res;
        }
        ?>
    </form>
</body>
</html>