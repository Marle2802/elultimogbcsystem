@extends('layouts.app')
@section('aside_menu')
@include('layouts.aside')
@endsection
@section('titulo_ventana', 'Dashboard')

@section('Contenido_app')








<hr>

<div id="wrapper">

    <div id="content-wrapper" class="d-flex flex-column">

        <div id="content">

            <div class="container-fluid">

                <!-- Page Heading -->


                <!-- Content Row -->
                <div class="row">

                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text font-weight-bold text-primary text-uppercase mb-1">
                                            Planes</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $plan }}</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-success shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text font-weight-bold text-success text-uppercase mb-1">
                                            Domos</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $domo }}</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fa-solid fa-igloo fa-2x text-gray-400"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-info shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text font-weight-bold text-info text-uppercase mb-1">Reservas
                                        </div>
                                        <div class="row no-gutters align-items-center">
                                            <div class="col-auto">
                                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{ $reserva }}
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="progress progress-sm mr-2">
                                                    <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-auto">

                                        <i class="bi bi-calendar-month-fill fa-2x text-gray-400"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal -->

                    <!-- Pending Requests Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-warning shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text font-weight-bold text-warning text-uppercase mb-1">
                                            Ventas</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $venta }}</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fa-solid fa-money-bill-transfer fa-2x text-gray-400"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->

        <div class="row">
            <div class="col-xl-12 col-lg-6">
                <div class="card shadow mb-4">

                    <div class="card-body">
                        <div id="columnchart_material" style="height: 530px;"></div>

                    </div>
                </div>
            </div>
            <div>

                <!--grafico de barras---->
                <!--grafico de barras---->

                <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                <script type="text/javascript">
                    google.charts.load('current', {
                        'packages': ['bar']
                    });
                    google.charts.setOnLoadCallback(drawChart);

                    function drawChart() {

                        const reservaEnero = '{{$reservaEnero}}';
                        const reservaFebrero = '{{$reservaFebrero}}';
                        const reservaMarzo = '{{$reservaMarzo}}';
                        const reservaAbril = '{{$reservaAbril}}';
                        const reservaMayo = '{{$reservaMayo}}';
                        const reservaJunio = '{{$reservaJunio}}';
                        const reservaJulio = '{{$reservaJulio}}';
                        const reservaAgosto = '{{$reservaAgosto}}';
                        const reservaSeptiembre = '{{$reservaSeptiembre}}';
                        const reservaOctubre = '{{$reservaOctubre}}';
                        const reservaNoviembre = '{{$reservaNoviembre}}';
                        const reservaDiciembre = '{{$reservaDiciembre}}';


                        const ventaEnero = '{{$ventaEnero}}';
                        const ventaFebrero = '{{$ventaFebrero}}';
                        const ventaMarzo = '{{$ventaMarzo}}';
                        const ventaAbril = '{{$ventaAbril}}';
                        const ventaMayo = '{{$ventaMayo}}';
                        const ventaJunio = '{{$ventaJunio}}';
                        const ventaJulio = '{{$ventaJulio}}';
                        const ventaAgosto = '{{$ventaAgosto}}';
                        const ventaSeptiembre = '{{$ventaSeptiembre}}';
                        const ventaOctubre = '{{$ventaOctubre}}';
                        const ventaNoviembre = '{{$ventaNoviembre}}';
                        const ventaDiciembre = '{{$ventaDiciembre}}';
                        const año = '{{ date("Y") }}';

                        var data = google.visualization.arrayToDataTable([
                            [año, 'Reservas', 'Ventas']
                            , ['Enero', reservaEnero, ventaEnero]
                            , ['Febrero', reservaFebrero, ventaFebrero]
                            , ['Marzo', reservaMarzo, ventaMarzo]
                            , ['Abril', reservaAbril, ventaAbril]
                            , ['Mayo', reservaMayo, ventaMayo]
                            , ['Junio', reservaJunio, ventaJunio]
                            , ['Julio', reservaJulio, ventaJulio]
                            , ['Agosto', reservaAgosto, ventaAgosto]
                            , ['Septiembre', reservaSeptiembre, ventaSeptiembre]
                            , ['Octubre', reservaOctubre, ventaOctubre]
                            , ['Noviembre', reservaNoviembre, ventaNoviembre]
                            , ['Diciembre', reservaDiciembre, ventaDiciembre]

                        ]);


                        var options = {
                            chart: {
                                title: 'GBC-SYSTEM'
                                , subtitle: 'Reservas, Ventas, mensuales'
                            , }
                        };

                        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

                        chart.draw(data, google.charts.Bar.convertOptions(options));
                    }

                </script>








                        <!-- Bootstrap core JavaScript-->
                        <script src="vendor/jquery/jquery.min.js"></script>
                        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

                        <!-- Core plugin JavaScript-->
                        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

                        <!-- Custom scripts for all pages-->
                        <script src="js/sb-admin-2.min.js"></script>

                        <!-- Page level plugins -->
                        <script src="vendor/chart.js/Chart.min.js"></script>

                        <!-- Page level custom scripts -->
                        <script src="js/demo/chart-area-demo.js"></script>
                        <script src="js/demo/chart-pie-demo.js"></script>




                        @endsection
