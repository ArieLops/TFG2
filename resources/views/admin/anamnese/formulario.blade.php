<div class="form-row">
    <div class="form-group col-md-3">
        <label for="users_id" class="">Nome</label>
        <select class="form-control" name="users_id" id="users_id">
            <option selected="selected" disabled>Selecione o Aluno</option>
            @<?php foreach ($arrayUsers as $dados): ?>
            <option id="selectUserArray" value="{{$dados->id}}">{{$dados->name}}</option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="form-group col-md-4">
        <label>Nível de Condicionamento</label>
        <select id="condicionamento" name="condicionamento" class="form-control" value="{{old('condicionamento', $dados->condicionamento ?? '')}}">
            <option selected="selected" disabled>Selecione um condicionamento</option>
            <option value="0">Condicionado</option>
            <option value="1">Não condicionado</option>
        </select>
    </div>
    <div class="form-group col-md-2">
        <label for="dataUltimoCheckup">Último checkup</label>
        <div class="input-group date">
            <div class="input-group-addon">
                <i class="fa fa-calendar"></i>
            </div>
            <input type="text" class="form-control pull-right dataUnica" name="dataUltimoCheckup" id="dataUltimoCheckup">
        </div>
    </div>
    <div class="form-group col-md-3">
        <label>Tipo sanguíneo</label>
        <select id="tipoSanguineo" name="tipoSanguineo" class="form-control" value="{{old('tipoSanguineo', $dados->tipoSanguineo ?? '')}}">
            <option selected="selected" disabled>Selecione o tipo sanguíneo</option>
            <option value="0">A +</option>
            <option value="1">A -</option>
            <option value="2">B +</option>
            <option value="3">B -</option>
            <option value="4">AB +</option>
            <option value="5">AB -</option>
            <option value="6">O +</option>
            <option value="7">O -</option>
        </select>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-4">
        <label>Nível de atividade ocupacional</label>
        <select id="atividadeOcupacional" name="atividadeOcupacional" class="form-control" value="{{old('atividadeOcupacional', $dados->atividadeOcupacional ?? '')}}">
            <option selected="selected" disabled>Selecione um nível</option>
            <option value="0">Alto</option>
            <option value="1">Moderado</option>
            <option value="2">Baixo</option>
        </select>
    </div>
    <div class="form-group col-md-2">
        <label for="pressaoSistolica" class="">Pressão sistólica</label>
        <input type="number" class="form-control numerico" id="pressaoSistolica" name="pressaoSistolica" value="{{old('pressaoSistolica', $dados->pressaoSistolica ?? '')}}" />
    </div>
    <div class="form-group col-md-2">
        <label for="pressaoDiastolica" class="">Pressão diastólica</label>
        <input type="number" class="form-control numerico" id="pressaoDiastolica" name="pressaoDiastolica" value="{{old('pressaoDiastolica', $dados->pressaoDiastolica ?? '')}}" />
    </div>
    <div class="form-group col-md-2">
        <label for="glicose" class="">Glicose</label>
        <input type="number" class="form-control numerico" id="glicose" name="glicose" value="{{old('glicose', $dados->glicose ?? '')}}" />
    </div>
    <div class="form-group col-md-2">
        <label for="triglicerideos" class="">Triglicerídeos</label>
        <input type="number" class="form-control numerico" id="triglicerideos" name="triglicerideos" value="{{old('triglicerideos', $dados->triglicerideos ?? '')}}" />
    </div>
</div>
<!-- Inicio dos sinais -->
<div class="form-row">
    <div class="col-xs-12">
        <br>
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Sinais</h3>
                <a class="btn btn-warning pull-right addRow" data-added="0">
                    <i class="glyphicon glyphicon-plus"></i> Adicionar Sinal
                </a>
            </div>
            <div class="box-body">
                <table class="table table-bordered table-hover" id="tabelaSinais">
                    <thead>
                        <tr style="width: 100%">
                            <th class="text-center" style="width: 90%">Sinais</th>
                            <th class="text-center" style="width: 10%">Ação</th>
                        </tr>
                    </thead>
                    <tbody id="tabelaSinaisBody" class="">
                        <tr>
                            <td class="text-center" style="" style="width: 90%;">
                                <select class="form-control" name="sinalID[]" id="sinalID">
                                    <option selected disabled value="">Selecione o sinal</option>
                                    @<?php foreach ($arraySinais as $dados): ?>
                                    <option id="selectSinalArray" value="{{$dados->id}}">{{$dados->nome}}</option>
                                    <?php endforeach; ?>
                                </select>
                            </td>
                            <td class="text-center" style="width:10%;">
                                <a class="btn btn-danger type="button" id="removeSinal" onclick="remove(this)"><i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- Fim dos sinais -->
<!-- Inicio das lesoes -->
<div class="form-row">
    <div class="col-xs-12">
        <br>
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Lesões</h3>
                <a class="btn btn-warning pull-right addRowLesao" data-added="0">
                    <i class="glyphicon glyphicon-plus"></i> Adicionar Lesão
                </a>
            </div>
            <div class="box-body">
                <table class="table table-bordered table-hover" id="tabelaLesoes">
                    <thead>
                        <tr style="width: 100%">
                            <th class="text-center" style="width: 28%">Lesão</th>
                            <th class="text-center" style="width: 30%">Tipo</th>
                            <th class="text-center" style="width: 30%">Local</th>
                            <th class="text-center" style="width: 10%">Ação</th>
                        </tr>
                    </thead>
                    <tbody id="tabelaLesoesBody" class="">
                        <tr>
                            <td class="text-center" style="" style="width: 28%;">
                                <select class="form-control lesao_id" name="lesao_id[]" id="lesao_id">
                                    <option selected disabled value="">Selecione a lesão</option>
                                    @<?php foreach ($arrayLesoes as $dados): ?>
                                    <option id="selectLesaoArray" value="{{$dados->id}}">{{$dados->nome}}</option>
                                    <?php endforeach; ?>
                                </select>
                            </td>
                            <td class="text-center" style="width:30%;">
                                <select class="form-control tipo_id" name="tipo_id[]" id="tipo_id">
                                    <option selected disabled value="">Selecione o tipo</option>
                                    @<?php foreach ($arrayTipos as $dados): ?>
                                    <option id="selectTipoArray" value="{{$dados->id}}">{{$dados->nome}}</option>
                                    <?php endforeach; ?>
                                </select>
                            </td>
                            <td class="text-center" style="width:30%;">
                                <select name="local_id[]" id="local_id" class="form-control">
                                    <option selected disabled value="">Selecione o local</option>
                                </select>
                            </td>
                            <td class="text-center" style="width:10%;">
                                <a class="btn btn-danger type="button" id="removeLesao" onclick="removeLinhaLesoes(this)"><i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- Fim das lesoes -->