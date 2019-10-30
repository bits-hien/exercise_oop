<?php
    class Tam_giac{
        public $chieu_cao;
        public $canh_day;
        public $canh_ke1;
        public $canh_ke2;

        function __construct($canh_day, $canh_ke1, $canh_ke2, $chieu_cao){
            $this->chieu_cao = $chieu_cao;
            $this->canh_day = $canh_day;
            $this->canh_ke1 = $canh_ke1;
            $this->canh_ke2 = $canh_ke2;
        }

        function chu_vi(){
            return $this->canh_day + $this->canh_ke1 + $this->canh_ke2;
        }

        function dien_tich(){
            return $this->canh_day * $this->canh_ke1 /2;
        }
    } 
    $GT1 = new Tam_giac(5, 6, 7, 6);
    echo "Chu vi của hình tam giác đó là: ". $GT1-> chu_vi(). "cm";
    echo "<br>";
    echo "Diện tích hình tam giác đó là: ". $GT1-> dien_tich(). "cm2";
    echo "<br>";


    class Hinh_vuong {
        public $canh;

        function __construct($canh){
            $this->canh = $canh;
        }

        function chu_vi_HV(){
            return $this->canh *4;
        }

        function S(){
            return $this->canh * $this->canh;
        }
    }
    $GT2 = new Hinh_vuong(24);
    echo "Chu vi của hình vuông đó là: ". $GT2->chu_vi_HV(). "cm";
    echo "<br>";
    echo "Diện tích hình vuông đó là: ". $GT2->S() . "cm2";
?>