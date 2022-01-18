<?php

require __DIR__.'/vendor/autoload.php';

use \App\Entity\cadastro;

if(isset($_GET['CD_CLIENTE'])){
   header('location: index.php?status=error');
   exit;
}


//informação do cadastro
$obCadastro = cadastro::getCadastro($_GET["CD_CLIENTE"]);


//VALIDAÇÃO DA VAGA
if(!$obCadastro instanceof cadastro){
   header('location: index.php?status=error');
   exit;
 }

if(isset($_POST["deletar"])){  
   
   $obCadastro ->deletar(); 
   //$obCadastro ->cadastroContrato(); 
   //$obCadastro ->cadastroAssc();    
   header("location: index.php?staus=sucess");
   exit;
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/exclusao.php';
include __DIR__.'/includes/footer.php';