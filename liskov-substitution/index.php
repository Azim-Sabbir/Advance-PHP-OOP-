<?php
require __DIR__ . "./vendor/autoload.php";

interface areaContract
{
    public function height($h);

    public function width($w);

    public function area();
}

class Rectangle implements areaContract
{
    private $height, $width;

    public function height($h)
    {
        $this->height = $h;
    }

    public function width($w)
    {
        $this->width = $w;
    }

    public function area()
    {
        return $this->height * $this->width;
    }
}

class Square implements areaContract
{
    public $height, $width;

    public function height($h)
    {
        $this->height = $h;
    }

    public function width($w)
    {
        $this->width = $w;
    }

    public function area()
    {
        return $this->height * $this->width;
    }
}
$area = new Square();
$area->width(12);
$area->height(12);
echo $area->area();