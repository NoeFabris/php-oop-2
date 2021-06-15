<?php

class User{
    public $name;
    public $surname;
    public $email;
    public $age;

    function __construct($name, $surname, $email, $age)
    {
        $this->setName($name);
        $this->setSurname($surname);
        $this->setEmail($email);
        $this->setAge($age);

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
        }
    }
    public function getEmail(){
        return $this->email;
    }

    public function setAge($value){
        if (is_int($value)) {
            $this->age = $value;
        }
    }
    public function getAge(){
        return $this->age;
    }
};

?>