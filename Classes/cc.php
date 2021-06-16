<?php

require_once(__DIR__ . '/users.php');
// require_once(__DIR__ . '/products.php');

class CC extends User{
    protected $cardNumber;
    protected $cvv;
    protected $expiryDate;
    // protected $date;

    function __construct($name, $surname, $email, $cardNumber, $cvv, $expiryDate)
    {
        parent::__construct($name, $surname, $email);

        $this->setCardNumber($cardNumber);
        $this->setCvv($cvv);
        $this->setExpiryDate($expiryDate);
    }

    public function setCardNumber($value){
        $this->cardNumber = $value;
    }
    public function getCardNumber(){
        return $this->cardNumber;
    }

    public function setCvv($value){
        $this->cvv = $value;
    }
    public function getCvv(){
        return $this->cvv;
    }

    public function setExpiryDate($value){
        $this->expiryDate = $value;
    }
    public function getExpiryDate(){
        return $this->expiryDate;
    }



}


?>