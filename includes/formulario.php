<main>   

    <h2 class="mt-3"><?=TITLE?></h2>
    <form method="post"> 
        <div class="form-group">
            <label>Nome:</label>
            <input type="text" class="from-control" name="NM_CLIENTE" 
            value="<?=$obCadastro->NM_CLIENTE?>">
        </div>       

        <div class="form-group">
            <label>CPF:</label>
            <input type="text" class="from-control" name="DC_CPF"
            value="<?=$obCadastro->DC_CPF?>">
        </div>

        <div class="form-group">
            <label>Telefone:</label>
            <input type="text" class="from-control" name="DC_TELL"
            value="<?=$obCadastro->DC_TELL?>">
        </div>
        <div class="form-group">
            <label>E-mail:</label>
            <input type="text" class="from-control" name="DC_EMAIL"
            value="<?=$obCadastro->DC_EMAIL?>">
        </div>
        <div class="form-group">
            <label>Município:</label>
            <input type="text" class="from-control" name="CD_MUNICIPIO"
            value="<?=$obCadastro->CD_MUNICIPIO?>">
        </div>
        <div class="form-group">
            <label>Data de Registro:</label>
            <input type="date" class="from-control" name="DT_RGST"
            value="<?=$obCadastro->DT_RGST?>">
        </div>
  
    <h2 class="mt-3">Contrato</h2>
   
        <div class="form-group">
            <label>Valor do Contrato:</label>
            <input type="text" class="from-control" name="VR_CONTRATO"
            value="<?=$obCadastro->VR_CONTRATO?>">
        </div>

        <div class="form-group">
            <label>Data da Assinatura:</label>
            <input type="date" class="from-control" name="DT_ASS"
            value="<?=$obCadastro->DT_ASS?>">
        </div>

        <div class="form-group">
            <label>Data de Início:</label>
            <input type="date" class="from-control" name="DT_INICIO"
             value="<?=$obCadastro->DT_INICIO?>">
        </div>
        <div class="form-group">
            <label>Data de Fim:</label>
            <input type="date" class="from-control" name="DT_FIM"
             value="<?=$obCadastro->DT_FIM?>">
        </div>

        <div class="form-group">
            <label>Descrição do Status</label>
            <div>
                <div class="form-check form-check-inline">
                    <label class="form-control">
                    <input type="radio" name="DC_STATUS" value="A" checked> Ativo
                    </label>
                </div>

                <div class="form-check form-check-inline">
                    <label class="form-control">
                    <input type="radio" name="DC_STATUS" value="D" <?=$obCadastro->DC_STATUS == 'D' ? 'checked' : ''?>> Distratado
                    </label>
                </div>
            </div>
        </div>    


        <div class="form-group">
            <label>Data de Registro:</label>
            <input type="date" class="from-control" name="DT_RGST"
            value="<?=$obCadastro->NM_CLIENTE?>">
        </div>
        <section>
        <a href="index.php">
            <button class= "btn btn-success">Voltar</button>
            <button type="submit" class="btn btn-success">Enviar</button>
        </a>

        </section>
        
    </form>
</main>
