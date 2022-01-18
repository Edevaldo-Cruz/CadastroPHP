<?php

require __DIR__.'/vendor/autoload.php';

use \App\Entity\cadastro;

$cadastro = cadastro::getCliente();
//$cadastro = cadastro::getContrato();
//$cadastro = cadastro::getAssc();


include __DIR__.'/includes/header.php';
include __DIR__.'/includes/listaCliente.php';
include __DIR__.'/includes/footer.php';