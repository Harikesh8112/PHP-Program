<?php
class Shape
{
    function showShape()
    {
        echo "this shape is : <br/> ";
    }

}
class Square extends Shape
{
    function showSquare()
    {
        echo "Square <br/>";
    }
}
class Cube extends Shape
{
    function showCube()
    {
        echo "Cube <br/>";
    }
}
#Now we text classes
$sq=new Square();
$sq->showShape();
$sq->showSquare();
$cu=new Cube();
$cu->showShape();
$cu->showCube();


?>