@extends('categorias.index')
@section('detailCategorias')
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">{{$categoria->name}}</h3>
            </div>
            <div class="panel-body">
                {{Form::open(['url'=>'/categorias/' . $categoria->id, 'class'=>'form'])}}
                {{Form::hidden('id',$categoria->id)}}
                <div class="row">
                    <div class="col-md-4">{{Form::label('name','Nome:')}}</div>
                    <div class="col-md-8">{{ Form::text('name', $categoria->name, ['class' => 'form-control']) }}</div>
                </div>
                <div class="row">
                    <div class="col-md-4">{{Form::label('parentId','Nivel superior:') }}</div>
                    <div class="col-md-8">
                        @if(count($categorias)>0)
                            {{ Form::select('parentId', $listCategorias, $categoria->parentId, ['class' => 'form-control']) }}
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">{{Form::label('maxValue','Tecto máximo:')}}</div>
                    <div class="col-md-8">{{Form::text('maxValue', $categoria->maxValue, ['class' => 'form-control'])}}</div>
                </div>
                <div class="row">
                    <div class="col-sm-2">{{Form::submit('Gravar', ['class' => 'btn btn-primary', 'name' => 'action']) }}</div>
                    <div class="col-sm-2">{{Form::submit('Eliminar', ['class' => 'btn btn-primary', 'name' => 'action']) }}</div>
                {{Form::close()}}
            </div>
        </div>
    </div>
</div>
@stop