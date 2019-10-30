<?php
    class Triangle{
        public $height;
        public $bottomEdge;
        public $adjacentSide1;
        public $adjacentSide2;

        function __construct($bottomEdge, $adjacentSide1, $adjacentSide2, $height){
            $this->height = $height;
            $this->bottomEdge = $bottomEdge;
            $this->adjacentSide1 = $adjacentSide1;
            $this->adjacentSide2 = $adjacentSide2;
        }

        function perimeterTriangle(){
            return $this->bottomEdge + $this->adjacentSide1 + $this->adjacentSide2;
        }

        function acreageTriangle(){
            return $this->bottomEdge * $this->height /2;
        }
    } 
    $GT1 = new Triangle(5, 6, 7, 6);
    echo "Perimeter_triangle is: ". $GT1-> perimeterTriangle(). "cm";
    echo "<br>";
    echo "perimeter_triangle is ". $GT1-> acreageTriangle(). "cm2";
    echo "<br>";


    class Square {
        public $sqareEdge;

        function __construct($squareEdge){
            $this->squareEdge = $squareEdge;
        }

        function perimeterSquare(){
            return $this->squareEdge *4;
        }

        function acreageSquare(){
            return $this->squareEdge * $this->squareEdge;
        }
    }
    $GT2 = new Square(24);
    echo "Chu vi của hình vuông đó là: ". $GT2->perimeterSquare(). "cm";
    echo "<br>";
    echo "Diện tích hình vuông đó là: ". $GT2->acreageSquare() . "cm2";

?>