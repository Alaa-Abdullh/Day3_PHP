<?php
interface Shape {
    public function setColor($color): void;
    public function getColor(): string;
    public function isFilled(): bool;
    public function setFilled($filled): void;
    public function __toString(): string;
}
   

class Circle implements Shape {
    private $radius;
    private $color;
    private $filled;

    public function __construct($radius = 1.0, $color = "red", $filled = true) {
        $this->radius = $radius;
        $this->color = $color;
        $this->filled = $filled;
    }

    public function setRadius($radius) {
        $this->radius = $radius;
    }

    public function getRadius() {
        return $this->radius;
    }

    public function setColor($color): void {
        $this->color = $color;
    }
    
    public function getColor(): string {
        return $this->color;
    }

    public function setFilled($filled): void {
        $this->filled = $filled;
    }
    
    public function isFilled(): bool {
        return $this->filled;
    }

    public function getArea() {
        return pi() * pow($this->radius, 2);
    }

    public function getPerimeter(): float {
        return 2 * pi() * $this->radius;
    }

    public function __toString(): string {
        return "Circle[Shape[color=" . $this->color . ", filled=" . ($this->filled ? "true" : "false") . "], radius=" . $this->radius . "]";
    }
}
// rectangle

class Rectangle implements Shape {
    private $width;
    private $length;
    private $color;
    private $filled;

    public function __construct($width = 1.0, $length = 1.0, $color = "red", $filled = true) {
        $this->width = $width;
        $this->length = $length;
        $this->color = $color;
        $this->filled = $filled;
    }

    public function setColor($color): void {
        $this->color = $color;
    }
    
    public function getColor(): string {
        return $this->color;
    }

    public function setFilled($filled): void {
        $this->filled = $filled;
    }
    
    public function isFilled(): bool {
        return $this->filled;
    }

    public function setWidth($width) {
        $this->width = $width;
    }

    public function getWidth() {
        return $this->width;
    }

    public function setLength($length) {
        $this->length = $length;
    }

    public function getLength() {
        return $this->length;
    }

    public function getArea(): float {
        return $this->width * $this->length;
    }

    public function getPerimeter(): float {
        return 2 * ($this->width + $this->length);
    }

    public function __toString(): string {
        return "Rectangle[Shape[color=" . $this->color . ", filled=" . ($this->filled ? "true" : "false") . "], width=" . $this->width . ", length=" . $this->length . "]";
    }
}

// squere
class Square extends Rectangle {
    public function __construct($side = 1.0, $color = "red", $filled = true) {
        parent::__construct($side, $side, $color, $filled);
    }

    public function setSide($side) {
        parent::setWidth($side);
        parent::setLength($side);
    }

    public function getSide() {
        return parent::getWidth();
    }

    public function __toString(): string {
        return "Square[" . parent::__toString() . "]";
    }
}


echo ".........object in circle.........<br>";
$circle = new Circle(3.5, "orange", true);
echo $circle->__toString() . "<br>";
echo "Area: " . $circle->getArea() . "<br>";
echo "Perimeter: " . $circle->getPerimeter() . "<br>";

echo "..........object in Rectangle........<br>";
$rectangle = new Rectangle(3.5, 4.3, "blue", false);
echo $rectangle->__toString() . "<br>";
echo "Area: " . $rectangle->getArea() . "<br>";
echo "Perimeter: " . $rectangle->getPerimeter() . "<br>";

echo "..........object in Square........<br>";
$square = new Square(5.5, "green", true);
echo $square->__toString() . "<br>";
echo "Area: " . $square->getArea() . "<br>";
echo "Perimeter: " . $square->getPerimeter() . "<br>";


?>
