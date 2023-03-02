<?php 
    class Rectangle  {

        public $lenght = 4;
        public $width = 3;

        public function __construct($lenght, $width) 
        {
        $this->lenght = $lenght; 
        $this->width = $width;
        }

        public function perimeter() 
        {
            return 2 * ($this->lenght + $this->width);
        }

        public function isValid() 
        {
            return ($this->lenght >0 && $this->width > 0);
        }
        
    }


?>