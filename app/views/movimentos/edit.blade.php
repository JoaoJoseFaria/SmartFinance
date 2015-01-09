@extends('movimentos.show')
@section('detail')
{{Form::open(['url'=>'/movimentos/' . $movimento->id, 'class'=>'form'])}}
{{Form::hidden('id',$movimento->id)}}
<div class="row">
    <div class="col-md-4">{{Form::label('date','Data:')}}</div>
    <div class="col-md-8">{{ Form::text('date', $movimento->date, ['class' => 'form-control']) }}</div>
</div>
<div class="row">
    <div class="col-md-4">{{Form::label('idCat','Categoria:') }}</div>
    <div class="col-md-8">
        @if(count($listCategorias)>0)
            {{ Form::select('idCat', $listCategorias, $movimento->idCat, ['class' => 'form-control']) }}
        @endif
    </div>
</div>
<div class="row">
    <div class="col-md-4">{{Form::label('value','Valor:')}}</div>
    <div class="col-md-8">{{Form::text('value', $movimento->value, ['class' => 'form-control'])}}</div>
</div>
<div class="row">
    <div class="col-md-12">
        <img src="{{$movimento->image}}" class="img-responsive">
    </div>
</div>
<div class="row">
    <div class="col-sm-3">{{Form::submit('Gravar', ['class' => 'btn btn-primary', 'name' => 'action']) }}</div>
    <div class="col-sm-3">{{Form::submit('Eliminar', ['class' => 'btn btn-primary', 'name' => 'action']) }}</div>
</div>
{{Form::close()}}
@stop