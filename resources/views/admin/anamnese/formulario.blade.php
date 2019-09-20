<div class="form-row">
    <div class="form-group col-md-12">
        <label for="usuarioID" class="required">Nome</label>
        <select class="form-control" name="usuarioID" id="usuarioID">
            <option selected="selected">Selecione o Aluno</option>
            @<?php foreach ($arrayPessoas as $dados): ?>
                <option id="selectPessoaArray" value="{{$dados->id}}">{{$dados->nome}}</option>
            <?php endforeach; ?>
        </select>
    </div>
</div>
