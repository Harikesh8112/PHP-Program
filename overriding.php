<?php
class A
{
    function m1()
    {
        echo"m1 of A <br/>";
    }
    function m2()
    {
        echo "m2 of A<br/>";
    }

}
class B extends A
{
    //Here we override m1() of class A
    function m1()
    {
        echo "m1 of class B <br/>";
    }
    function m3()
    {
        echo "m3 of B<br/>";
    }
}
$a=new A();
$a->m1(); //m1() class A
$a->m2(); //m2() class A
$b=new B();
$b->m1(); //m1() class A
$b->m2(); //m2() class A
$b->m3(); //m3() class B
?>