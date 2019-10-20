<div class="form-row">
    <div class="form-group col-md-6">
        <label for="nome" class="required">Nome</label>
        <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" value="{{old('nome', $dados->nome ?? '')}}" required />
    </div>
    <div class="form-group col-md-6">
        <label for="email">E-mail</label>
        <input type="text" class="form-control required" id="email" name="email" placeholder="Email" value="{{old('email', $dados->email ?? '')}}">
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-4">
        <label for="dataNascimento">Data de nascimento</label>
            <div class="input-group">
                <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                </div>
            <input type="text" class="form-control data" name="dataNascimento" value="{{old('dataNascimento', $dados->dataNascimento ?? '')}}">
        </div>
    </div>
    <div class="form-group col-md-4">
        <label>Sexo</label>
        <select id="sexo" name="sexo" class="form-control" value="{{old('sexo', $dados->sexo ?? '')}}">
            <option value="M">Masculino</option>
            <option value="F">Feminino</option>
        </select>
    </div>
    <div class="form-group col-md-4">
        <label>Telefone</label>
        <div class="input-group">
            <div class="input-group-addon">
                <i class="fa fa-phone"></i>
            </div>
            <input type="number" class="form-control telefone" name="telefone" value="{{old('telefone', $dados->telefone ?? '')}}">
        </div>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-6">
        <label for="cpf">CPF</label>
            <input type="number" class="form-control cpf" name="cpf" placeholder="CPF" value="{{old('cpf', $dados->cpf ?? '')}}">
    </div>
    <div class="form-group col-md-6">
        <label for="rg">RG</label>
            <input type="number" class="form-control rg" name="rg" placeholder="RG" value="{{old('rg', $dados->rg ?? '')}}">
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-6">
        <label for="objetivo_id" class="required">Objetivo</label>
        <select class="form-control" name="objetivo_id" id="objetivo_id">
            <option selected disabled value="">Selecione o Objetivo</option>
            @<?php foreach ($arrayObjetivos as $dados): ?>
                <option id="selectObjetivoArray" value="{{$dados->id}}">{{$dados->nome}}</option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="form-group col-md-4">
        <label>Tipo</label>
        <select id="tipo" name="tipo" class="form-control" value="{{old('tipo', $dados->tipo ?? '')}}">
            <option value="0">Aluno</option>
            <option value="1">Educador Físico</option>
        </select>
    </div>
</div>