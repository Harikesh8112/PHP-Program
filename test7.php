<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table </title>
</head>
<body>
    <?php
    if(isset($_POST["table"])){
        $n=$_POST["n"];
        $res=0;
        for($i=1;$i<=10;$i++){
            $res=$n*$i;
            echo $res."<br/>";
        }
    }
    ?>
    <h1>Table the number </h1>
    <form action="" method="post">
        Enter the number <input type="number" name="n" requried/><br/><br/>
        <input type="submit" value="submit" name="table"><br><br>
    </form>
</body>
</html>