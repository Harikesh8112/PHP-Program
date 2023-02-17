<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function fact($n){
        if($n==0 || $n==1){
            return 1;
        }else{
            return $n*fact($n-1);
        }
    }
    if(isset($_POST["calc"])){
        $n=$_POST["n"];
        $f=fact($n);
        

    }
    ?>
    <h2>Find Factorial of Given Number</h2>
    <form action="" method="post">
        <table border="1">
            <tr>
                <td>Enter a Number</td>
                <td>
                    <input type="number" name="n" required>
                </td>
            </tr>
            <tr>
                <td>
                    <?php
                    if(isset($f)){
                        echo "Result = ".$f;
                    }
                    ?>
                </td>
                <td>
                    <input type="submit" value="Calc" name="calc">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>