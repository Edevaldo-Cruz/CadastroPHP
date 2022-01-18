<?php

$mensagem = '';
  if(isset($_GET['status'])){
    switch ($_GET['status']) {
      case 'success':
        $mensagem = '<div class="alert alert-success">Ação executada com sucesso!</div>';
        break;

      case 'error':
        $mensagem = '<div class="alert alert-danger">Ação não executada!</div>';
        break;
    }
  }

$resultados = "";
foreach($cadastro as $cadastro){
    $resultados.= "<tr>
                    <td>".$cadastro->CD_CLIENTE."</td>
                    <td>".$cadastro->CD_CONTRATO."</td>
                    <td>".$cadastro->NM_CLIENTE."</td>
                    <td>".$cadastro->DC_CPF."</td>
                    <td>".$cadastro->DC_TELL."</td>
                    <td>".$cadastro->DC_EMAIL."</td>
                    <td>".$cadastro->CD_MUNICIPIO."</td>                   
                    <td>".$cadastro->DT_RGST.'</td>
                    <td>
                      <a href="editar.php?id='.$cadastro->CD_CLIENTE.'">
                        <button type="button" class="btn btn-primary">Editar</button>
                      </a>
                      <a href="deletar.php?id='.$cadastro->CD_CLIENTE.'">
                        <button type="button" class="btn btn-danger">Excluir</button>
                      </a>
                    </td>
                  </tr>';
}

?>

<main>
    <section>
        <table class="table bg-light mt-3">
            <thead>
                <tr>
                    <th>COD CLIENTE</th>
                    <th>COD CONTRATO</th>
                    <th>NOME</th>
                    <th>CPF</th>
                    <th>TEL</th>
                    <th>E-MAIL</th>
                    <th>MUNICIPIO</th>                    
                    <th>DATA DE REGISTRO</th>
                </tr>
            </thead>
            <tbody>
                <?=$resultados?>
            </tbody>
        </table>
        
    </section>
    <section>
        <a href="listaContrato.php">
            <button class= "btn btn-success">Lista de Contratos</button>
        </a>     
        <a href="cadastrar.php">
            <button class= "btn btn-success">Associação Contrato Cliente</button>
        </a>    
        <a href="cadastrar.php">
            <button class= "btn btn-success">Novo cadastro</button>
        </a>
    </section>
</main>
