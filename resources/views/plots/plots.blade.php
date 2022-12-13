@extends('adminlte::page')

@section('title', 'Gráficos')

@section('content_header')
    <h1>Graficos</h1>
@stop

@section('content')
<div class="col-md-12">
    <div class="card card-danger">
                <div class="card-header">
                    <h3 class="card-title">Agregar ciudad</h3>
                </div>
                <div class="card-body">
                    <canvas id="myChart" width="50" height="20"></canvas>
                </div>
    </div>
</div>
   


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
$(function () {
    var ctx = document.getElementById("myChart").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ["Red", "Blue", "Yellow", "Green"],
            datasets: [{
                label: ' of Votes',
                data: [12, 19, 3, 3],
                backgroundColor: [
                    'rgba(82, 75, 162, 0.8)',
                    'rgba(243, 98, 42, 0.8)',
                   // 'rgba(255, 206, 86, 0.8)',
                   // 'rgba(75, 192, 192, 0.8)',
                    'rgba(153, 102, 255, 0.8)',
                    'rgba(255, 159, 64, 0.8)'
                ],
                hoverOffset: 4
        
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
        }
    });
});
</script>
@stop