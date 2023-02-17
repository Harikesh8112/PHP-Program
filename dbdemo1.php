<?php
$servername="localhost";
$username="root";
$password="";
$databasename="abc";
try{
$con=mysqli_connect($servername,$username,$password,$databasename);
}
catch(Exception $e)
{
    echo "Somethin went wrong";
}
?>