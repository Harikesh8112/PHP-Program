<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reveres digit</title>
</head>
<body>
    <?php
    if(isset($_POST["reve"])){
        $n=$_POST["n"];
        $reve="";
        $count=strlen($n)-1;
        for($i=$count;$i>=0;$i--){
            $reve.=$n[$i];
        }
        echo $reve;
    }
    ?>
    <h1>Reveres digits</h1>
   <form action="" method="post">
   Enter number <input type="text" name="n" /><br><br>
    <input type="submit" value="reveres" name="reve"> <br><br>
   </form>
</body>
</html>