<div class="box box-warning">    
    <div class="box-body">
        <div class="form-group col-xs-5">
            <label for="musculaturaSelecionada">Musculatura</label>
            <select class="form-control musculatura_id" name="musculatura_id" id="musculatura_id">
                <option selected disabled value="">Selecione a Musculatura</option>
                @<?php foreach ($arrayMusculaturas as $dados): ?>
                    <option id="selectMusculaturaArray" value="{{$dados->id}}">{{$dados->nome}}</option>
                <?php endforeach; ?>
            </select>
        </div>
        <a class="btn btn-warning pull-right addRowExercicio">
            <i class="glyphicon glyphicon-plus"></i> Adicionar exercício
        </a>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <div class="box-body">
                <table class="table table-bordered table-hover" id="tabelaExercicios">
                    <thead>
                        <tr style="width: 100%">
                            <th class="text-center" style="width: 20%">Exercício</th>
                            <th class="text-center" style="width: 14,6%">Série</th>
                            <th class="text-center" style="width: 14,6%">Repetição</th>
                            <th class="text-center" style="width: 14,6%">Carga</th>
                            <th class="text-center" style="width: 14,6%">Intervalo</th>
                            <th class="text-center" style="width: 14,6%">Cadência</th>
                            <th class="text-center" style="width: 5%">Ação</th>
                        </tr>
                    </thead>
                    <tbody id="tabelaExerciciosBody" class="">
                        <tr>
                            <td class="text-center" style="width: 20%;">
                                <select class="form-control exercicio_id" name="exercicio_id[]" id="exercicio_id">
                                    <option selected disabled value="">Exercício</option>
                                    @<?php foreach ($arrayExercicios as $dados): ?>
                                        <option id="selectExercicioArray" value="{{$dados->id}}">{{$dados->nome}}</option>
                                    <?php endforeach; ?>
                                </select>
                            </td>
                            <td class="text-center" style="width:14%;">
                                <input type="text" class="form-control">
                            </td>
                            <td class="text-center" style="width:14%;">
                                <input type="text" class="form-control">
                            </td>
                            <td class="text-center" style="width:14%;">
                                <input type="text" class="form-control">
                            </td>
                            <td class="text-center" style="width:14%;">
                                <input type="text" class="form-control">
                            </td>
                            <td class="text-center" style="width:14%;">
                                <input type="text" class="form-control">
                            </td>
                            <td class="text-center" style="width:10%;">
                                <a class="btn btn-danger" onclick="removeLinhaExercicios(this)" type="button"><i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>