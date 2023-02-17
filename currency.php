<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>currancy Convertor</title>
</head>
<body>
    <h1>Currancy convertor</h1>
    <?php
    function dtor($c){
       return ($c*70);
    }
    function rtod($c){
       return ($c/70);
    }
    if(isset($_POST["calc"]))
    {
        $c=$_POST["c"];
        $op=$_POST["op"];
        $res=0;
        if($op=="dtor"){
            $res=dtor($c);
        }elseif($op=="rtod"){
            $res=rtod($c);
        }else{
            $res="Please Select Operation";
        }
    }

    ?>
    <form action="" method="post">
        <table border="1">
            <tr>
                <td>Enter Currancy</td>
                <td>
                    <input type="number" name="c" requried="true">
                </td>
            </tr>
            <tr>
                <td>Select Operation</td>
                <td>
                    <input type="radio" name="op" value="dtor">Dtor
                    <input type="radio" name="op" value="rtod">Rtod
                </td>
            </tr>
            <tr>
                <td>
                    <?php
                    if(isset($res)){
                        echo "Result = ".$res;
                    }
                    ?>
                </td>
                <td>
                    <input type="submit" value="Convert" name="calc">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>