<?php
class Student
{
    public $rollno;
    public $name;
    public $fee;

    function __construct($rollno,$name,$fee)
    {
        $this->rollno=$rollno;
        $this->name=$name;
        $this->fee=$fee;
    }
    function display()
    {
        echo "Student Roll No = ".$this->rollno."<br/>";
        echo "Student Name = ".$this->name."<br/>";
        echo "Student Fee = ".$this->fee."<br/>";
    }
}
$s1=new Student(1001,"Anil",25000);
$s1->display();
$s2=new Student(1002,"Mandeep",25000);
$s2->display();
$s3=new Student(1003,"Ram",25000);
$s3->display();


?>