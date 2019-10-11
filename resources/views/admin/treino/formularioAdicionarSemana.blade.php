<div class="box box-warning">    
    <div class="box-body">
        <div class="form-group">
            <label>Nome</label>
            <input type="text" class="form-control">
        </div>
    <button onclick="AddTableRow()" type="button" id="addExercicio" class="btn btn-warning">Adicionar exercício</button>
</div>
<div class="row">
    <div class="col-xs-12">
        <div class="box-body">
            <table class="table table-bordered table-hover" id="tabelaExercicios">
                <thead>
                    <tr style="width: 100%">
                        <th class="text-center" style="width: 20%">Exercício</th>
                        <th class="text-center" style="width: 13%">Série</th>
                        <th class="text-center" style="width: 13%">Repetição</th>
                        <th class="text-center" style="width: 13%">Carga</th>
                        <th class="text-center" style="width: 13%">Intervalo</th>
                        <th class="text-center" style="width: 13%">Cadência</th>
                        <th class="text-center" style="width: 5%">Ação</th>
                    </tr>
                </thead>
                <tbody id="tblConteudo" class="">
                    <tr style="width: 100%" id="exercicio-1">
                        <td class="text-center" style="width: 20%;">
                            <select class="form-control" name="usuarioID" id="usuarioID">
                                <option selected disabled value="">Exercício</option>
                                @<?php foreach ($arrayExercicios as $dados): ?>
                                    <option id="selectExercicioArray" value="{{$dados->id}}">{{$dados->nome}}</option>
                                <?php endforeach; ?>
                            </select>
                        </td>
                        <td class="text-center" style="width:13%;">
                            <input type="text" class="form-control">
                        </td>
                        <td class="text-center" style="width:13%;">
                            <input type="text" class="form-control">
                        </td>
                        <td class="text-center" style="width:13%;">
                            <input type="text" class="form-control">
                        </td>
                        <td class="text-center" style="width:13%;">
                            <input type="text" class="form-control">
                        </td>
                        <td class="text-center" style="width:13%;">
                            <input type="text" class="form-control">
                        </td>
                        <td class="text-center" style="width:5%;">
                            <button onclick="RemoveTableRow(this)" class="btn btn-danger" type="button"><i class="fas fa-trash-alt"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>