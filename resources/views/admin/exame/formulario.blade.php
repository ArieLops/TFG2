<div class="form-row">
    <div class="form-group col-md-6">
        <label for="usuarioID" class="required">Nome</label>
        <select class="form-control" name="usuarioID" id="usuarioID">
            <option selected disabled value="">Selecione o Aluno</option>
            @<?php foreach ($arrayPessoas as $dados): ?>
                <option id="selectPessoaArray" value="{{$dados->id}}">{{$dados->nome}}</option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="form-group col-md-6">
        <label for="dataRealizado" class="required">Vigência da Avaliação</label>
            <div class="input-group date">
                <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                </div>
            <input type="text" class="form-control pull-right dataUnica" name="dataRealizado" id="dataRealizado">
        </div>
    </div>
    <div class="form-group col-md-6">
        <label for="arquivo">Entrada de Arquivos</label>
        <input type="file" id="arquivo" name="arquivo" onchange="verificaExtensao(this)">
        <p class="help-block">Adicionar exame! Apenas PDF, JPG e PNG</p>
    </div>
</div>
