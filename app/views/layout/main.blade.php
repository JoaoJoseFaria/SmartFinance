<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>SmartFinance::Gestão Financeira Pessoal</title>
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/simple-sidebar.css') }}">
    </head>
    <body>
        <div id="wrapper">
            <div id="sidebar-wrapper">
                <ul class="sidebar-nav">
                    <li class="sidebar-brand"><a href="/">SmartFinance</a></li>
                    <li><a href="/">Home</a></li>
                    <li><a href="/gestao">Gestão</a></li>
                    <li><a href="/movimentos">Movimentos</a></li>
                    <li><a href="/categorias">Categorias</a></li>
                    <li><a href="/sobre">Sobre</a></li>
                    @if(Auth::check())
                        <li><a href="/login">Logout</a></li>
                        <div class="panel panel-default">
                            </p>
                            <p>Benvindo</p>
                            <p>{{Auth::user()->name}}</p>
                            </p>
                        </div>
                    @else
                        <li><a href="/login">Login</a></li>
                    @endif
                </ul>
            </div>
            <div id="page-content-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="btn-group btn-group-justified" role="group" aria-label="...">
                              <div class="btn-group" role="group">
                                <a href="#menu-toggle" id="menu-toggle">
                                    <button type="button" class="btn btn-default hidden-lg hidden-md hidden-sm">Menu</button>
                                </a>
                              </div>
                            </div>
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery.js"></script>
        <script language="JavaScript" src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
        <script>
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
        </script>
        @yield('script')
    </body>
</html>