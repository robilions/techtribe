@extends('layouts.master')

@section('title')
    Dashboard
@endsection

@section('breadcrumb')
    @parent
    <li class="active">Dashboard</li>
@endsection

@section('content')
    <!-- Small boxes (Stat box) -->
    <div class="row">
    <div class="col-lg-6 col-xs-12">
        <!-- small box -->
        <div class="small-box bg-aqua">
            <div class="inner">
                <h3>{{ $kategori }}</h3>
                <p>Total Kategori</p>
            </div>
            <div class="icon">
                <i class="fa fa-cube"></i>
            </div>
            <a href="{{ route('kategori.index') }}" class="small-box-footer">
                Lihat <i class="fa fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-6 col-xs-12">
        <!-- small box -->
        <div class="small-box bg-green">
            <div class="inner">
                <h3>{{ $produk }}</h3>
                <p>Total Produk</p>
            </div>
            <div class="icon">
                <i class="fa fa-cubes"></i>
            </div>
            <a href="{{ route('produk.index') }}" class="small-box-footer">
                Lihat <i class="fa fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>
</div>

    </div>
    <!-- /.row -->
    <!-- Main row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="box">
                <div class="box-header with-border">

                    <?php
                    // Tentukan $tanggal_awal sebagai tanggal pertama dari bulan yang diberikan
                    $tanggal_awal = date('Y-m-01', strtotime($tanggal_awal));
                    
                    // Tentukan $tanggal_akhir sebagai tanggal terakhir dari bulan yang diberikan
                    $tanggal_akhir = date('Y-m-d'); // Mengatur $tanggal_akhir ke tanggal hari ini
                    
                    // ... Bagian lain dari skrip PHP ...
                    
                    // Tampilkan judul dengan rentang tanggal yang diinginkan
                    echo '<h3 class="box-title">Grafik Pendapatan ' . tanggal_indonesia($tanggal_awal, false) . ' s/d ' . tanggal_indonesia($tanggal_akhir, false) . '</h3>';
                    
                    // ... Bagian lain dari skrip PHP ...
                    
                    ?>

                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="chart">
                                <!-- Sales Chart Canvas -->
                                <canvas id="salesChart" style="height: 180px;"></canvas>
                            </div>
                            <!-- /.chart-responsive -->
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row (main row) -->
@endsection

@push('css')
<style>
    .content-wrapper {
        min-height: auto !important;
        height: 350px; /* Ubah sesuai kebutuhan */
    }
</style>
@endpush


@push('scripts')
    <!-- ChartJS -->
    <script src="{{ asset('AdminLTE-2/bower_components/chart.js/Chart.js') }}"></script>
    <script>
        $(function() {
            // Get context with jQuery - using jQuery's .get() method.
            var salesChartCanvas = $('#salesChart').get(0).getContext('2d');
            // This will get the first returned node in the jQuery collection.
            var salesChart = new Chart(salesChartCanvas);

            var salesChartData = {
                labels: {{ json_encode($data_tanggal) }},
                datasets: [{
                    label: 'Pendapatan',
                    fillColor: 'rgba(60,141,188,0.9)',
                    strokeColor: 'rgba(60,141,188,0.8)',
                    pointColor: '#3b8bba',
                    pointStrokeColor: 'rgba(60,141,188,1)',
                    pointHighlightFill: '#fff',
                    pointHighlightStroke: 'rgba(60,141,188,1)',
                    data: {{ json_encode($data_pendapatan) }}
                }]
            };

            var salesChartOptions = {
                pointDot: false,
                responsive: true
            };

            salesChart.Line(salesChartData, salesChartOptions);
        });
    </script>
@endpush
