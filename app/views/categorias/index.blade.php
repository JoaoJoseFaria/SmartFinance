@extends('layout.main')
@section('content')
<div class="container">
    <div class="jumbotron">
        <div class="row">
            <div class="col-md-offset-2 col-md-3">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Categorias</h3>
                    </div>
                    <div class="panel-body">
                        <ul>
                            @foreach ($categorias as $categoria)
                                @if($categoria->parentId == null)
                                    <li><a href="/categorias/{{$categoria->id}}">{{$categoria->name}}</a></li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-offset-2 col-md-3">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Categorias</h3>
                    </div>
                    <div class="panel-body">
                        <ul>
                            @foreach ($categorias as $categoria)
                                @if($categoria->parentId == null)
                                    <li><a href="/categorias/{{$categoria->id}}">{{$categoria->name}}</a></li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop