<?php

namespace App\Entity;

use \App\Db\Database;
use \PDO;

class cadastro{

  /**
  * identificador do cliente
  * @var integer
  */
  public $CD_CLIENTE;

  /**
  * nome do cliente
  * @var string
  */
  public $NM_CLIENTE;

/**
 * CPF do cliente
 * @var string
 */
  public $DC_CPF;

  /**
  * Telefone do cliente
  * @var string
  */
  public $DC_TELL;

  /**
  * Email do cliente
  * @var string
  */
  public $DC_EMAIL;

  /**
  * Cidade do cliente
  * @var integer
  */
  public $CD_MUNICIPIO;

  /**
  * Data de Registro
  * @var date
  */
  public $DT_RGST;

  /**
  * Código do Contrato
  * @var integer
  */
  public $CD_CONTRATO;

  /**
  * Valor do Contrato
  * @var integer
  */
  public $VR_CONTRATO;

  /**
  * Data da Assinatura
  * @var date
  */
  public $DT_ASS;
    /**
  * Data de Início
  * @var date
  */
  public $DT_INICIO;
  /**
  * Data de Fim
  * @var date
  */
  public $DT_FIM;
  
  /**
  * nome do cliente
  * @var string(A,D)
  */
  public $DC_STATUS; 
  
  /**
  * Código de Associação Contrato Cliente
  * @var integer
   */
  public $CD_CTO_CLI; 
   /**
  * Função para enviar informação para o banco.
  * @return boolean
  */ 

  public function cadastroCliente() {
    $this->DT_RGST = date('Y-m-d H:i:s');
    $obDatabase = new Database("cliente","contrato");
    $this ->CD_CLIENTE = $obDatabase ->insert([
      
      "NM_CLIENTE" => $this -> NM_CLIENTE,
      "DC_CPF" => $this -> DC_CPF,
      "DC_TELL" => $this -> DC_TELL,
      "DC_EMAIL" => $this -> DC_EMAIL,
      "CD_MUNICIPIO" => $this -> CD_MUNICIPIO,      
     ]);
   }
  public function cadastroContrato() {
    $this->DT_RGST = date('Y-m-d H:i:s');
    $obDatabase = new Database("contrato");
    $this ->CD_CONTRATO = $obDatabase ->insert([
     "VR_CONTRATO" => $this -> VR_CONTRATO,
     "DT_ASS" => $this -> DT_ASS,
     "DT_INICIO" => $this -> DT_INICIO,
     "DT_FIM" => $this -> DT_FIM,
     "DC_STATUS" => $this -> DC_STATUS
      ]);
    }
  public function cadastroAssc() {
    $this->DT_RGST = date('Y-m-d H:i:s');
    $obDatabase = new Database("contrato");
    $this ->CD_CTO_CLI = $obDatabase ->insert([      
       
    ]);
    return true;      
    }

  /**
   * Método para atualizar a vaga no banco
   * @return boolean
   */
  public function atualizarCliente(){
    return (new Database('cliente'))->update(
      'CD_CLIENTE = '.$this->CD_CLIENTE,[
      "NM_CLIENTE" => $this -> NM_CLIENTE,
      "DC_CPF" => $this -> DC_CPF,
      "DC_TELL" => $this -> DC_TELL,
      "DC_EMAIL" => $this -> DC_EMAIL,
      "CD_MUNICIPIO" => $this -> CD_MUNICIPIO,
    ]);
  }

  /**
   * Método responsável por excluir a vaga do banco
   * @return boolean
   */
  public function deletar(){
    return (new Database('cliente'))
    ->delete('CD_CLIENTE = '.$this->CD_CLIENTE);
  }

  public static function getCliente($where = null, $order = null, $limit = null){
    return (new Database("cliente"))
      ->select($where,$order,$limit)
      ->fetchAll(PDO::FETCH_CLASS,self::class);
  }

  public static function getContrato($where = null, $order = null, $limit = null){
  return (new Database("contrato"))
    ->select($where,$order,$limit)
    ->fetchAll(PDO::FETCH_CLASS,self::class);
  }

  public static function getAssc($where = null, $order = null, $limit = null){
    return (new Database("assc_contrato_cliente"))
      ->select($where,$order,$limit)
      ->fetchAll(PDO::FETCH_CLASS,self::class);
  }

  public static function getCadastro($CD_CLIENTE){
    return (new Database("cliente"))
      ->select($CD_CLIENTE)
      ->fetchObject(self::class);
  }
}