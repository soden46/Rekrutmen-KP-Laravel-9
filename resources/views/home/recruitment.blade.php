@extends('layouts.home.master',[
'title' => 'Rekrutmen | Bento Group Indonesia',
'pageTitle' => 'rekrutmen | Bento Group Indonesia',
])
@section('content')
<!-- Chart Start -->
<div class="container" style="margin-top: 50px;">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Persentase Data Caffe Dan Lokasi</h3>
                </div>
                <div class="row panel-body" align-item="center">
                    <div id="pie_chart" style="width:450px; height:250px;">
                    </div>
                    <div id="pie_chart2" style="width:450px; height:250px;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Chart End -->
    <!-- Service Start -->
    <div class="service">
        <div class="container">
            <div class="row">
                @foreach($caffe as $kafe)
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <div class="service-icon service-img d-flex justify-content-center">
                            <img src="{{asset('assets/img/bgi.png')}}"></img>
                        </div>
                        <h3>{{$kafe->group_caffe}}</h3>
                        <p>
                            {{$kafe->jumlah_karyawa}}
                        </p>
                        <a class="btn" id="detail" name="detail" href="detailrekrut/{{$kafe->group_caffe}}">Detail Caffe</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Service End -->
    <script type="text/javascript">
        $(document).ready(function() {
            var caffe = <?php echo json_encode($jumlahc); ?>;
            var options = {
                chart: {
                    renderTo: 'pie_chart',
                    plotBackgroundColor: null,
                    plotBorderWidth: null,
                    plotShadow: false
                },
                title: {
                    text: 'Persentase Caffe berdasarkan Group'
                },
                tooltip: {
                    pointFormat: '{series.name}: <b>{point.percentage}%</b>',
                    percentageDecimals: 1

                },
                plotOptions: {
                    pie: {
                        allowPointSelect: true,
                        cursor: 'pointer',
                        dataLabels: {
                            enabled: true,
                            color: '#000000',
                            connectorColor: '#000000',
                            formatter: function() {
                                return '<b>' + this.point.name + '</b>: ' + this.percentage.toFixed(0) + ' %';
                            }
                        }
                    }
                },
                series: [{
                    type: 'pie',
                    name: 'Jumlah Cabang'
                }]
            }
            myarray = [];
            $.each(caffe, function(index, val) {
                myarray[index] = [val.group_caffe, val.count];
            });
            options.series[0].data = myarray;
            chart = new Highcharts.Chart(options);

        });
        $(document).ready(function() {
            var provinsi = <?php echo json_encode($provinsi); ?>;
            var options = {
                chart: {
                    renderTo: 'pie_chart2',
                    plotBackgroundColor: null,
                    plotBorderWidth: null,
                    plotShadow: false
                },
                title: {
                    text: 'Persentase Lokasi Caffe'
                },
                tooltip: {
                    pointFormat: '{series.name}: <b>{point.percentage}%</b>',
                    percentageDecimals: 1

                },
                plotOptions: {
                    pie: {
                        allowPointSelect: true,
                        cursor: 'pointer',
                        dataLabels: {
                            enabled: true,
                            color: '#000000',
                            connectorColor: '#000000',
                            formatter: function() {
                                return '<b>' + this.point.name + '</b>: ' + this.percentage.toFixed(0) + ' %';
                            }
                        }
                    }
                },
                series: [{
                    type: 'pie',
                    name: 'Lokasi Caffe'
                }]
            }
            myarray = [];
            $.each(provinsi, function(index, val) {
                myarray[index] = [val.provinsi, val.total1];
            });
            options.series[0].data = myarray;
            chart = new Highcharts.Chart(options);

        });
    </script>

    @endsection