<div class="form-row">
    <div class="form-group col-md-4">
        <label for="nome" class="required">Nome</label>
        <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" value="{{old('nome', $dados->nome ?? '')}}" required />
    </div>
    <div class="form-group col-md-4">
        <label for="tags">Tags Musculatura:</label>
        <select id="tags" name="tags[]" class="form-control" multiple required></select>
    </div>
    <div class="form-group col-md-4">
        <label for="tagsAparelho">Tags Aparelho:</label>
        <select id="tagsAparelho" name="tagsAparelho[]" class="form-control" multiple required></select>
    </div>
</div>