<div class="form-row">
    <div class="form-group col-md-6">
        <label for="nome" class="required">Nome</label>
        <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" value="{{old('nome', $dados->nome ?? '')}}" />
    </div>
</div>