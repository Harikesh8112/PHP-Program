<?php
class Shape
{
    function __call($name,$args)
    {
        if($name=="area")
        {
            switch(count($args))
            {
                case 0:
                    return 0;
                break;

                case 1:
                    return $args[0]*$args[0];
                break;

                case 2:
                    return $args[0]*$args[1];
                break;

                case 3:
                    return $args[0]*$args[1]*$args[2];
                break;
            }
        }
    }
}
$sh=new Shape();
echo "Area of square = ".$sh->area(10)."<br/>";
echo "Area of rectangle = ".$sh->area(10,5)."<br/>";
echo "Area of L*H*B = ".$sh->area(10,10,10)."<br/>";
echo "Area = ".$sh->area()."<br/>";
?>