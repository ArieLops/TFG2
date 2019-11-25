<div class="form-row">
    @foreach($treinos["info"] as $key => $value)
    <h1>{{$value["exercicio"]}}</h1>
    <h1>{{$value["musculatura"]}}</h1>
    <h1>{{$value["serie"]}}</h1>
    <h1>{{$value["repeticao"]}}</h1>
    <h1>{{$value["carga"]}}</h1>
    @endforeach
</div>
<div class="container">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Índice de Massa Muscular</h3>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            </div>
        </div>
    </div>
</div>