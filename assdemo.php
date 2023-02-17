<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Assignment - 1</title>
</head>
<body>
    <!-- Qus no-4 -->
    <!-- <h2>Greatest number</h2> -->
    <?php
    //if(isset($_POST["gre"]))
   // { 
        // $n1=$_POST["n1"]; 
        // $n2=$_POST["n2"];
        // $n3=$_POST["n3"];
        // if($n1>$n2 && $n1>$n3)
        // {
        //     echo "<h3>Greatest No=".$n1."</h3>";
        // }
        // else if($n2>$n1 && $n2>$n3)
        // {
        //     echo "<h3>Greatest No=".$n2."</h3>";
        // }
        // else
        // {
        //     echo "<h3>Greatest NO=".$n3."</h3>";
        // }
        // }
        


    ?>
    <!-- <form method="post">
    Enter first number:
    <input type="number" name="n1" require="true"/><br><br>
    Enter second number:
    <input type="number" name="n2" require="true"/><br><br>
    Enter three number:
    <input type="number" name="n3" require="true"/><br><br>

    <input type="submit" value="Greatest" name="gre" />

    </form>
     -->
     <!-- Qus No-3 -->
     <?php
        if(isset($_POST["calc"]))
        {
            $unit=$_POST["unit"];
            $bill=0;
            if($unit<=150)
            {
                $bill=$unit*2.40;
            }
            else if($unit>150 && $unit<=300)
            {
                $bill=(150*2.40)+($unit-150)*3.00;
            }
            else
            {
                $bill=(150*2.40)+(150*3.00)+($unit-300)*3.20;
            }
            echo "<h3>Your Bill=".$bill."</h3>"; 
        }
     ?>
    <form method="post">
        <h2>Electric Bill Calculator</h2>
        Enter Unit:
        <input type="number" name="unit" required="true"/><br><br>
        <input type="submit" name="calc" value="Bill"/>
    </form>

        <!-- Qus No-1 -->
    <!-- <h3>Quadrant</h3> -->
    <?php
    // if(isset($_POST["calc"]))
    // {
    //     $x=$_POST["x"];
    //     $y=$_POST["y"];

    //     if($x>0 && $y>0)
    //     {
    //         echo "<h3>First Quadrant</h3>";
    //     }
    //     else if($x<0 && $y>0)
    //     {
    //         echo "<h3>Second Quadrant</h3>";
    //     }
    //     else if($x<0 && $y<0)
    //     {
    //         echo "<h3>Three Quadrant</h3>";
    //     }
    //     else if($x>0 && $y<0)
    //     {
    //         echo "<h3>Fourth Quadrant</h3>";
    //     }
    //     else if($x==0 && $y==0)
    //     {
    //         echo "<h3>Point is at origin</h3>";
    //     }
    //     else
    //     {
    //         echo "<h3>Either x-axis or y-axis</h3>";
    //     }
    // }
    ?>
     <!-- <form method="post">
       Enter value for x or Enter x number:
        <input type="number" name="x" required="true"/><br><br>
       Enter value for y or Enter y number:
        <input type="number" name="y" required="true"/><br><br>
        <input type="submit" name="calc" value="Quadrant"/>

    </form> -->
    <!-- Qus No-2 -->
    
    <?php
    // if(isset($_POST["calc"]))
    // {
    //     $t=$_POST["t"];
    //     $op=$_POST["op"];
    //     if($op=="ctof")
    //     {
    //         $f=(9*$t)/5+32;
    //         echo "Temperature in f=".$f;
    //     }
    //     else if($op=="ftoc")
    //     {
    //         $c=($t-32)*5/9;
    //         echo "Temperature in c=".$c;
    //     }
    //     else
    //     {
    //         echo "Invelid Operation";
    //     }
    // }
     ?>
    <!-- <form method="post">
    <h2>Temperature Convertor</h2>

        Enter Temperature:
        <input type="test" name="t" required="true"/><br/><br/>
        Select Operation :
        <input type="radio" name="op" value="ctof"/>Ctof
        <input type="radio" name="op" value="ftoc"/>Ftoc
        <br><br>
        <input type="submit" name="calc" value="Convertor"/>
    </form> -->

</body>
</html>