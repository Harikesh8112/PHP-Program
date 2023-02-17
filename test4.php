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
    if(isset($_POST["pali"])){
        $n=$_POST["n"];
        $res= strrev($n);
        if($n==$res){
            echo "$n is Palindrome ";
        }else{
            echo "$n is not Palidrome";
        }
    }
    ?>
    <h1>Palidorome number</h1>
    <form action="" method="post">
        Enter Palindorme number <input type="text" name="n" requried><br><br>
        <input type="submit" value="palindrome" name="pali">
    </form>
</body>
</html>