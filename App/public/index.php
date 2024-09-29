<?php 
ini_set('display_errors', 1);
error_reporting(E_ALL);
require ('../../vendor/autoload.php');

use App\Controllers\Destinatari;

$form = new Destinatari();

$form_render = $form->create();


var_dump($form_render)
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?= $form_render ?>
</body>
</html>