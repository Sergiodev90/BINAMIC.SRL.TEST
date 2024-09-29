<?php

require('./vendor/autoload.php');
use App\Controllers\Destinatari;


$data = new Destinatari();


var_dump($data->index());