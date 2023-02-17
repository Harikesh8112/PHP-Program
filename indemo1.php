<?php
class Base 
{
    function showBase()
    {
        echo " This message form base class <br/>";
    }
}
class Derived extends Base 
{
    function showDerived()
    {
        echo " This is Derived class <br/>";
    }
}
$d=new Derived();
$d->showBase();
$d->showDerived();

?>