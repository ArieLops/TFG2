<div class="form-row">
    <div class="form-group col-md-12">
    @foreach($treinos["info"] as $key => $value)
    @if($flag = null != $key)
        <div class="box box-info box-solid">
            <div class="box-header with-border">
                <h3 class="box-title">Treino</h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
                    </div>
            </div>
            <div class="box-body">
                <i class="fas fa-dumbbell"> Exercício: {{$value["exercicio"]}}</i></br>
                <i class="fas fa-user-ninja"> Musculatura: {{$value["musculatura"]}}</i></br>
                <i class="fas fa-table"> Séries: {{$value["serie"]}}</i></br>
                <i class="fas fa-redo-alt"> Repetições: {{$value["repeticao"]}}</i></br>
                <i class="fas fa-weight-hanging"> Carga (Kg): {{$value["carga"]}}</i></br>
                <i class="fas fa-thumbs-up"> Realizado: <input value="{{$key}}" id="exercicioRealizado" type="checkbox" onclick="exercicioRealizado()"/></i></br>
            </div>
        </div>
    @else
    <div class="box box-info box-solid">
            <div class="box-header with-border">
                <h3 class="box-title">Treino</h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
                    </div>
            </div>
            <div class="box-body">
                    <i class="fas fa-dumbbell"> Exercício: {{$value["exercicio"]}}</i></br>
                <i class="fas fa-user-ninja"> Musculatura: {{$value["musculatura"]}}</i></br>
                <i class="fas fa-table"> Séries: {{$value["serie"]}}</i></br>
                <i class="fas fa-redo-alt"> Repetições: {{$value["repeticao"]}}</i></br>
                <i class="fas fa-weight-hanging"> Carga (Kg): {{$value["carga"]}}</i></br>
                <i class="fas fa-thumbs-up"> Realizado: <input value="{{$key}}" id="exercicioRealizado" type="checkbox" onclick="exercicioRealizado()"/></i></br>
            </div>
        </div>
    @endif
@endforeach
<script>
    $("input").on("click", function(){
        var $checked = $("input:checked").val();
    });
</script>

        