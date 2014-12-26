@extends('categorias.index')
@section('detailCategorias')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Nova</h3>
                </div>
                <div class="panel-body">
                    {{Form::open(['url'=>'/categorias','class'=>'form'])}}
                    <div class="row">
                        <div class="col-md-4">{{Form::label('name','Nome:')}}</div>
                        <div class="col-md-8">{{ Form::text('name', '', ['class' => 'form-control']) }}</div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">{{Form::label('parentId','Nivel superior:') }}</div>
                        <div class="col-md-8">
                            @if(count($categorias)>0)
                                {{ Form::select('parentId', $listCategorias, null, ['class' => 'form-control']) }}
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">{{Form::label('maxValue','Tecto máximo:')}}</div>
                        <div class="col-md-8">{{Form::text('maxValue', '', ['class' => 'form-control'])}}</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-2">{{Form::submit('Gravar', ['class' => 'btn btn-primary']) }}</div>
                        <div class="col-sm-2">{{Form::reset('Limpar', ['class' => 'btn btn-primary']) }}
                    </div>
                    {{Form::close()}}
                </div>
            </div>
        </div>
    </div>
@stop