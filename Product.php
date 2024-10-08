<?php 

class Product{
    protected $name;
    public $price;
    public $brand;
    public $image;
    public $description;
    private $tax = 14;
    public function setName($name){
        $this->name = $name;
    }
    
    public function getName(){
        return $this->name;
    }

    public function priceAfterDiscount($number){
        if(is_numeric($number)){
            return $total_disc = $this->price * $number / 100; 
        }
     
    }

    public function priceTax(){
        return $this->tax + $this->price ;
    }
    public function finalTax(){
        return $this->tax * $this->price / 100;
    }
    public function getFinalPrice(){
        return $this->finalTax() +$this->price - $this->priceAfterDiscount(5);
    }

}

