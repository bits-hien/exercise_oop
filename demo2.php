<?php
    class Car {
        public $name;
        public $color;
        function __Construct($name, $color){
            $this->name = $name;
            $this->color = $color;
        }
        function get_name(){
            return $this->name; 
        }
        function get_color(){
            return $this->color;
        }
        
    }
    $toyota = new Car("Japan", "white");
    echo "$toyotal là hãng xe của ". $toyota->get_name();
    echo "Màu đẹp nhất là ". $toyota->get_color();
?>