<?php
class A
{
    function showA()
    {
        echo "This message from class A.<br/>";
    }
}
class B extends A
{
    function showB()
    {
        echo "This message from class B.<br/>";
    }
}
class C extends B
{
    function showC()
    {
        echo "This message from class C.<br/>";
    }
}
# How to test class
$c=new C();
$c->showA();
$c->showB();
$c->showC();

?>