<?php
    class Caculator {
        public $first;
        public $second;

        function __construct($first, $second){
            $this->first = $first;
            $this->second = $second;
        }

        function add(){
            return $this->first + $this->second;
        }

        function subtraction(){
            return $this->first - $this->second;
        }

        function multiplication(){
            return $this->first * $this->second;
        }

        function division(){
            if ($second = 0){
                return false;
            } else {
                return $this->first / $this->second;
            }
        }    
    }
   $GT1 = new Caculator(5, 0);
   echo $GT1->add();
   echo "<br>";
   echo $GT1->subtraction();
   echo "<br>";
   echo $GT1->multiplication();
   echo "<br>";
   echo $GT1->division();
   
?>