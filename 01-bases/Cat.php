<?php 


class Cat {
    public $name;
    public $type = 'Chat de goutière';
    public $fur;
    private $isChipped = false;

    public function __construct($name, $type = 'Chat de goutière') 
    {
    //    var_dump($this);
       $this->name = $name; 
       $this->type = $type;
    }

    public function cry()
    {
        return 'Miou ! par '.$this->name;
    }

    public function getFur() 
    {
        return $this->fur;
    }

    public function setFur($fur) 
    {
        $this->fur = $fur;
        return $this;
    }

    public function chippedInformation() 
    {
        if ($this->isChipped) {
            return $this->name.' est pucé(e)';
        }
        return $this->name.'n\est pas pucé(e)';
    }
    public function chipWithDoctor() 
    {
        $this->isChipped = true;
        return $this;
    }
    public function playWith(Cat $otherCat)
    {
        return $this->name.' joue avec '.$otherCat->name;
        
    }
}