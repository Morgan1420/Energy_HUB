<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Energy Hub</title>
        <link rel="stylesheet" type="text/css" href="css/nou_style.css" >
</head>


<body>


<?php 


// index.php

$ACCTION = $_GET['ACCTION'] ?? NULL;

switch ($ACCTION) {

    case'Go_to_main':
        include __DIR__ .'/_controller/menu_principal.php';
        # code...;
        break;
    
    case'Go_to_cart':
        include __DIR__ .'/_controller/carro_compra.php';
        # code...;
        break;
    case 'Go_to_settings':
        include __DIR__ .'/_controller/settings.php';
        # code...
        break;
    default:
        include __DIR__ .'/_controller/menu_principal.php';
        # code...
        break;
        
}

?> 


</body>
</html>
