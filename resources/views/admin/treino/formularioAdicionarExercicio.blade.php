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
                <th class="text-center" style="width: 2%">ID</th>
                <th class="text-center" style="width: 15%">Musculatura</th>
                <th class="text-center" style="width: 15%">Exercicio</th>
                <th class="text-center" style="width: 11,6%">Série</th>
                <th class="text-center" style="width: 11,6%">Repetição</th>
                <th class="text-center" style="width: 11,6%">Carga</th>
                <th class="text-center" style="width: 11,6%">Intervalo</th>
                <th class="text-center" style="width: 11,6%">Cadência</th>
                <th class="text-center" style="width: 10%">Ação</th>
            </tr>
        </thead>
        <tbody id="tabelaExerciciosBody">
            <tr id="template">
                <td><span class="sn" style="width: 2%">1</span>.</td>
                <td class="text-center" style="width: 15%;">
                    <select class="form-control musculatura_id" name="musculatura_id[]" id="musculatura_id">
                        <option selected disabled value="">Musculatura</option>
                        @<?php foreach ($arrayMusculaturas as $dados): ?>
                            <option id="selectMusculaturaArray" value="{{$dados->id}}">{{$dados->nome}}</option>
                        <?php endforeach; ?>
                    </select>
                </td>
                <td class="text-center" style="width:15%;">
                    <select class="form-control exercicio_id" name="exercicio_id[]" id="exercicio_id">
                        <option selected disabled value="">Exercicio</option>
                    </select>
                </td>
                <td class="text-center" style="width:11,6%;">
                    <input type="text" name="serie[]" class="form-control">
                </td>
                <td class="text-center" style="width:11,6%;">
                    <input type="text" name="repeticao[]" class="form-control">
                </td>
                <td class="text-center" style="width:11,6%;">
                    <input type="text" name="carga[]" class="form-control">
                </td>
                <td class="text-center" style="width:11,6%;">
                    <input type="text" name="intervalo[]" class="form-control">
                </td>
                <td class="text-center" style="width:11,6%;">
                    <input type="text" name="cadencia[]" class="form-control">
                </td>
                <td class="text-center" style="width:10%;">
                    <a class="btn btn-danger delete-exercicio" value="remove" data-id="1" type="button"><i class="fas fa-trash-alt"></i></a>
                </td>
            </tr>
        </tbody>
    </table>

