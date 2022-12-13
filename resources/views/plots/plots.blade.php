@extends('adminlte::page')

@section('title', 'Gráficos')

@section('content_header')
    <h1>Informes</h1>
@stop

@section('content')
<div class="col-md-12">
    <div class="card card-danger">
                <div class="card-header">
                    <h3 class="card-title">Participación por Seccional</h3>
                </div>
                    <div class="card-body">
                        <div class="row">
                        <div class="col-sm-4">
                            <h3 style="color:rgba(82, 75, 162, 0.8);"><strong>Seccional 1: </strong>  {{$plot_data['secc1']}}</h3>
                            <h3 style="color:rgba(243, 98, 42, 0.8);"><strong>Seccional 2: </strong> {{$plot_data['secc2']}}</h3>
                            <h3 style="color:rgba(255, 159, 64, 0.8);"><strong>Seccional 3: </strong> {{$plot_data['secc3']}}</h3>
                        </div>
                        <div class="col-sm-8">
                            <canvas id="myChart" width="280" height="100"></canvas>
                        </div>
                    </div>
                </div>
    </div>
</div>
   


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
var plot_data = {{ Js::from($plot_data) }};
//var json = JSON.parse(plot_data);
//alert(JSON.stringify(plot_data));
$(function () {
    var ctx = document.getElementById("myChart").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ["Seccional 1", "Seccional 2", "Seccional 3"],
            datasets: [{
                
                data: [12, 18, 5],
                //data: [plot_data.secc1, plot_data.secc2, plot_data.secc3],
                backgroundColor: [
                    'rgba(82, 75, 162, 0.8)',
                    'rgba(243, 98, 42, 0.8)',
                   // 'rgba(255, 206, 86, 0.8)',
                   // 'rgba(75, 192, 192, 0.8)',
                   // 'rgba(153, 102, 255, 0.8)',
                    'rgba(255, 159, 64, 0.8)'
                ],
                //hoverOffset: 4
        
            }]
        },
        
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            }
        },
        options: {        
  legend: {
    display: false
  }
}
    });
});
</script>
@stop