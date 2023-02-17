<?php
//This script demonstrate concept of associative array.
$emp=array(
"empid"=>1001,
"empname"=>"Harikesh",
"salary"=>20000
);
// echo "Employee Id : ".$emp["empid"]."<br/>";
// echo "Employee Name : ".$emp["empname"]."<br/>";
// echo "Employee Salary : ".$emp["salary"]."<br/>";
foreach($emp as $k=>$v)
{
    echo $k."=".$v."<br/>";
}

?>