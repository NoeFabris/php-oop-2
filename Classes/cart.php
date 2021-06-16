<?php

class Cart{
    
    private $user;
    private $products = [];
    private $payments;

    function __construct($user)
    {
        $this->user = $user;
    }

    public function addProduct($product){
        $this->products[] = $product;
      }
}

?>