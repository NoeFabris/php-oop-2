<?php

class User{
    protected $name;
    protected $surname;
    protected $email;
    protected $age;
    protected $prime = false;

    function __construct($name, $surname, $email)
    {
        $this->setName($name);
        $this->setSurname($surname);
        $this->setEmail($email);
    }

    public function setName($value){
        $this->name = $value;
    }
    public function getName(){
        return $this->name;
    }

    public function setSurname($value){
        $this->surname = $value;
    }
    public function getSurname(){
        return $this->surname;
    }

    public function setEmail($value){
        if (strpos($value, '@') && strpos($value, '.')) {
            $this->email = $value;
        } else {
            throw new Exception('Mail Non Valida');
        }
    }
    public function getEmail(){
        return $this->email;
    }

    public function setAge($value){
        if (is_int($value)) {
            $this->age = $value;
        } else {
            throw new Exception('Età deve essere un numero');
        }
    }
    public function getAge(){
        return $this->age;
    }

    public function setPrime($value){
        $this->prime = $value;
    }

    // try {
    //     //code...
    // } catch (Exception $e) {
    //     echo 'Eccezione : ' . $e->getMessage('fatality');
    // }
};

?>