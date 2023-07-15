
<!-- <div class="content-page" style="padding: 0px;"> -->

    <!-- <h1 class="display-1" style="text-align: Center;">Bienvenido Alumno!</h1> -->


    <div class="content-page" style="padding: 18px;">
    <div class="container-fluid">

<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <form class="d-flex align-items-center mb-3">
                    <div class="input-group input-group-sm">
                        <input type="text" class="form-control border" id="dash-daterange">
                        <span class="input-group-text bg-blue border-blue text-white">
                            <i class="mdi mdi-calendar-range"></i>
                        </span>
                    </div>
                    <a href="javascript: void(0);" class="btn btn-blue btn-sm ms-2">
                        <i class="mdi mdi-autorenew"></i>
                    </a>
                    <a href="javascript: void(0);" class="btn btn-blue btn-sm ms-1">
                        <i class="mdi mdi-filter-variant"></i>
                    </a>
                </form>
            </div>
            <h4 class="page-title">Dashboard</h4>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6 col-xl-3">
        <div class="widget-rounded-circle card">
            <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <div class="avatar-lg rounded-circle bg-soft-primary border-primary border">
                            <i class="fe-heart font-22 avatar-title text-primary"></i>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="text-end">
                            <h3 class="text-dark mt-1"><span data-plugin="counterup">15</span></h3>
                            <p class="text-muted mb-1 text-truncate">Tareas Realizadas</p>
                        </div>
                    </div>
                </div> <!-- end row-->
            </div>
        </div> <!-- end widget-rounded-circle-->
    </div> <!-- end col-->

    <div class="col-md-6 col-xl-3">
        <div class="widget-rounded-circle card">
            <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <div class="avatar-lg rounded-circle bg-soft-success border-success border">
                            <i class="fe-shopping-cart font-22 avatar-title text-success"></i>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="text-end">
                            <h3 class="text-dark mt-1"><span data-plugin="counterup">20</span></h3>
                            <p class="text-muted mb-1 text-truncate">Alumnos Inscritos</p>
                        </div>
                    </div>
                </div> <!-- end row-->
            </div>
        </div> <!-- end widget-rounded-circle-->
    </div> <!-- end col-->

    <div class="col-md-6 col-xl-3">
        <div class="widget-rounded-circle card">
            <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <div class="avatar-lg rounded-circle bg-soft-info border-info border">
                            <i class="fe-bar-chart-line- font-22 avatar-title text-info"></i>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="text-end">
                            <h3 class="text-dark mt-1"><span data-plugin="counterup">4</span></h3>
                            <p class="text-muted mb-1 text-truncate">Correos Enviados </p>
                        </div>
                    </div>
                </div> <!-- end row-->
            </div>
        </div> <!-- end widget-rounded-circle-->
    </div> <!-- end col-->

    <div class="col-md-6 col-xl-3">
        <div class="widget-rounded-circle card">
            <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <div class="avatar-lg rounded-circle bg-soft-warning border-warning border">
                            <i class="fe-eye font-22 avatar-title text-warning"></i>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="text-end">
                            <h3 class="text-dark mt-1"><span data-plugin="counterup">5</span></h3>
                            <p class="text-muted mb-1 text-truncate">Alumnos Cesados</p>
                        </div>
                    </div>
                </div> <!-- end row-->
            </div>
        </div> <!-- end widget-rounded-circle-->
    </div> <!-- end col-->
</div>
<!-- end row-->




<head>
    <title>Gráficos en CodeIgniter con ApexCharts</title>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts@3.28.3"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/apexcharts@3.28.3/dist/apexcharts.min.css">
</head>
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">% DE MAYORES TAREAS REALIZADAS</h5>
                    <div id="pieChart"></div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">GRAFICO DE BARRAS DE TAREAS</h5>
                    <div id="barChart"></div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Datos del gráfico de torta
        var pieChartData = {
            labels: ["Patrick Miñan", "Alexander Marticorena", "Hector Velarde", "Renan Salazar", "Jorge Justo"],
            series: [2, 3, 5, 1, 4]
        };

        // Opciones del gráfico de torta
        var pieChartOptions = {
            chart: {
                type: "pie",
                height: 380
            },
            series: pieChartData.series,
            labels: pieChartData.labels,
            colors: ['#1abc9c', '#2ecc71', '#3498db', '#9b59b6', '#f1c40f'],
            responsive: [{
                breakpoint: 480,
                options: {
                    chart: {
                        width: 200
                    },
                    legend: {
                        position: 'bottom'
                    }
                }
            }]
        };

        // Renderizar el gráfico de torta
        var pieChart = new ApexCharts(document.querySelector("#pieChart"), pieChartOptions);
        pieChart.render();

        // Datos del gráfico de barras
        var barChartData = {
            categories: ["Prof.Roberto", "Prof.Carlos", "Prof.Julia", "Prof.Natalia", "Prof.Belen", "Prof.Elva"],
            values: [10, 15, 20, 25, 30, 35]
        };

        // Opciones del gráfico de barras
        var barChartOptions = {
            chart: {
                type: "bar",
                height: 380,
                toolbar: {
                    show: false
                }
            },
            plotOptions: {
                bar: {
                    horizontal: false
                }
            },
            dataLabels: {
                enabled: false
            },
            series: [{
                data: barChartData.values
            }],
            colors: ['#1abc9c'],
            xaxis: {
                categories: barChartData.categories
            }
        };

        // Renderizar el gráfico de barras
        var barChart = new ApexCharts(document.querySelector("#barChart"), barChartOptions);
        barChart.render();
    </script>





