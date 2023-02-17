<?php
class Employee
{
    public $empid;
    public $empname;
    public function seyValue($empid,$empname)
    {
        $this->empid=$empid;
        $this->empname=$empname;
    }
    public function display()
    {
        echo "Employee Id = ".$this->empid."<br/>";
        echo "Employee Name = ".$this->empname."<br/>";
    }
}
$emp=new Employee();
$emp->seyValue(1001,"Harikesh");
$emp->display();
?>