<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For loop</title>
</head>
<body>
    <?php
    // for($x=1;$x<=10;$x++)
    // {
    //     echo $x."<br/>";
    // }

    // $x=10;
    // do
    // {
    //     echo $x."<br/>";
    //     $x--;
    // }
    // while
    // {
    //     echo $x."<br/>";
    //     $x--;
    // }

    if(isset($_POST["calc"]))
    {
        $n=$_POST["n"];
        $i;
        for($n>0;$i=$n*$n;$n--)
        {
            echo $i." <br/> ";
        }
    }
    ?>
    <form method="post">
        Enter a number:
        <input type="number" name="n" required="true"/><br><br>
        <input type="submit" name="calc" value="calc"/>
    </form>
</body>
</html>