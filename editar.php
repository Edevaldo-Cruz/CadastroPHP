<?php

require __DIR__.'/vendor/autoload.php';

define("TITLE", "Editar Cadastro");

use \App\Entity\cadastro;


if(!isset($_GET['CD_CLIENTE'])){
   header('location: index.php?status=error');
   exit;
 }


//informação do cadastro
$obCadastro = cadastro::getCadastro($_GET['CD_CLIENTE']);


//VALIDAÇÃO DA VAGA
if(!$obCadastro instanceof cadastro){
   header('location: index.php?status=error');
   exit;
 }

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
   $obCadastro ->atualizarCliente(); 
   //$obCadastro ->cadastroContrato(); 
   //$obCadastro ->cadastroAssc();  

   
   echo "<pre>"; print_r($obcadastro); echo "</pre>"; exit;
   
   header("location: index.php?staus=sucess");
   exit;
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/formulario.php';
include __DIR__.'/includes/footer.php';