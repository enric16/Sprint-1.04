<?php

class Triangulo extends Shape {

    public function __construct(int|float $height, int|float $width) {
        parent::__construct($height, $width);
    }

    public function calcularArea() {
        return ($this->get_height() * $this->get_width()) / 2;
    }

    public function __toString() {
        return "El area del triangulo es: " . $this->calcularArea() . "<br>";   
    }   

}

?>