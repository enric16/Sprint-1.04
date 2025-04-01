<?php

class Rectangulo extends Shape {

    public function calcularArea() {
        return $this->get_height() * $this->get_width();
    }

    public function __toString() {
        return "El area del rectangulo es: " . $this->calcularArea() . "<br>";   
    }       

}

?>