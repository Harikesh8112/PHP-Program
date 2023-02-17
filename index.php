<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Page</title>
</head>
<body>
    <?php
    //Here you can write php code 

    // echo "Welcome to world of php";

    // $myvar ="Hari";
    // echo "Hello ".$myvar;

    // $a=10;
    // $b=5;
    // echo "Summation =".($a+$b)."<br/>";
    // echo "Subtraction=".($a-$b)."<br/>";
    // echo "multiplication=".($a*$b)."<br/>";
    // echo "Division=".($a/$b)."<br/>";
    
    // $n=4;
    // if($n%2==0)
    // {
    //     echo $n." is Even <br/>";
    // }
    // else
    // {
    //     echo $n." is odd <br/>";
    // }
   
    //write php script to find greatest number in three numbers
    // $x=100;
    // $y=150;
    // $z=200;
    // if($x>$y && $x>$z)
    // {
    //     echo "Greatest Number ".$x;
    // }
    // else if($y>$x && $y>$z)
    // {
    //     echo "Greatest No ".$y;
    // }
    // else
    // {
    //     echo "Greatest No".$z;
    // }

    if(isset($_POST["calc"]))
    {
        $n1=$_POST["n1"];
        $n2=$_POST["n2"];
        $op=$_POST["op"];
        $res=0;
        if($op=="add")
        {
            $res=$n1+$n2;
        }
        else if($op=="sub")
        {
            $res=$n1-$n2;
        }
        else if($op=="multi")
        {
            $res=$n1*$n2;
        }
        else if($op=="div")
        {
            $res=$n1/$n2;
        }
        echo "<h3>Result=".$res."</h3>";
    }

    ?>
    <h2>Simple Calculator</h2>
    <form method="post">
        Enter first number:
        <input type="number" name="n1" require="true" /><br/><br/> 
        Enter second number:
        <input type="number" name="n2" require="true"/><br/><br/>
        select Operation: 
        <input type="radio" name="op" value="add"/>+
        <input type="radio" name="op" value="sub"/>-
        <input type="radio" name="op" value="multi"/>*
        <input type="radio" name="op" value="div"/>/
        <br/><br/>
        <input type="submit" name="calc" value="Calc"/>
    </form> <br/>
    <a href="salarycalc.php">Salary Calc</a><br><br>
    <a href="switchdemo.php">Switch Statemant Demo</a><br><br>
    <a href="assdemo.php">PHP Assignment - 1</a>
</body>
</html>