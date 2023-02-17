<!-- Single Inheritance -->
<?php
class X
{
    function ram()
    {
        echo "Ram is ";
    }
}
class Y extends X
{
    function ram1()
    {
        echo "go to market <br/><br/>";
    }
}
$z=new Y();
$z->ram();
$z->ram1();
?>

<!-- Hierachical inheritance -->
<?php
class A
{
    function hari()
    {
        echo "I am Hari";
    }
}
class B extends A
{
    function hari1()
    {
        echo "I am go";
    }
}
class C extends A
{
    function hari2()
    {
        echo "iiii <br/><br/>";
    }
}

$x=new B();
$x->hari();
$x->hari1();
$y=new C();
$y->hari();
$y->hari2();
?>


<!-- Multi-Level inheritance -->
<?php
// class A
// {
//     function demo()
//     {
//         echo "class A";
//     }
// }
// class B extends A
// {
//     function demo1()
//     {
//         echo "class B";
//     }
// }
// class S extends B
// {
//     function demo2()
//     {
//         echo "class S";
//     }
// }
// $sa=new S();
// $sa->demo();
// $sa->demo1();
// $sa->demo2();
?>

