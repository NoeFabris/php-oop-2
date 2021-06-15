<?php

require('./Classes/users.php');
require('./Classes/products.php');

class smartphones extends Products{

}

$provaUser = new User('Noe','Fabris','Ciao@noe.com', 23);

// $prova->setEmail('Ciao');

var_dump($provaUser);

$provaProd = new Products();

$provaProd->setItemCode('X12345');

var_dump($provaProd);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-2</title>
</head>
<body>
    
</body>
</html>