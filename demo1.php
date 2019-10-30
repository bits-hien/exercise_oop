<?php
    class people {
        public $name;
        public $age;
        public $height;
        public $weight;
        function thongtin(){
            $s = $this->name;
            $s.= " ";
            $s.= $this->age;
            $s.= " ";
            $s.= $this->height;
            $s.= " ";
            $s.= $this->weight;
            return $s;
        }
    }
    $people1 = new people();
    $people1->name = "Nguyễn Thị Hiên";
    $people1->age = "29 tuổi";
    $people1->height = "160cm";
    $people1->weight = "64kg";
    $people2 = new people();
    $people2->name = "Nguyễn Thị Hiên";
    $people2->age = "29 tuổi";
    $people2->height = "160cm";
    $people2->weight = "64kg";
    // echo $people1->name. " ". $people1->age. " ". $people1->height. " ". $people1->weight;
    
    echo $people1->thongtin(). "<br>";
    echo $people2->thongtin();

?>