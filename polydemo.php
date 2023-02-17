<!-- method overloading -->
<?php
class Heri
{
    function __call($name, $age)
    {
        if($name=="age")
        {
            switch(count($age))
            {
                case 0:
                    return;
                break;

                case 1:
                    return $age[0]*$age[0];
                break;

                case 2:
                    return $age[0]*$age[1];
                break;
            }
        }

    }
}
$ha=new Heri();
echo "A = ".$ha->age(10)."<br/>";
echo "S = ".$ha->age(10,5)."<br/>";
?>
<br><br>

<!-- method overriding -->
<?php
class A
{
    function m1()
    {
        echo "I am m1 <br/>";
    }
    function m2()
    {
        echo "I am m2 <br/>";
    }
}
class B extends A
{
    function m1()
    {
        echo " This is m1 <br/>";
    }
    function m3()
    {
        echo "This is m3<br/>";
    }
}
$a=new A();
$a->m1();
$a->m2();
$b=new B();
$b->m1();
$b->m2();
$b->m3();
?>