<div class="row">
        <div class="col-xl-6">
                    <div class="card">
                        <div class="card-body">
                        
                            <h4 class="header-title" style="text-align: center;font-size:50px">TOP 5 Ranking</h4>
                            <br>
                            <div class="table-responsive">
                                <table id="Ranking" class="table dt-responsive nowrap w-100">
                                    <thead>
                                        <tr>
                                            <th style="text-align: center;">Id</th>
                                            <th style="text-align: center;">Nombre Completo</th>
                                            <th style="text-align: center;">Grado</th>
                                            <th style="text-align: center;">Colegio</th>
                                            <th style="text-align: center;">Q Tareas Completadas</th>
                           
                                        </tr>
                                    </thead>
                                    <tbody id="ranking-tabla">
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

    <div class="col-xl-6">
        <div class="card">
            <div class="card-body">
                <div class="dropdown float-end">
                    <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="mdi mdi-dots-vertical"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">Edit Report</a>
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">Action</a>
                    </div>
                </div>

                <h4 class="header-title mb-3">Revenue History</h4>

                <div class="table-responsive">
                    <table class="table table-borderless table-nowrap table-hover table-centered m-0">

                        <thead class="table-light">
                            <tr>
                                <th>Marketplaces</th>
                                <th>Date</th>
                                <th>Payouts</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <h5 class="m-0 fw-normal">Themes Market</h5>
                                </td>

                                <td>
                                    Oct 15, 2018
                                </td>

                                <td>
                                    $5848.68
                                </td>

                                <td>
                                    <span class="badge bg-soft-warning text-warning">Upcoming</span>
                                </td>

                                <td>
                                    <a href="javascript: void(0);" class="btn btn-xs btn-light"><i class="mdi mdi-pencil"></i></a>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <h5 class="m-0 fw-normal">Freelance</h5>
                                </td>

                                <td>
                                    Oct 12, 2018
                                </td>

                                <td>
                                    $1247.25
                                </td>

                                <td>
                                    <span class="badge bg-soft-success text-success">Paid</span>
                                </td>

                                <td>
                                    <a href="javascript: void(0);" class="btn btn-xs btn-light"><i class="mdi mdi-pencil"></i></a>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <h5 class="m-0 fw-normal">Share Holding</h5>
                                </td>

                                <td>
                                    Oct 10, 2018
                                </td>

                                <td>
                                    $815.89
                                </td>

                                <td>
                                    <span class="badge bg-soft-success text-success">Paid</span>
                                </td>

                                <td>
                                    <a href="javascript: void(0);" class="btn btn-xs btn-light"><i class="mdi mdi-pencil"></i></a>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <h5 class="m-0 fw-normal">Envato's Affiliates</h5>
                                </td>

                                <td>
                                    Oct 03, 2018
                                </td>

                                <td>
                                    $248.75
                                </td>

                                <td>
                                    <span class="badge bg-soft-danger text-danger">Overdue</span>
                                </td>

                                <td>
                                    <a href="javascript: void(0);" class="btn btn-xs btn-light"><i class="mdi mdi-pencil"></i></a>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <h5 class="m-0 fw-normal">Marketing Revenue</h5>
                                </td>

                                <td>
                                    Sep 21, 2018
                                </td>

                                <td>
                                    $978.21
                                </td>

                                <td>
                                    <span class="badge bg-soft-warning text-warning">Upcoming</span>
                                </td>

                                <td>
                                    <a href="javascript: void(0);" class="btn btn-xs btn-light"><i class="mdi mdi-pencil"></i></a>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <h5 class="m-0 fw-normal">Advertise Revenue</h5>
                                </td>

                                <td>
                                    Sep 15, 2018
                                </td>

                                <td>
                                    $358.10
                                </td>

                                <td>
                                    <span class="badge bg-soft-success text-success">Paid</span>
                                </td>

                                <td>
                                    <a href="javascript: void(0);" class="btn btn-xs btn-light"><i class="mdi mdi-pencil"></i></a>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div> <!-- end .table-responsive-->
            </div>
        </div> <!-- end card-->
    </div> <!-- end col -->
</div>
<!-- end row -->

</div> <!-- container -->

</div> <!-- content -->

<script src="<?php echo base_url() ?>assets/js/AdministradorPrincipal.js"></script>        
