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
<div class="modal fade" id="modalLesoes" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="TituloModalCentralizado">Título do modal</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" id="contModal">
            <h2>Este usuário contém lesões que devem ser lembradas!</h2>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
          <button type="button" class="btn btn-primary">Salvar mudanças</button>
        </div>
      </div>
    </div>
</div>
