<div class="form-row">
    @foreach($consultaTreino as $key => $value)
    <h3>{{$consultaTreino[$key]["musculaturas"]["nome"]}}</h3>
    @endforeach
</div>
    