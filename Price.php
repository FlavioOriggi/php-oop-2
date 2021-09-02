<?php
require_once 'Item.php';

class Price extends Item{
    public $discount;

    function __construct($name, $type, $price, $num_items, $discount = 0){
        
        parent::__construct($name, $type, $price, $num_items,);        
        $this->discount = $discount;
    }

    public function calcDiscount(){

        if( $this->discount !== 0){
            $total = $this->price / 100 * $this->discount;
            return number_format($total, 2) . ' euro';
        } else {
            return 'Nessuno Sconto Disponibile';
        }
    }
}

