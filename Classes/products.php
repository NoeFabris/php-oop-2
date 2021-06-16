<?php

class Products{
    protected $itemName;
    protected $itemCode;
    protected $quantityInStock;
    protected $price;
    protected $description;

    function __construct($itemName, $itemCode, $quantityInStock, $price)
    {
        $this->setItemName($itemName);
        $this->setItemCode($itemCode);
        $this->setQuantity($quantityInStock);
        $this->setPrice($price);
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
            } else {
                throw new Exception('Codice prodotto Inesistente');
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

    public function setQuantity($value){
        $this->quantityInStock = $value;
    }
    public function getQuantity(){
        return $this->quantityInStock;
    }
};

?>