<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Use of function</title>
</head>
<body>
    <?php
    function add($x,$y){
        return ($x+$y);
    }
    function sub($x,$y){
        return ($x-$y);
    }
    function mult($x,$y){
        return ($x*$y);
    }
    function div($x,$y){
        return ($x/$y);
    }
    if(isset($_POST["calc"])){
        $n1=$_POST["n1"];
        $n2=$_POST["n2"];
        $op=$_POST["op"];
        $s=0;
        if($op=="add"){
            $s=add($n1,$n2);
        }elseif($op=="sub"){
            $s=sub($n1,$n2);
        }elseif($op=="mult"){
            $s=mult($n1,$n2);
        }elseif($op=="div"){
            $s=div($n1,$n2);
        }
        
    }
    ?>
    <h2>Simple Colculator</h2>
    <form action="" method="post">
        <table border="1">
            <tr>
                <td>Enter First No</td>
                <td>
                    <input type="number" name="n1" required="true">
                </td>
            </tr>
            <tr>
                <td>Enter Second Number</td>
                <td>
                    <input type="number" name="n2" required="true">
                </td>
            </tr>
            <tr>
                <td>Select Operation</td>
                <td>
                    <input type="radio" name="op" value="add">+
                    <input type="radio" name="op" value="sub">-
                    <input type="radio" name="op" value="mult">*
                    <input type="radio" name="op" value="div">/
                </td>
            </tr>
            <tr>
                <td>
                    <?php
                    if(isset($s)){
                        echo "Result = ".$s;
                    }
                    ?>
                </td>
                <td>
                    <input type="submit" value="SUM" name="calc">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>