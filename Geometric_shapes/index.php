<?php
class Shape
{
    // Empty base class for future enhancements
}

class Circle extends Shape
{
    private $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function getRadius()
    {
        return $this->radius;
    }

    public function setRadius($radius)
    {
        if ($radius > 0) {
            $this->radius = $radius;
        } else {
            echo "Invalid radius\n";
        }
    }

    public function calculateArea()
    {
        return M_PI * pow($this->radius, 2);
    }
}

class Rectangle extends Shape
{
    private $width;
    private $height;

    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function getWidth()
    {
        return $this->width;
    }

    public function setWidth($width)
    {
        if ($width > 0) {
            $this->width = $width;
        } else {
            echo "Invalid width\n";
        }
    }

    public function getHeight()
    {
        return $this->height;
    }

    public function setHeight($height)
    {
        if ($height > 0) {
            $this->height = $height;
        } else {
            echo "Invalid height\n";
        }
    }

    public function calculateArea()
    {
        return $this->width * $this->height;
    }
}

// Example usage
$circle = new Circle(5);
echo "<h5> Circle Area: </h5>" . $circle->calculateArea() . "\n";

echo "<br>";

$rectangle = new Rectangle(4, 6);
echo "<h5> Rectangle Area: </h5>" . $rectangle->calculateArea() . "\n";
