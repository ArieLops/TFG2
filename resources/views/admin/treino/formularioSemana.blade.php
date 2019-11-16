<div class="row">
    <div class="form-group col-md-6">
        <label for="pessoaSelecionada">Pessoa selecionada</label>
        <input type="text" class="form-control" id="pessoaSelecionada" name="pessoaSelecionada" disabled>
    </div>
    <div class="form-group col-md-6">
        <label for="objetivoSelecionado">Objetivo selecionado</label>
        <input type="text" class="form-control" id="objetivoSelecionado" name="objetivoSelecionado" disabled>
    </div>
</div>
<div class="row">
    <div class="form-group col-md-3">
        <label for="treino">Vigência do treino</label>
        <div class="input-group">
            <div class="input-group-addon">
                <i class="fa fa-calendar"></i>
            </div>
            <input type="text" class="form-control pull-right dataRange" id="vigenciaTreino" name="vigenciaTreino">
        </div>
    </div>
</div>
<div class="form-row">
    <button type="button" id="addOpcaoTreino" data-target="ExemploModalCentralizado" class="btn btn-info">Adicionar treino</button>
</div>


<!-- MODAL -->
<div class="modal modal-warning fade in" id="modalLesoes" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span></button>
              <h4 class="modal-title">Possíveis lesões do praticante</h4>
            </div>
            <div class="modal-body" id="contModal">
              
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-outline">Save changes</button>
            </div>
        </div>
    </div>
</div>