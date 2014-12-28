@extends('layout.main')
@section('content')
<div class="row">
    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Categorias</h3>
            </div>
            <div class="panel-body">
                {{$categorias}}
                <a href="/categorias">
                    <button type="button" class="btn btn-primary" aria-label="Left Align">Nova</button>
                </a>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        @yield('detail')
    </div>
</div>
@stop