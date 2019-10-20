<div class="form-row">
    <div class="form-group col-md-4">
        <label for="nome" class="required">Nome</label>
        <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" value="{{old('nome', $dados->nome ?? '')}}" />
    </div>
    <div class="form-group col-md-4">
        <label for="tagsMusculatura">Tags Musculatura:</label>
        <select id="tagsMusculatura" name="tagsMusculatura[]" class="form-control" multiple></select>
    </div>
    <div class="form-group col-md-4">
        <label for="tagsAparelho">Tags Aparelho:</label>
        <select id="tagsAparelho" name="tagsAparelho[]" class="form-control" multiple></select>
    </div>
</div>