<div class="form-row">
    <div class="form-group col-md-12">
    @foreach($treinos["info"] as $key => $value)
    @if($flag = null != $key)
        <div class="box box-success box-solid">
            <div class="box-header with-border">
                <h3 class="box-title">Treino</h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
                    </div>
            </div>
            <div class="box-body">
                <i class="fas fa-dumbbell">{{$value["exercicio"]}}</i></br>
                <i class="fas fa-dumbbell">{{$value["musculatura"]}}</i></br>
                <i class="fas fa-dumbbell">{{$value["serie"]}}</i></br>
                <i class="fas fa-dumbbell">{{$value["repeticao"]}}</i></br>
                <i class="fas fa-dumbbell">{{$value["carga"]}}</i></br>
            </div>
        </div>
    @else
    <div class="box box-success box-solid">
            <div class="box-header with-border">
                <h3 class="box-title">Treino</h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
                    </div>
            </div>
            <div class="box-body">
                <i class="fas fa-dumbbell">{{$value["exercicio"]}}</i></br>
                <i class="fas fa-dumbbell">{{$value["musculatura"]}}</i></br>
                <i class="fas fa-dumbbell">{{$value["serie"]}}</i></br>
                <i class="fas fa-dumbbell">{{$value["repeticao"]}}</i></br>
                <i class="fas fa-dumbbell">{{$value["carga"]}}</i></br>
            </div>
        </div>
    @endif
@endforeach

        