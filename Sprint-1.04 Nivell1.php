<?php
//EXERCICI 1
echo "<h4>" . "Exercici 1" . "</h4>";

class Employee {
    //Atributs
    private $name;
    private $salary;

    public function initialize($name, $salary) {
        $this->name = $name;
        $this->salary = $salary;
    }

    public function print() {
        $taxes = "";

        if ($this->salary >= 6000) {
            $taxes = "Paga impostos";
        } else {
            $taxes = "No paga impostos";
        }
        
        echo $this->name . ". " . $taxes . "<br>";
    }

}

$employee1 = new Employee();
$employee2 = new Employee();
$employee1 -> initialize("Paco", 6500);
$employee2 -> initialize("Montse", 2500);
$employee1 -> print();
$employee2 -> print();

//EXERCICI 2
echo "<h4>" . "Exercici 2" . "</h4>";

class Shape {
    //Atributs
    private $height;
    private $width;

    public function __construct($height, $width) {
        $this->height = $height;
        $this->width = $width;    
    }

    public function get_height() {
        return $this->height;
    }

    public function get_width() {
        return $this->width;
    }
}

class Triangulo extends Shape {

    public function calcularArea() {
        return ($this->get_height() * $this->get_width()) / 2;
    }

    public function __toString() {
        return "El area del triangulo es: " . $this->calcularArea() . "<br>";   
    }   

}

class Rectangulo extends Shape {

    public function area() {
        return $this->get_height() * $this->get_width();
    }

    public function __toString() {
        return "El area del rectangulo es: " . $this->area() . "<br>";   
    }       

}

$triangulo1 = new Triangulo (20,5);
$triangulo2 = new Triangulo (10, 2);
$rectangulo1 = new Rectangulo (15, 6);
$rectangulo2 = new Rectangulo (18, 2);

echo $triangulo1;
echo $triangulo2;
echo $rectangulo1;
echo $rectangulo2;

?>