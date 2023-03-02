<?php 

    class Book 
    {
        public $title;
        public $totalePages;
        public $pageCourante;
        private $isOpen;
        
        public function __construct($title, $totalePages)
        {
            $this->title = $title;
            $this->totalePages = $totalePages;            
            $this->pageCourante = 1;            
            $this->isOpen = true;            
        }

        public function page() {
            return $this->pageCourante;
        }

        public function nextPage() {
            if ($this->isOpen && $this->pageCourante < $this->totalePages) {
                $this->pageCourante++;
            }
        }

        public function close() 
        {
            $this->isOpen = false;
            $this->pageCourante = 1;
            return $this;
        }

    }