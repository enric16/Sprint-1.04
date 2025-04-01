<?php

class Employee {
    private $name;
    private $salary;

    public function initialize(string $name, int|float $salary) {
        $this->name = $name;
        $this->salary = $salary;
    }

    public function print() {
        $taxes = "";

        if ($this->salary > 6000) {
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

?>