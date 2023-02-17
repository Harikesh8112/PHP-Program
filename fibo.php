<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fibonacci Series</title>
</head>
<body>
    <?php
    if(isset($_POST["calc"]))
    {
        $n=$_POST["n"];
        $n1=0;
        $n2=1;
        echo $n1." &nbsp; ".$n2." &nbsp; <br/> ";
        for($i=1;$i<=$n-2;$i++)
        {
            $n3=$n1+$n2;
            echo $n3." &nbsp; ";
            $n1=$n2;
            $n2=$n3;
        }
    }
    ?>
    <h2>Fibonacci Series</h2>
    <form method="post">
        Enter number of terms in series:
        <input type="number" name="n" required="true"/><br><br>
        <input type="submit" value="calc" name="calc"/>

    </form>
</body>
</html>