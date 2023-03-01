<?php 


class Cat {
    public $name;
    public $type = 'Chat de goutière';
    public $fur;

    public function __construct($name, $type) 
    {
    //    var_dump($this);
       $this->name = $name; 
       $this->type = $type;
    }

    public function cry(){
        return 'Miou !';
    }
}