<div class="form-row">
    <div class="form-group col-md-6">
        <label for="pessoa_id" class="required">Nome</label>
        <select class="form-control" name="pessoa_id" id="pessoa_id">
            <option selected disabled value="">Selecione o Aluno</option>
                @<?php foreach ($arrayPessoas as $dados): ?>
                <option id="selectPessoaArray" value="{{$dados->id}}">{{$dados->nome}}</option>
                <?php endforeach; ?>
        </select>
    </div>
    <div class="form-group col-md-6">
        <label for="vigenciaAvaliacao" class="required">Vigência da Avaliação</label>
            <div class="input-group date">
                <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                </div>
            <input type="text" class="form-control pull-right dataRange" name="vigenciaAvaliacao" id="vigenciaAvaliacao">
        </div>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-2">
        <label for="massa" class="required">Massa (kg)</label>
            <input type="number" class="form-control numerico" id="massa" name="massa" value="{{old('massa', $dados->massa ?? '')}}" />
    </div>
    <div class="form-group col-md-2">
        <label for="estatura" class="required">Estatura</label>
        <input type="number" class="form-control numerico" id="estatura" name="estatura" value="{{old('estatura', $dados->estatura ?? '')}}" />
    </div>
    <div class="form-group col-md-2">
        <label for="peitoral" class="required">Peitoral</label>
        <input type="number" class="form-control numerico" id="peitoral" name="peitoral" value="{{old('peitoral', $dados->peitoral ?? '')}}" />
    </div>
    <div class="form-group col-md-2">
        <label for="axMedio" class="required">Axilar Médio</label>
        <input type="number" class="form-control numerico" id="axMedio" name="axMedio" value="{{old('axMedio', $dados->axMedio ?? '')}}" />
    </div>
    <div class="form-group col-md-2">
        <label for="subEscapular" class="required">Sub escapular</label>
        <input type="number" class="form-control numerico" id="subEscapular" name="subEscapular" value="{{old('subEscapular', $dados->subEscapular ?? '')}}" />
    </div>
    <div class="form-group col-md-2">
        <label for="tricipital" class="required">Tricipital</label>
        <input type="number" class="form-control numerico" id="tricipital" name="tricipital" value="{{old('tricipital', $dados->tricipital ?? '')}}" />
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-2">
        <label for="bicipital" class="required">Bicipital</label>
        <input type="number" class="form-control numerico" id="bicipital" name="bicipital" value="{{old('bicipital', $dados->bicipital ?? '')}}" />
    </div>
    <div class="form-group col-md-2">
        <label for="supraIliaca" class="required">Supra Iliaca</label>
        <input type="number" class="form-control numerico" id="supraIliaca" name="supraIliaca" value="{{old('supraIliaca', $dados->supraIliaca ?? '')}}" />
    </div>
    <div class="form-group col-md-2">
        <label for="abdominal" class="required">Abdominal</label>
        <input type="number" class="form-control numerico" id="abdominal" name="abdominal" value="{{old('abdominal', $dados->abdominal ?? '')}}" />
    </div>
    <div class="form-group col-md-2">
        <label for="coxa" class="required">Coxa</label>
        <input type="number" class="form-control numerico" id="coxa" name="coxa" value="{{old('coxa', $dados->coxa ?? '')}}" />
    </div>
    <div class="form-group col-md-2">
        <label for="panturrilha" class="required">Panturrilha</label>
        <input type="number" class="form-control numerico" id="panturrilha" name="panturrilha" value="{{old('panturrilha', $dados->panturrilha ?? '')}}" />
    </div>
    <div class="form-group col-md-2">
        <label for="torax" class="required">Tórax</label>
        <input type="number" class="form-control numerico" id="torax" name="torax" value="{{old('torax', $dados->torax ?? '')}}" />
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-2">
        <label for="bracoDireito" class="required">Braco Direito</label>
        <input type="number" class="form-control numerico" id="bracoDireito" name="bracoDireito" value="{{old('bracoDireito', $dados->bracoDireito ?? '')}}" />
    </div>
    <div class="form-group col-md-2">
        <label for="bracoEsquerdo" class="required">Braco Esquerdo</label>
        <input type="number" class="form-control numerico" id="bracoEsquerdo" name="bracoEsquerdo" value="{{old('bracoEsquerdo', $dados->bracoEsquerdo ?? '')}}" />
    </div>
    <div class="form-group col-md-2">
        <label for="antebracoDireito" class="required">Antebraco Direito</label>
        <input type="number" class="form-control numerico" id="antebracoDireito" name="antebracoDireito" value="{{old('antebracoDireito', $dados->antebracoDireito ?? '')}}" />
    </div>
    <div class="form-group col-md-2">
            <label for="antebracoEsquerdo" class="required">Antebraco Esquerdo</label>
            <input type="number" class="form-control numerico" id="antebracoEsquerdo" name="antebracoEsquerdo" value="{{old('antebracoEsquerdo', $dados->antebracoEsquerdo ?? '')}}" />
    </div>
    <div class="form-group col-md-2">
        <label for="cintura" class="required">Cintura</label>
        <input type="number" class="form-control numerico" id="cintura" name="cintura" value="{{old('cintura', $dados->cintura ?? '')}}" />
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-2">
        <label for="quadril" class="required">Quadril</label>
        <input type="number" class="form-control numerico" id="quadril" name="quadril" value="{{old('quadril', $dados->quadril ?? '')}}" />
    </div>
    <div class="form-group col-md-2">
        <label for="coxaDireita" class="required">Coxa Direita</label>
        <input type="number" class="form-control numerico" id="coxaDireita" name="coxaDireita" value="{{old('coxaDireita', $dados->coxaDireita ?? '')}}" />
    </div>
    <div class="form-group col-md-2">
        <label for="coxaEsquerda" class="required">Coxa Esquerda</label>
        <input type="number" class="form-control numerico" id="coxaEsquerda" name="coxaEsquerda" value="{{old('coxaEsquerda', $dados->coxaEsquerda ?? '')}}" />
    </div>
    <div class="form-group col-md-2">
        <label for="pernaDireita" class="required">Perna Direita</label>
        <input type="number" class="form-control numerico" id="pernaDireita" name="pernaDireita" value="{{old('pernaDireita', $dados->pernaDireita ?? '')}}" />
    </div>
    <div class="form-group col-md-2">
        <label for="pernaEsquerda" class="required">Perna Esquerda</label>
        <input type="number" class="form-control numerico" id="pernaEsquerda" name="pernaEsquerda" value="{{old('pernaEsquerda', $dados->pernaEsquerda ?? '')}}" />
    </div>
</div>