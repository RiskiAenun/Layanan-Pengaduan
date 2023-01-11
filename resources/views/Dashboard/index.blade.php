@extends('layouts.sbdadmin')

@section('title', 'Halaman Dashboard')

@section('header', 'Dashboard')

@section('content')
    <div class="row">
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Petugas</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$petugas}}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Masyarakat</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$masyarakat}}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Pegaduan Proses
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{$proses}}</div>
                                </div>
                                <div class="col">
                                    <div class="progress progress-sm mr-2">
                                        <div class="progress-bar bg-info" role="progressbar"
                                            style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Pengaduan Selesai</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$selesai}}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Area Chart -->
        <div class="col-xl-12 col-lg-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Statistik Pengaduan</h6>
                </div>
                <div class="card-body">
                    {{-- <div class="chart-area"> --}}
                        <canvas id="myPieChart"></canvas>
                    {{-- </div> --}}
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script src="{{asset('sbdadmin/vendor/chart.js/Chart.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@0.7.0"></script>
    <script>

        // Set new default font family and font color to mimic Bootstrap's default styling
        Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
        {{-- Chart.defaults.global.defaultFontColor = '#858796'; --}}

        // Pie Chart Example
        var ctx = document.getElementById("myPieChart");
        var myPieChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ["Bencana Alam", "Perjuadian", "Kegaduhan","Tindak Pidana","Lainya"],
            datasets: [{
                data: [{{ (int)$countBencanaAlam}}, {{ (int)$countPerjudian }}, {{ (int)$countKegaduhan }}, {{ (int)$countTindakPidana }}, {{ (int)$countLainya }}],
                backgroundColor: ['#4e73df', '#1cc88a', '#36b9cc','#e83e8c','#cec610'],
                hoverBackgroundColor: ['#2e59d9', '#17a673', '#2c9faf'],
                hoverBorderColor: "rgba(234, 236, 244, 1)",
            }],
        },
        options: {
            layout: {
            padding: {
                bottom: 25
            }
            },
            plugins: {
            tooltip: {
                enabled: true,
                callbacks: {
                footer: (ttItem) => {
                    let sum = 0;
                    let dataArr = ttItem[0].dataset.data;
                    dataArr.map(data => {
                    sum += Number(data);
                    });

                    let percentage = (ttItem[0].parsed * 100 / sum).toFixed(2) + '%';
                    return `Percentage of data: ${percentage}`;
                }
                }
            },
            datalabels: {
                formatter: (value, dnct1) => {
                let sum = 0;
                let dataArr = dnct1.chart.data.datasets[0].data;
                dataArr.map(data => {
                    sum += Number(data);
                });

                let percentage = (value * 100 / sum).toFixed(2) + '%';
                return percentage;
                },
                color: '#fff',
            }
            }
        },
        plugins: [ChartDataLabels]
    });
    </script>

@endsection