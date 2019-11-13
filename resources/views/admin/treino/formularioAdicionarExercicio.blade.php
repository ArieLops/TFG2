<div class="box box-warning">    
    <div class="box-body">
        <a class="btn btn-warning pull-right add-exercicio" data-added="0">
            <i class="glyphicon glyphicon-plus"></i> Adicionar exercício
        </a>
    </div>
</div>
    <table class="table table-bordered table-hover" id="tabelaExercicios">
        <thead>
            <tr style="width: 100%">
                <th class="text-center" style="width: 2%">ID</th>
                <th class="text-center" style="width: 10%">Musculatura</th>
                <th class="text-center" style="width: 10%">Exercicio</th>
                <th class="text-center" style="width: 14,6%">Série</th>
                <th class="text-center" style="width: 14,6%">Repetição</th>
                <th class="text-center" style="width: 14,6%">Carga</th>
                <th class="text-center" style="width: 14,6%">Intervalo</th>
                <th class="text-center" style="width: 14,6%">Cadência</th>
                <th class="text-center" style="width: 5%">Ação</th>
            </tr>
        </thead>
        <tbody id="tabelaExerciciosBody" class="">
            <tr id="exercicio-1">
                <td><span class="sn" style="width: 2%">1</span>.</td>
                <td class="text-center" style="width: 10%;">
                    <select class="form-control musculatura_id" name="musculatura_id[]" id="musculatura_id">
                        <option selected disabled value="">Musculatura</option>
                        @<?php foreach ($arrayMusculaturas as $dados): ?>
                            <option id="selectMusculaturaArray" value="{{$dados->id}}">{{$dados->nome}}</option>
                        <?php endforeach; ?>
                    </select>
                </td>
                <td class="text-center" style="width:10%;">
                    <select name="exercicio_id[]" id="exercicio_id" class="form-control">
                        <option selected disabled value="">Exercicio</option>
                    </select>
                </td>
                <td class="text-center" style="width:14,6%;">
                    <input type="text" name="serie[]" class="form-control">
                </td>
                <td class="text-center" style="width:14,6%;">
                    <input type="text" name="repeticao[]" class="form-control">
                </td>
                <td class="text-center" style="width:14,6%;">
                    <input type="text" name="carga[]" class="form-control">
                </td>
                <td class="text-center" style="width:14,6%;">
                    <input type="text" name="intervalo[]" class="form-control">
                </td>
                <td class="text-center" style="width:14,6%;">
                    <input type="text" name="cadencia[]" class="form-control">
                </td>
                <td class="text-center" style="width:10%;">
                    <a class="btn btn-danger clone-exercicio" data-id="1" type="button"><i class=""></i></a>
                    <a class="btn btn-danger delete-exercicio" data-id="1" type="button"><i class="fas fa-trash-alt"></i></a>
                </td>
            </tr>
        </tbody>
    </table>

