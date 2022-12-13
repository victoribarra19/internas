@extends('adminlte::page')

@section('title', 'Gráficos')

@section('content_header')
    <h1>Informes</h1>
@stop

@section('content')
<div class="col-md-12">
<div class="card card-danger">
                <div class="card-header">
                    <h3 class="card-title">Números Globales</h3>
                </div>
                    <div class="card-body">
                        <div class="row">
                        <div class="col-sm-4">
                            <h3 style="color:rgba(243, 98, 42, 0.8);"><strong>Total pasaron por PC: </strong>  {{$plot_data['total']}}</h3>     
                        </div>
                        <div class="col-sm-8">
                        <h3 style="color:rgba(243, 98, 42, 0.8);"><strong>Total rebotaron por PC: </strong>  {{$plot_data['fraudes']}}</h3>
                        </div>
                    </div>
                </div>
    </div>

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

    <div class="card card-danger">
                <div class="card-header">
                    <h3 class="card-title">Por seccional  y por candidato</h3>
                </div>
                    <div class="card-body">
                        <div class="row">
                        <div class="col-sm-4">
                            <h4>Secc 1</h4>
                            <h5 style="color:rgba(82, 75, 162, 0.8);"><strong>Carlos Godoy: </strong>  {{$plot_data['candidato1x1']}}</h5>
                            <h5 style="color:rgba(243, 98, 42, 0.8);"><strong>Miguel del Puerto: </strong> {{$plot_data['candidato2x1']}}</h5>
                            <h5 style="color:rgba(255, 206, 86, 0.8);"><strong>Derlis Rodríguez: </strong> {{$plot_data['candidato3x1']}}</h5>
                            <h5 style="color:rgba(255, 159, 64, 0.8);"><strong>Ibarra: </strong> {{$plot_data['candidato4x1']}}</h5>
                            <canvas id="myChart1" width="280" height="200"></canvas>
                        </div>
                        <div class="col-sm-4">
                            <h4>Secc 2</h4>
                            <h5 style="color:rgba(82, 75, 162, 0.8);"><strong>Carlos Godoy: </strong>  {{$plot_data['candidato1x2']}}</h5>
                            <h5 style="color:rgba(243, 98, 42, 0.8);"><strong>Miguel del Puerto: </strong> {{$plot_data['candidato2x2']}}</h5>
                            <h5 style="color:rgba(255, 206, 86, 0.8);"><strong>Derlis Rodríguez: </strong> {{$plot_data['candidato3x2']}}</h5>
                            <h5 style="color:rgba(255, 159, 64, 0.8);"><strong>Ibarra: </strong> {{$plot_data['candidato4x2']}}</h5>
                            <canvas id="myChart2" width="280" height="200"></canvas>
                        </div>
                        <div class="col-sm-4">
                            <h4>Secc 3</h4>
                            <h5 style="color:rgba(82, 75, 162, 0.8);"><strong>Carlos Godoy: </strong>  {{$plot_data['candidato1x3']}}</h5>
                            <h5 style="color:rgba(243, 98, 42, 0.8);"><strong>Miguel del Puerto: </strong> {{$plot_data['candidato2x3']}}</h5>
                            <h5 style="color:rgba(255, 206, 86, 0.8);"><strong>Derlis Rodríguez: </strong> {{$plot_data['candidato3x3']}}</h5>
                            <h5 style="color:rgba(255, 159, 64, 0.8);"><strong>Ibarra: </strong> {{$plot_data['candidato4x3']}}</h5>
                            <canvas id="myChart3" width="280" height="200"></canvas>
                        </div>
                    </div>
                </div>
    </div>

    <div class="card card-danger">
                <div class="card-header">
                    <h3 class="card-title">Participación por Diputados total</h3>
                </div>
                    <div class="card-body">
                        <div class="row">
                        <div class="col-sm-4">
                            <h3 style="color:rgba(82, 75, 162, 0.8);"><strong>Carlos Godoy: </strong>  {{$plot_data['candidato1']}}</h3>
                            <h3 style="color:rgba(243, 98, 42, 0.8);"><strong>Miguel del Puerto: </strong> {{$plot_data['candidato2']}}</h3>
                            <h3 style="color:rgba(255, 206, 86, 0.8);"><strong>Derlis Rodríguez: </strong> {{$plot_data['candidato3']}}</h3>
                            <h3 style="color:rgba(255, 159, 64, 0.8);"><strong>Ibarra: </strong> {{$plot_data['candidato4']}}</h3>
                        </div>
                        <div class="col-sm-8">
                            <canvas id="myChartq" width="280" height="100"></canvas>
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


    var ctx1 = document.getElementById("myChart1").getContext('2d');
    var myChart1 = new Chart(ctx1, {
        type: 'bar',
        data: {
            labels: ["Carlos Godoy", "Del Puerto", "Derlis Rodriguez", "Ibarra"],
            datasets: [{
                
                data: [12, 18, 22,9],
                //data: [plot_data.secc1, plot_data.secc2, plot_data.secc3],
                backgroundColor: [
                    'rgba(82, 75, 162, 0.8)',
                    'rgba(243, 98, 42, 0.8)',
                    'rgba(255, 206, 86, 0.8)',
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



    var ctx2 = document.getElementById("myChart2").getContext('2d');
    var myChart2 = new Chart(ctx2, {
        type: 'bar',
        data: {
            labels: ["Carlos Godoy", "Del Puerto", "Derlis Rodriguez", "Ibarra"],
            datasets: [{
                
                data: [12, 18, 22,9],
                //data: [plot_data.secc1, plot_data.secc2, plot_data.secc3],
                backgroundColor: [
                    'rgba(82, 75, 162, 0.8)',
                    'rgba(243, 98, 42, 0.8)',
                    'rgba(255, 206, 86, 0.8)',
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



    var ctx3 = document.getElementById("myChart3").getContext('2d');
    var myChart3 = new Chart(ctx3, {
        type: 'bar',
        data: {
            labels: ["Carlos Godoy", "Del Puerto", "Derlis Rodriguez", "Ibarra"],
            datasets: [{
                
                data: [12, 18, 22,9],
                //data: [plot_data.secc1, plot_data.secc2, plot_data.secc3],
                backgroundColor: [
                    'rgba(82, 75, 162, 0.8)',
                    'rgba(243, 98, 42, 0.8)',
                    'rgba(255, 206, 86, 0.8)',
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

    // POR CANDIDatO ddirecto

    var ctxq = document.getElementById("myChartq").getContext('2d');
    var myChartq = new Chart(ctxq, {
        type: 'bar',
        data: {
            labels: ["Carlos Godoy", "Del Puerto", "Derlis Rodriguez", "Ibarra"],
            datasets: [{
                
                data: [12, 18, 22,9],
                //data: [plot_data.secc1, plot_data.secc2, plot_data.secc3],
                backgroundColor: [
                    'rgba(82, 75, 162, 0.8)',
                    'rgba(243, 98, 42, 0.8)',
                    'rgba(255, 206, 86, 0.8)',
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