<?php

 class Item {

    public $name;
    public $type;
    public $price;
    public $num_items;


    function __construct($name, $type, $price, $num_items) {

        $this->name = $name;
        $this->type = $type;
        $this->price = $price;
        $this->num_items = $num_items;
    }
    
    public function printName(){
         return  $this->name;
    }

    public function printType(){
        return  $this->type;
    }

    public function printNumitems(){
        if ($this->num_items > 0){            
            return  $this->num_items;
        } else {            
            return 'Non disponibile';
        }
                
    }
}

