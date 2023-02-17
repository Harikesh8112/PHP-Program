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
            echo "Roll No = ".$this->rollno."  ";
            echo "Name  = ".$this->name."  ";
            echo "Fee = ".$this->fee."<br/> <br/>";
        }
    }
    //Now we text class Student
    $s1=new Student(1001,"Ram",20000.0);
    $s2=new Student(1001,"Shayam",20000.0);
    $s1->display();
    $s2->display();
?>