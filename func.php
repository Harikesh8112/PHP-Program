<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Simple Calculator</h2>
    <?php
    function add($x,$y)
    {
        return($x+$y);
    }
    function sub($x,$y)
    {
        return($x-$y);
    }
    function mult($x,$y)
    {
        return($x*$y);
    }
    function div($x,$y)
    {
        return($x/$y);
    }
    if(isset($_POST["calc"]))
    {
        $n1=$_POST["n1"];
        $n2=$_POST["n2"];
        $op=$_POST["op"];
        if($op=="add")
        {
            echo "Addition = ".add($n1,$n2)."<br/><br/>";
        }
        elseif($op=="sub")
        {
            echo "Subtraction = ".sub($n1,$n2)."<br/><br/>";
        }
        elseif($op=="mult")
        {
            echo "Subtraction = ".mult($n1,$n2)."<br/><br/>";
        }
        elseif($op=="div")
        {
            echo "Subtraction = ".div($n1,$n2)."<br/><br/>";
        }
        else
        {
            echo "Invalid Opretion <br/><br/>";
        }
    }
    ?>
    <form action="" method="post">
        Enter the first number:
        <input type="number" name="n1" required="true"><br><br>
        Enter the second number:
        <input type="number" name="n2" required="true"><br><br>
        select Operation:
        <input type="radio" name="op" value="add">+
        <input type="radio" name="op" value="sub">-
        <input type="radio" name="op" value="mult">*
        <input type="radio" name="op" value="div">/
        <br><br>
        <input type="submit" value="calc" name="calc"/>
    </form>
</body>
</html>