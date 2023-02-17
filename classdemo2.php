<?php
class Employee
{
    public $empid;
    public $empname;
    public $salary;

    function setValue($empid,$empname,$salary)
    {
        $this->empid=$empid;
        $this->empname=$empname;
        $this->salary=$salary;
    }

    function display()
    {
        echo "Employee id = ".$this->empid."<br/>";
        echo "Employee Name = ".$this->empname."<br/>";
        echo "Employee Salary = ".$this->salary."<br/>";
    }
}
$em=new Employee();
$em->setValue(1001,"hari",25000);
$e2=new Employee();
$e2->setValue(1002,"anil",25000);
$em->display();
$e2->display();

?>
