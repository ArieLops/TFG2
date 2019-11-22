<div class="form-row">
    <div class="form-group col-md-6">
        <label for="users_id" class="required">Nome</label>
        <select class="form-control" name="users_id" id="users_id">
            <option selected disabled value="">Selecione o Aluno</option>
            @<?php foreach ($arrayUsers as $dados): ?>
                <option id="selectUserArray" value="{{$dados->id}}">{{$dados->name}}</option>
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
        <p class="help-block">Adicionar exame! Apenas JPG</p>
    </div>
</div>
