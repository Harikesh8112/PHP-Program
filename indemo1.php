<?php
class User
{
    public $name;
    public $age;
    function setValue($name,$age)
    {
        $this->name=$name;
        $this->age=$age;
    }
    function displayName()
    {
        echo "Hello ".$this->name." You look ";
    }

}
class Magic extends User
{
    function play()
    {
        if($this->age<=50)
        {
            $this->age+=10;
        }
        else
        {
            $this->age-=10;
        }
        echo $this->age." Your age old.<br/>";
    }
}
$m=new Magic();
$m->setValue("Ram",30);
$m->displayName();
$m->play();

?>