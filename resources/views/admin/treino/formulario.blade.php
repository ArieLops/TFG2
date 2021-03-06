<div class="row">
    <div class="form-group col-md-6">
        <label for="users_id" class="required">Nome</label>
        <select class="form-control" name="users_id" id="users_id">
            @<?php foreach ($arrayUsers as $dados): ?>
                <option id="selectUserArray" value="{{$dados->id}}">{{$dados->name}}</option>
            <?php endforeach; ?>
        </select>
    </div>
</div>
<div class="form-row">
    <button type="button" id="btnAdicionar" class="btn btn-info">Adicionar</button>
</div>
<div class="row">
    <div class="col-xs-12">
        <br>
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Dados do Treino</h3>
            </div>
            <div class="box-body">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr style="width: 100%">
                            <th class="text-center" style="width: 5%">Criar</th>
                            <th class="text-center" style="width: 26,66%">Objetivo</th>
                            <th class="text-center" style="width: 26,66%">Cadastro</th>
                        </tr>
                    </thead>
                    <tbody id="tblConteudo" class="hidden">
                        <tr style="width: 100%">
                            <td class="text-center" style="width: 5%"><a class="btn-class" id="criar"><i class="glyphicon glyphicon-plus-sign"></i></a></td>
                            <td class="text-center" style="width: 26,66%" id="nomeObjetivoTabela"></td>
                            <td class="text-center" style="width: 26,66%" id="dataTreinoTabela"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>