<div class="box box-warning">    
    <div class="box-body">
        <div class="form-group">
            <label>Nome</label>
            <input type="text" class="form-control">
        </div>
        <a class="btn btn-warning pull-right add-registro" data-added="0">
            <i class="glyphicon glyphicon-plus"></i> Adicionar exercício
        </a>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <div class="box-body">
                <table class="table table-bordered table-hover" id="tabelaExercicios">
                    <thead>
                        <tr style="width: 100%">
                            <th class="text-center" style="width: 2%">ID</th>
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
                        <tr style="width: 100%" id="exercicio-1">
                            <td><span class="sn">1</span>.</td>
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
                                <a class="btn btn-danger delete-registro type="button" data-id="1"><i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div style="display:none;">
                    <table id="tabelaExercicioAmostra">
                        <tr id="">
                            <td><span class="sn"></span>.</td>
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
                                <a class="btn btn-danger delete-registro type="button" data-id="0"><i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>