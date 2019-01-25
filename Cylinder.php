<?php
/**
 * Created by PhpStorm.
 * User: thienhmp
 * Date: 25/01/2019
 * Time: 14:48
 */
include_once "Circle.php";

class Cylinder extends Circle
{
    public $height;

    public function __construct($name,$radius,$color,$height)
    {
        parent::__construct($name,$radius,$color);
        $this->height = $height;
    }

    public function getHeight()
    {
        return $this->height;
    }


    public function setHeight($height)
    {
        $this->height = $height;
    }

    public function tinhDientich()
    {
        return parent::tinhDientich()*2 + parent::tinhChuvi()* $this->height;
    }

    public function tinhChuvi()
    {
        return parent::tinhChuvi() * $this->height;
    }

    public function __toString()
    {
        return '<h3>Cylinder Name: '.$this->getName().'</h3>Radius: '.$this->getRadius().'<br>Color: '.$this->getColor().'<br>Height: '.$this->getHeight()
            ."<br>Area: ".$this->tinhDientich().'<br>Perimeter: '.$this->tinhChuvi();
    }
}

?>