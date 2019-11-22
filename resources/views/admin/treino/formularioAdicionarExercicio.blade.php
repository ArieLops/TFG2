<div class="box box-warning">    
    <div class="box-body">
        <a class="btn btn-warning pull-right add-exercicio" id="add-exercicio" data-added="0">
            <i class="glyphicon glyphicon-plus"></i> Adicionar exercício
        </a>
    </div>
</div>
    <table class="table table-bordered table-hover" id="tabelaExercicios">
        <thead>
            <tr style="width: 100%">
                <th class="text-center" style="width: 20%">Musculatura</th>
                <th class="text-center" style="width: 20%">Exercicio</th>
                <th class="text-center" style="width: 15%">Série</th>
                <th class="text-center" style="width: 15%">Repetição</th>
                <th class="text-center" style="width: 15%">Carga (Kg)</th>
                <th class="text-center" style="width: 5%">Ação</th>
            </tr>
        </thead>
        <tbody id="tabelaExerciciosBody">
            <tr id="template">
                <td class="text-center" style="width: 20%;">
                    <select class="form-control musculatura" name="musculatura_id[]" id="musculatura_id">
                        <option selected disabled value="">Musculatura</option>
                        @<?php foreach ($arrayMusculaturas as $dados): ?>
                            <option id="selectMusculaturaArray" value="{{$dados->id}}">{{$dados->nome}}</option>
                        <?php endforeach; ?>
                    </select>
                </td>
                <td class="text-center" style="width:20%;">
                    <select class="form-control exercicio" name="exercicio_id[]" id="exercicio_id">
                        <option selected disabled value="">Exercicio</option>
                    </select>
                </td>
                <td class="text-center" style="width:15%;">
                    <select class="form-control" name="serie_id[]" id="serie_id">
                        <option selected disabled value="">Serie</option>
                        @<?php foreach ($arraySeries as $dados): ?>
                            <option id="selectSerieArray" value="{{$dados->id}}">{{$dados->serie}}</option>
                        <?php endforeach; ?>
                    </select>
                </td>
                <td class="text-center" style="width:15%;">
                    <select class="form-control" name="repeticao_id[]" id="repeticao_id">
                        <option selected disabled value="">Repetição</option>
                        @<?php foreach ($arrayRepeticoes as $dados): ?>
                            <option id="selectRepeticaoArray" value="{{$dados->id}}">{{$dados->repeticao}}</option>
                        <?php endforeach; ?>
                    </select>
                </td>
                <td class="text-center" style="width:15%;">
                    <select class="form-control" name="carga_id[]" id="carga_id">
                        <option selected disabled value="">Carga</option>
                        @<?php foreach ($arrayCargas as $dados): ?>
                            <option id="selectCargaArray" value="{{$dados->id}}">{{$dados->carga}}</option>
                        <?php endforeach; ?>
                    </select>
                </td>
                <td class="text-center" style="width:10%;">
                    <a class="btn btn-danger delete-exercicio" value="remove" data-id="1" type="button"><i class="fas fa-trash-alt"></i></a>
                </td>
            </tr>
        </tbody>
    </table>

