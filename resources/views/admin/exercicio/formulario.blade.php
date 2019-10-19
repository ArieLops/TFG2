<div class="form-row">
    <div class="form-group col-md-6">
        <label for="nome" class="required">Nome</label>
        <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" value="{{old('nome', $dados->nome ?? '')}}" required />
    </div>
    <div class="form-group col-md-6">
        <label for="tags">Tags:</label>
        <select id="tags" name="tags[]" class="form-control" multiple></select>
    </div>
</div>