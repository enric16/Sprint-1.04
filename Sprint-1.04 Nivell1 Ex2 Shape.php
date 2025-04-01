<?php

class Shape {
    protected $height;
    protected $width;

    public function __construct(int|float $height, int|float $width) {
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

?>