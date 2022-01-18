<?php

require __DIR__.'/vendor/autoload.php';

define("TITLE", "Cadastrar novo cliente");

use \App\Entity\cadastro;


if(isset($_POST["NM_CLIENTE"], 
$_POST["DC_CPF"], 
$_POST["DC_TELL"], 
$_POST["DC_EMAIL"], 
$_POST["CD_MUNICIPIO"], 
$_POST["DT_RGST"], 
$_POST["VR_CONTRATO"], 
$_POST["DT_ASS"], 
$_POST["DT_INICIO"],
$_POST["DT_FIM"],
$_POST["DC_STATUS"],
)){
   $obCadastro = new cadastro;
   $obCadastro ->NM_CLIENTE = $_POST["NM_CLIENTE"];
   $obCadastro ->DC_CPF = $_POST["DC_CPF"];
   $obCadastro ->DC_TELL = $_POST["DC_TELL"];
   $obCadastro ->DC_EMAIL = $_POST["DC_EMAIL"];
   $obCadastro ->CD_MUNICIPIO = $_POST["CD_MUNICIPIO"];
   $obCadastro ->DT_RGST = $_POST["DT_RGST"];
   $obCadastro ->VR_CONTRATO = $_POST["VR_CONTRATO"];
   $obCadastro ->DT_ASS = $_POST["DT_ASS"];
   $obCadastro ->DT_INICIO = $_POST["DT_INICIO"];
   $obCadastro ->DT_FIM = $_POST["DT_FIM"];
   $obCadastro ->DC_STATUS = $_POST["DC_STATUS"]; 
   $obCadastro ->cadastroCliente(); 
   $obCadastro ->cadastroContrato(); 
   $obCadastro ->cadastroAssc();  
   
   header("location: index.php?staus=sucess");
   exit;
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/formulario.php';
include __DIR__.'/includes/footer.php';