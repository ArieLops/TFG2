<div class="form-row">
    <div class="form-group col-md-6">
        <label for="nome" class="required">Nome</label>
        <select id="selectPessoa" class="form-control">
            <option selected="selected">Selecione o Aluno</option>
            @<?php foreach ($arrayPessoas as $dados): ?>
            <option id="selectPessoaArray" id="nome" value="{{$dados->id}}">{{$dados->nome}}</option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="form-group col-md-6">
        <label for="treino">Semana</label>
        <input type="text" class="form-control" id="semana" name="semana">
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-6">
        <label for="treino">Treino selecionado</label>
        <input type="text" class="form-control" id="treinoSemana" name="treinoSemana" value="">
    </div>
    <div class="form-group col-md-6">
        <label for="treino">Vigência do treino</label>
        <div class="input-group">
            <div class="input-group-addon">
                <i class="fa fa-calendar"></i>
            </div>
            <input type="text" class="form-control pull-right dataRange" id="vigencia">
        </div>
    </div>
    <button type="button" id="addOpcaoTreino" class="btn btn-info">Adicionar treino</button>
</div>