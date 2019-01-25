<?php
/**
 * Created by PhpStorm.
 * User: thienhmp
 * Date: 25/01/2019
 * Time: 14:41
 */

class Circle
{
    public $name;
    public $radius;
    public $color;

    public function __construct($name,$radius,$color)
    {
        $this->name = $name;
        $this->color = $color;
        $this->radius = $radius;
    }

    public function getName()
    {
        return $this->name;
    }


    public function getColor()
    {
        return $this->color;
    }


    public function getRadius()
    {
        return $this->radius;
    }

    public function setName($name)
    {
        $this->name = $name;
    }


    public function setColor($color)
    {
        $this->color = $color;
    }


    public function setRadius($radius)
    {
        $this->radius = $radius;
    }

    public function tinhChuvi(){
        return pi() * $this->radius *2;
    }
    public function tinhDientich(){
        return pi() * pow($this->radius,2);
    }

    public function __toString()
    {
       return "<h3>Circle Name: " . $this->getName() . "</h3>Radius: " . $this->getRadius() .
           "<br> Color: " . $this->getColor() . "<br>Area: " . $this->tinhDientich() . "<br>Perimeter: " . $this->tinhChuvi() . "<br>";
    }

}