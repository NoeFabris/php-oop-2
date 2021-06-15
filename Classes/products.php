<?php

class Products{
    public $itemName;
    public $itemCode;
    public $price;
    public $description;

    function __construct()
    {
        
    }

    public function setItemName($value){
        $this->itemName = $value;
    }
    public function getItemName(){
        return $this->itemName;
    }

    public function setItemCode($value){
        // alphanumeric code X12345
        if (substr($value, 0, 1) === 'X') {
            if (is_numeric(substr($value, 1, 5))) {
                $this->itemCode = $value;
            }
        }
    }
    public function getItemCode(){
        return $this->itemCode;
    }

    public function setPrice($value){
        $this->price = $value;
    }
    public function getPrice(){
        return $this->price;
    }

    public function setDescription($value){
        $this->description = $value;
    }
    public function getDescription(){
        return $this->description;
    }
};

?>