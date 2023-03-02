<?php 
    class Square extends Rectangle {

        public $width = 3;

        public function __construct($width) 
        {
        $this->width = $width;
        }

        public function perimeter() 
        {
            return $this->width * $this->width;
        }

        public function isBiggerThen( Rectangle $rectangle) 
        {
            return $this->perimeter() < $rectangle->perimeter();
        }

        
        
    }


?>