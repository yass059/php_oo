<?php 
class Car {
    public $mark;
    public $model;
    public $wheel = 4;
    private $color;
    public $reservoir = 50;
    public $jauge = 50;

    
    public function __construct($mark, $model = 'serie-4', $jauge = 50) 
    {
    //    var_dump($this);
       $this->mark = $mark; 
       $this->model = $model;
       $this->jauge =$jauge;
    }


    public function getColor() 
    {
        return $this->color;
    }

    public function setColor($color) 
    {
        $this->color = $color;
        return $this;
    }

    public function withColor() 
    {
        return $this->color;
         
    }

    public function klaxon()
    {
        return 'biiiip biiiip '.$this->mark;
    }

    public function rouler() 
    {
        if ($this->jauge > 2) {
            return $this->jauge -=2;
        }else {
            echo 'Le réservoir est vide';
        }
    }

}




?>