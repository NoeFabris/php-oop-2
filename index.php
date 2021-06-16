<?php

require('./Classes/users.php');
require('./Classes/products.php');
require('./Classes/cc.php');   


class smartphones extends Products{

}


try {
    
    $provaUser = new User('Noe','Fabris','Ciao@noe.com');
    $provaUser->setAge(43);
    var_dump($provaUser);
    
    $provaProd = new Products('iPhone 12', 'X47283', 34, 999);
    // $provaProd->setItemCode('X12345');
    var_dump($provaProd);
    
    $provaCC = new CC('Noe','Fabris','Ciao@noe.com', 1234, 344, 12);
    var_dump($provaCC);
    
} catch (Exception $e) {
    echo 'Eccezione : ' . $e->getMessage();
}


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