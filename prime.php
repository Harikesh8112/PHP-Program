<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime number</title>
</head>
<body>
<h1>Prime Number</h1>
    <?php
     
    if(isset($_POST["calc"]))
    {
        $n=$_POST["n"];
        $c=0;
        for($i=1;$i<=$n;$i++)
        {
            if($n%$i==0)
            {
                $c++;
            }
        }
        if($c==2)
        {
            echo $n." is prime number";
        }
        else
        {
            echo $n." is not prime number";
        }
        
        
    }
    ?>
    <form method="post">
        Enter a number:
        <input type="number" name="n" required="true"/><br/><br/>
        <input type="submit" value="calc" name="calc"/>
    </form>
</body>
</html>