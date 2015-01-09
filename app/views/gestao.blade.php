@extends("layout.main")
@section("content")
    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Total gasto</h3>
                </div>
                <div class="panel-body">
                    <div id="piechart_3d" style="width: 100%; height: 500px;"></div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Valor por categoria</h3>
                </div>
                <div class="panel-body">
                    <div id="chart_div" style="width: 100%; height: 500px;"></div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('script')
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
        google.load("visualization", "1", {packages:["corechart"]});
        google.setOnLoadCallback(drawChart);
        function drawChart() {
            var data = google.visualization.arrayToDataTable({{json_encode($dados)}});

            var options = {
                is3D: true,
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
            chart.draw(data, options);
        }
    </script>
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
        google.load("visualization", "1", {packages:["corechart"]});
        google.setOnLoadCallback(drawChart);
        function drawChart() {
            var data = google.visualization.arrayToDataTable({{json_encode($dados)}});

            var options = {
                vAxis: {title: 'Categoria',  titleTextStyle: {color: 'blue'}}
            };

            var chart = new google.visualization.BarChart(document.getElementById('chart_div'));

            chart.draw(data, options);
        }
    </script>
@stop