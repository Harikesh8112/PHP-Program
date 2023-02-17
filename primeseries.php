<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Series of Prime Number</title>
</head>
<body>
    <?php
    if(isset($_POST["calc"]))
    {
        $n1=$_POST["n1"];
        $n2=$_POST["n2"];
        for($i=$n1;$i<=$n2;$i++) //outer for loop
        {
            $c=0;
            for($j=1;$j<=$i;$j++) //Inner for loop
            {
                if($i%$j==0)
                {
                    $c++;
                }
            }
            if($c==2)
            {
                echo $i." &nbsp; ";
            }
        }
    }
    ?>
    <h2>Series of Prime Number</h2>
    <form method="post">
        Enter lower limit:
        <input type="number" name="n1"  required="true"/><br/><br/>
        Enter upper limit:
        <input type="number" name="n2" required="true"/><br><br>
        <!-- <input type="submit" value="clac" name="calc"/> -->
        <button name="calc">Submit</button>
    </form>
</body>
</html>