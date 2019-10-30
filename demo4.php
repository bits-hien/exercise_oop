<?php
    class Triangle{
        public $height;
        public $bottom_edge;
        public $adjacent_side1;
        public $adjacent_side2;

        function __construct($bottom_edge, $adjacent_side1, $adjacent_side2, $height){
            $this->height = $height;
            $this->bottom_edge = $bottom_edge;
            $this->adjacent_side1 = $adjacent_side1;
            $this->adjacent_side2 = $adjacent_side2;
        }

        function perimeter_triangle(){
            return $this->bottom_edge + $this->adjacent_side1 + $this->adjacent_side2;
        }

        function acreage_triangle(){
            return $this->bottom_edge * $this->height /2;
        }
    } 
    $GT1 = new Triangle(5, 6, 7, 6);
    echo "Perimeter_triangle is: ". $GT1-> perimeter_triangle(). "cm";
    echo "<br>";
    echo "perimeter_triangle is ". $GT1-> acreage_triangle(). "cm2";
    echo "<br>";


    class Square {
        public $sqare_edge;

        function __construct($square_edge){
            $this->square_edge = $square_edge;
        }

        function perimeter_square(){
            return $this->square_edge *4;
        }

        function acreage_square(){
            return $this->square_edge * $this->square_edge;
        }
    }
    $GT2 = new Square(24);
    echo "Chu vi của hình vuông đó là: ". $GT2->perimeter_square(). "cm";
    echo "<br>";
    echo "Diện tích hình vuông đó là: ". $GT2->acreage_square() . "cm2";
?>