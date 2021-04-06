<?php

class Circle
{
  protected $radius = 10;
  protected $color = 10;

  public function getRadius()
  {
    return $this->radius;
  }

  public function setRadius($radius)
  {
    $this->radius = $radius;

    return $this;
  }

  public function getColor()
  {
    return $this->color;
  }

  public function setColor($color)
  {
    $this->color = $color;

    return $this;
  }

  public function getPerimeter()
  {
    return floatval(pi() * $this->radius * 2);
  }

  public function getAcreage()
  {
    return floatval(pi() * ($this->radius ** 2));
  }

  public function __toString()
  {
    return "Đây là hình tròn có bán kính $this->radius và có màu $this->color";
  }
}

class Cylinder extends Circle
{
  protected $height = 10;

  public function getHeight()
  {
    return $this->height;
  }

  public function setHeight($height)
  {
    $this->height = $height;

    return $this;
  }

  public function __toString()
  {
    return "Đây là hình trụ có bán kính $this->radius, chiều cao là $this->height và có màu $this->color";
  }

  public function getVolume()
  {
    return floatval($this->getAcreage() * $this->height);
  }
}

$cylinder = new Cylinder;

echo $cylinder->getVolume();
