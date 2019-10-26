<div class="form-row">
    <div class="form-group col-md-4">
        <label for="pessoa_id" class="required">Nome</label>
        <select class="form-control" name="pessoa_id" id="pessoa_id">
            <option selected="selected" disabled>Selecione o Aluno</option>
            @<?php foreach ($arrayPessoas as $dados): ?>
            <option id="selectPessoaArray" value="{{$dados->id}}">{{$dados->nome}}</option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="form-group col-md-3">
        <label>Nível de Condicionamento</label>
        <select id="condicionamento" name="condicionamento" class="form-control" value="{{old('condicionamento', $dados->condicionamento ?? '')}}">
            <option selected="selected" disabled>Selecione um condicionamento</option>
            <option value="0">Condicionado</option>
            <option value="1">Não condicionado</option>
        </select>
    </div>
    <div class="form-group col-md-2">
        <label for="dataUltimoCheckup" class="required">Último checkup</label>
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
        <label for="pressaoSistolica" class="required">Pressão sistólica</label>
        <input type="number" class="form-control numerico" id="pressaoSistolica" name="pressaoSistolica" value="{{old('pressaoSistolica', $dados->pressaoSistolica ?? '')}}" />
    </div>
    <div class="form-group col-md-2">
        <label for="pressaoDiastolica" class="required">Pressão diastólica</label>
        <input type="number" class="form-control numerico" id="pressaoDiastolica" name="pressaoDiastolica" value="{{old('pressaoDiastolica', $dados->pressaoDiastolica ?? '')}}" />
    </div>
    <div class="form-group col-md-2">
        <label for="glicose" class="required">Glicose</label>
        <input type="number" class="form-control numerico" id="glicose" name="glicose" value="{{old('glicose', $dados->glicose ?? '')}}" />
    </div>
    <div class="form-group col-md-2">
        <label for="triglicerideos" class="required">Triglicerídeos</label>
        <input type="number" class="form-control numerico" id="triglicerideos" name="triglicerideos" value="{{old('triglicerideos', $dados->triglicerideos ?? '')}}" />
    </div>
</div>
<!-- Inicio da tabela -->
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
                            <th class="text-center" style="width: 30%">Sinais</th>
                            <th class="text-center" style="width: 60%">Comentário</th>
                            <th class="text-center" style="width: 10%">Ação</th>
                        </tr>
                    </thead>
                    <tbody id="tabelaSinaisBody" class="">
                        <tr>
                            <td class="text-center" style="" style="width: 30%;">
                                <select class="form-control" name="sinalID[]" id="sinalID">
                                    <option selected disabled value="">Selecione o sinal</option>
                                    @<?php foreach ($arraySinais as $dados): ?>
                                    <option id="selectSinalArray" value="{{$dados->id}}">{{$dados->nome}}</option>
                                    <?php endforeach; ?>
                                </select>
                            </td>
                            <td class="text-center" style="width:60%;">
                                <input type="text" class="form-control" name="comentario[]" id="comentario">
                            </td>
                            <td class="text-center" style="width:10%;">
                                <a class="btn btn-danger remove type="button"><i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>