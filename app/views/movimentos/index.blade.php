@extends('layout.main')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Movimentos</h3>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <tr>
                                <th>Data</th>
                                <th>Categoria</th>
                                <th>Valor</th>
                                <th></th>
                            </tr>
                            @foreach($movimentos as $movimento)
                                <tr>
                                    <td>{{$movimento->date}}</td>
                                    <td>{{$movimento->categorias->name}}</td>
                                    <td>{{$movimento->value}}</td>
                                    <td class="text-right">
                                        <a href='/movimentos/{{$movimento->id}}'>
                                            <div class="btn btn-xs btn-primary">Alterar</div>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop