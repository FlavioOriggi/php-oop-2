<?php 

require_once 'Item.php';

class Member_price extends Item{

    public $tier_membership;

    public function setTier($tier_membership){
        $this->tier_membership = $tier_membership;
    }

    protected function getTier(){
        return $this->tier_membership;
    }
   

    public function discountMember(){

        if ($this->tier_membership === "Gold"){
            $discount = $this->price - ($this->price / 100 * 60);
            return number_format($discount, 2) . ' euro - Prezzo con Sconto Gold' ;
        } elseif ($this->tier_membership === "Silver") {
            $discount = $this->price - ($this->price / 100 * 40);
            return number_format($discount, 2) . ' euro - Prezzo con sconto Silver';
        } else {
            $discount = $this->price - ($this->price / 100 * 25);
            return number_format($discount, 2) . ' euro - Prezzo con sconto Membership';
        }
    }
}