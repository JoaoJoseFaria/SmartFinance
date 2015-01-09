@extends("layout.main")
@section("content")
<div class="row">
    <div class="col-md-offset-3 col-md-5">
        <div class="panel panel-default">
            <div class="panel-heading">
                Login
            </div>
            <div class="panel-body">
                {{ Form::open(array('url' => 'login', 'class'=>'form')) }}
                <div class="row">{{ $errors->first('username') }}</div>
                <div class="row">{{ $errors->first('password') }}</div>
                <div class="row">
                    <div class="col-md-4">{{Form::label('username','Username:')}}</div>
                    <div class="col-md-8">{{Form::text('username', '', ['class' => 'form-control']) }}</div>
                </div>
                <div class="row">
                    <div class="col-md-4">{{Form::label('password','Password:')}}</div>
                    <div class="col-md-8">{{Form::password('password', ['class' => 'form-control']) }}</div>
                </div>
                <div class="row">
                    <div class="col-sm-3">{{Form::submit('Login', ['class' => 'btn btn-primary']) }}</div>
                </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>
</div>
@stop