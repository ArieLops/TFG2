@if (session("mensagem"))
<div class="alert alert-success alert-dismissible" data-auto-dismiss="3000">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <h4><i class="icon fa fa-check"></i> Mensagem</h4>
    <ul>
        <li>{{ session("mensagem") }}</li>
    </ul>
</div>
@endif