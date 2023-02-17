<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salary Calculator</title>
</head>
<body>
<h2>Salary Calculator</h2>
    <?php
    if(isset($_POST["calc"]))
    {
        $n1=$_POST["n1"];
        $hra=0;
        $gs=0;
        $da=0;
        if($n1<=4000)
        {
            $hra=$n1*10/100;
            $da=$n1*50/100;
        }
        else if($n1>4001 && $n1<8000)
        {
            $hra=$n1*20/100;
            $da=$n1*60/100;
        }
        else if($n1>8001 && $n1<12000)
        {
            $hra=$n1*25/100;
            $da=$n1*70/100;
        }
        else
        {
            $hra=$n1*30/100;
            $da=$n1*80/100;
        }
        $gs=$n1+$hra+$da;
        echo "<h3>Basic Salary=".$n1."</h3>";
        echo "<h3>House Rest Allownces=".$hra."</h3>";
        echo "<h3>Deanress Allownces=".$da."</h3>";
        echo "<h3>Gross Salary=".$gs."</h3>";
    }
    ?>
    
    <form method="post">
    Enter basic salary:
    <input type="number" name="n1" require="true" />
    <br><br>
    <input type="submit" value="Calc" name="calc">

    </form>
</body>
</html>