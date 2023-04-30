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
                    <h3 class="card-title">Participación por Local de votación</h3>
                </div>
                    <div class="card-body">
                        <div class="row">
                        <div class="col-sm-6">
                            <h3 style="color:rgba(82, 75, 162, 0.8);"><strong>Colegio Nacional Pedro P. Peña: </strong>  {{$plot_data['local1']}}</h3>
                            <h3 style="color:rgba(243, 98, 42, 0.8);"><strong>Colegio Enrique S. Lopez: </strong> {{$plot_data['local2']}}</h3>
                            <h3 style="color:rgba(255, 206, 86, 0.8);"><strong>Escuela Bernardino Caballero: </strong> {{$plot_data['local3']}}</h3>
                            <h3 style="color:rgba(75, 192, 192, 0.8);"><strong>Escuela Wenceslaa Escalada: </strong>  {{$plot_data['local4']}}</h3>
                            <h3 style="color:rgba(153, 102, 255, 0.8);"><strong>Colegio San Roque: </strong> {{$plot_data['local5']}}</h3>
                            <h3 style="color:rgba(255, 159, 64, 0.8);"><strong>Escuela Florentín Oviedo: </strong> {{$plot_data['local6']}}</h3>
                            
                        </div>
                        <div class="col-sm-6">
                            
                            <h3 style="color:rgba(182, 85, 172, 0.8);"><strong>Escuela Alicio Peralta: </strong>  {{$plot_data['local7']}}</h3>
                            <h3 style="color:rgba(143, 98, 42, 0.8);"><strong>Escuela Capillita: </strong> {{$plot_data['local8']}}</h3>
                            <h3 style="color:rgba(100, 155, 164, 0.8);"><strong>Escuela Manuel Ortiz Guerrero: </strong> {{$plot_data['local9']}}</h3>
                            <h3 style="color:rgba(82, 175, 102, 0.8);"><strong>Colegio de San Antonio: </strong>  {{$plot_data['local10']}}</h3>
                            <h3 style="color:rgba(143, 198, 42, 0.8);"><strong> Blas Garay: </strong> {{$plot_data['local11']}}</h3>
                         <!--   <h3 style="color:rgba(200, 55, 200, 0.8);"><strong>Escuela Calle 1 (Blas Garay): </strong> {{$plot_data['local12']}}</h3> -->
                        </div>
                        <div class="col-sm-12">
                            <canvas id="myChart" width="280" height="100"></canvas>
                        </div>
                    </div>
                </div>
    </div>


    
    <div class="card card-danger">
                <div class="card-header">
                    <h3 class="card-title">Intento de Fraude por Local de votación</h3>
                </div>
                    <div class="card-body">
                        <div class="row">
                        <div class="col-sm-6">
                            <h3 style="color:rgba(82, 75, 162, 0.8);"><strong>Colegio Nacional Pedro P. Peña: </strong>  {{$plot_data['fraudes1']}}</h3>
                            <h3 style="color:rgba(243, 98, 42, 0.8);"><strong>Colegio Enrique S. Lopez: </strong> {{$plot_data['fraudes2']}}</h3>
                            <h3 style="color:rgba(255, 206, 86, 0.8);"><strong>Escuela Bernardino Caballero: </strong> {{$plot_data['fraudes3']}}</h3>
                            <h3 style="color:rgba(75, 192, 192, 0.8);"><strong>Escuela Wenceslaa Escalada: </strong>  {{$plot_data['fraudes4']}}</h3>
                            <h3 style="color:rgba(153, 102, 255, 0.8);"><strong>Colegio San Roque: </strong> {{$plot_data['fraudes5']}}</h3>
                            <h3 style="color:rgba(255, 159, 64, 0.8);"><strong>Escuela Florentín Oviedo: </strong> {{$plot_data['fraudes6']}}</h3>
                            
                        </div>
                        <div class="col-sm-6">
                            
                            <h3 style="color:rgba(182, 85, 172, 0.8);"><strong>Escuela Alicio Peralta: </strong>  {{$plot_data['fraudes7']}}</h3>
                            <h3 style="color:rgba(143, 98, 42, 0.8);"><strong>Escuela Capillita: </strong> {{$plot_data['fraudes8']}}</h3>
                            <h3 style="color:rgba(100, 155, 164, 0.8);"><strong>Escuela Manuel Ortiz Guerrero: </strong> {{$plot_data['fraudes9']}}</h3>
                            <h3 style="color:rgba(82, 175, 102, 0.8);"><strong>Colegio de San Antonio: </strong>  {{$plot_data['fraudes10']}}</h3>
                            <h3 style="color:rgba(143, 198, 42, 0.8);"><strong> Blas Garay: </strong> {{$plot_data['fraudes11']}}</h3>
                           <!-- <h3 style="color:rgba(200, 55, 200, 0.8);"><strong>Escuela Calle 1 (Blas Garay): </strong> {{$plot_data['fraudes12']}}</h3> -->
                        </div>
                        <div class="col-sm-12">
                            <canvas id="myChart1" width="280" height="100"></canvas>
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
            labels: ["Colegio Nacional Pedro P. Peña","Colegio Enrique S. Lopez","Escuela Bernardino Caballero","Escuela Wenceslaa Escalada","Colegio San Roque","Escuela Florentín Oviedo","Escuela Alicio Peralta","Escuela Capillita","Escuela Manuel O. Guerrero","Colegio de San Antonio","Blas Garay"],
            datasets: [{
                
                //data: [12, 18, 5],
                data: [plot_data.local1, plot_data.local2, plot_data.local3, plot_data.local4,plot_data.local5,plot_data.local6,plot_data.local7,plot_data.local8,plot_data.local9,plot_data.local10,plot_data.local11],
                backgroundColor: [
                    'rgba(82, 75, 162, 0.8)',
                    'rgba(243, 98, 42, 0.8)',
                    'rgba(255, 206, 86, 0.8)',
                    'rgba(75, 192, 192, 0.8)',
                    'rgba(153, 102, 255, 0.8)',
                    'rgba(255, 159, 64, 0.8)',
                    'rgba(182, 85, 172, 0.8)',
                    'rgba(143, 98, 42, 0.8)',
                    'rgba(100, 155, 164, 0.8)',
                    'rgba((82, 175, 102, 0.8)',
                    'rgba(143, 198, 42, 0.8)'
                    //'rgba(200, 55, 200, 0.8)'
                ],
                //hoverOffset: 4
        
            }]
        },
        
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true,
                        autoSkip: false
                    }
                }]
            },
            scales: {
                xAxes: [{
                    ticks: {
                        beginAtZero:true,
                        autoSkip: false
                    }
                }]
            },
            legend: {
                display: false
            }
        
        }
    });

    var ctx = document.getElementById("myChart1").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ["Colegio Nacional Pedro P. Peña","Colegio Enrique S. Lopez","Escuela Bernardino Caballero","Escuela Wenceslaa Escalada","Colegio San Roque","Escuela Florentín Oviedo","Escuela Alicio Peralta","Escuela Capillita","Escuela Manuel O. Guerrero","Colegio de San Antonio","Blas Garay"],
            datasets: [{
                
                //data: [12, 18, 5],
                data: [plot_data.fraudes1, plot_data.fraudes2, plot_data.fraudes3, plot_data.fraudes4,plot_data.fraudes5,plot_data.fraudes6,plot_data.fraudes7,plot_data.fraudes8,plot_data.fraudes9,plot_data.fraudes10,plot_data.fraudes11],
                backgroundColor: [
                    'rgba(82, 75, 162, 0.8)',
                    'rgba(243, 98, 42, 0.8)',
                    'rgba(255, 206, 86, 0.8)',
                    'rgba(75, 192, 192, 0.8)',
                    'rgba(153, 102, 255, 0.8)',
                    'rgba(255, 159, 64, 0.8)',
                    'rgba(182, 85, 172, 0.8)',
                    'rgba(143, 98, 42, 0.8)',
                    'rgba(100, 155, 164, 0.8)',
                    'rgba((82, 175, 102, 0.8)',
                    'rgba(143, 198, 42, 0.8)'
                    //'rgba(200, 55, 200, 0.8)'
                ],
                //hoverOffset: 4
        
            }]
        },
        
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true,
                        autoSkip: false
                    }
                }]
            },
            scales: {
                xAxes: [{
                    ticks: {
                        beginAtZero:true,
                        autoSkip: false
                    }
                }]
            },
            legend: {
                display: false
            }
        
        }
    });

    /*
    var ctx1 = document.getElementById("myChart1").getContext('2d');
    var myChart1 = new Chart(ctx1, {
        type: 'bar',
        data: {
            labels: ["Carlos Godoy", "Del Puerto", "Derlis Rodriguez", "Candidato"],
            datasets: [{
                
                //data: [12, 18, 22,9],
                data: [plot_data.candidato1x1,plot_data.candidato2x1,plot_data.candidato3x1,plot_data.candidato4x1],
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
            },
            legend: {
                display: false
            }
        
        }
    });



    var ctx2 = document.getElementById("myChart2").getContext('2d');
    var myChart2 = new Chart(ctx2, {
        type: 'bar',
        data: {
            labels: ["Carlos Godoy", "Del Puerto", "Derlis Rodriguez", "Candidato"],
            datasets: [{
                
                //data: [12, 18, 22,9],
                data: [plot_data.candidato1x2,plot_data.candidato2x2,plot_data.candidato3x2,plot_data.candidato4x2],
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
            },
            legend: {
                display: false
            }
        
        }
    });



    var ctx3 = document.getElementById("myChart3").getContext('2d');
    var myChart3 = new Chart(ctx3, {
        type: 'bar',
        data: {
            labels: ["Carlos Godoy", "Del Puerto", "Derlis Rodriguez", "Candidato"],
            datasets: [{
                
                //data: [12, 18, 22,9],
                data: [plot_data.candidato1x3,plot_data.candidato2x3,plot_data.candidato3x3,plot_data.candidato4x3],
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
            },
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
            labels: ["Carlos Godoy", "Del Puerto", "Derlis Rodriguez", "Candidato"],
            datasets: [{
                
                //data: [12, 18, 22,9],
                data: [plot_data.candidato1, plot_data.candidato2, plot_data.candidato3,plot_data.candidato4],
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
            },
            legend: {
                display: false
            }
        
        }
    });
 */
});
</script>
@stop