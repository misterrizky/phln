<div class="row">
    <div class="col-lg-6">
        <div class="card mb-5 mb-xl-10">
            <div class="card-body py-3">
                <div class="content_grafik" id="chart"></div>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="card mb-5 mb-xl-10">
            <div class="card-body py-3">
                <div class="row">
                    EA
                    @foreach($ea as $item)
                    @php
                        if($item->st == "At Risk"){
                            $color = "#FF0000";
                            $fcolor = "white";
                        }
                        elseif($item->st == "Behind Schedule"){
                            $color = "#FFFF00";
                            $fcolor = "black";
                        }
                        elseif($item->st == "On Schedule"){
                            $color = "#00FF00";
                            $fcolor = "black";
                        }
                    @endphp
                    <div class="col-4">
                        {{$item->st}}
                        <div class="row">
                            <div class="col-12">
                                <div class="card" style="background-color:{{$color}};">
                                    <div class="card-body">
                                        <span style="color:{{$fcolor}};font-weight:bold;">
                                            {{$item->total_kegiatan_ea}}
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="row">
                    IA
                    @foreach($ia as $item)
                    @php
                        if($item->st == "At Risk"){
                            $color = "#FF0000";
                            $fcolor = "white";
                        }
                        elseif($item->st == "Behind Schedule"){
                            $color = "#FFFF00";
                            $fcolor = "black";
                        }
                        elseif($item->st == "On Schedule"){
                            $color = "#00FF00";
                            $fcolor = "black";
                        }
                    @endphp
                    <div class="col-4">
                        {{$item->st}}
                        <div class="row">
                            <div class="col-12">
                                <div class="card" style="background-color:{{$color}};">
                                    <div class="card-body">
                                        <span style="color:{{$fcolor}};font-weight:bold;">
                                            {{$item->total_kegiatan_ia}}
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="col-12 mt-5">
                        @php
                        $tcar = 0;
                        $tar = 0;
                        $tcbs = 0;
                        $tbs = 0;
                        $tcos = 0;
                        $tos = 0;
                        $sctotal = 0;
                        $stotal = 0;
                        $tsc = 0;
                        $ts = 0;
                        @endphp
                        @foreach ($query as $item)
                            @php
                            $sctotal = $item->car + $item->cbs + $item->cos;
                            $stotal = $item->ar + $item->bs + $item->os;
                            $tcar += $item->car;
                            $tar += $item->ar;
                            $tcbs += $item->cbs;
                            $tbs += $item->bs;
                            $tcos += $item->cos;
                            $tos += $item->os;
                            $tsc += $sctotal;
                            $ts += $stotal;
                            @endphp
                        @endforeach
                            @if($tipe == "Donor")
                            Kinerja Kegiatan Pinjaman Luar Negeri berdasarkan progress variant (PV):
                            {{$tcar}} Kegiatan At Risk, {{$tcbs}} Kegiatan Behind Schedule, dan {{$tcos}} Kegiatan A Head
                            / On Schedule.
                            @else
                            Dilihat dari sektornya, status At Risk terbanyak adalah kegiatan dari
                            Sektor {{$query[0]->nama}}.
                            Kemudian kegiatan {{$query[1]->nama}}, Sektor {{$query[2]->nama}}, serta kegiatan Sektor {{$query[3]->nama}}
                            @endif
                    </div>
                    <div class="col-12 mt-5">
                        <div class="table-responsive">
                            <table class="table table-row-dashed table-striped table-row-gray-300 align-middle gs-0 gy-4">
                                <thead>
                                    <tr>
                                        <th rowspan="2">
                                            {{$tipe == "Donor" ? 'Lender' : 'Sektor'}}
                                        </th>
                                        <th colspan="2" style="background-color:#FF0000">At Risk</th>
                                        <th colspan="2" style="background-color:#FFFF00">Behind Schedule</th>
                                        <th colspan="2" style="background-color:#00FF00">On Schedule</th>
                                        <th colspan="2">Total</th>
                                    </tr>
                                    <tr>
                                        <th style="background-color:#FF0000">Jumlah</th>
                                        <th style="background-color:#FF0000">(Rp Triliun)</th>
                                        <th style="background-color:#FFFF00">Jumlah</th>
                                        <th style="background-color:#FFFF00">(Rp Triliun)</th>
                                        <th style="background-color:#00FF00">Jumlah</th>
                                        <th style="background-color:#00FF00">(Rp Triliun)</th>
                                        <th>Jumlah</th>
                                        <th>(Rp Triliun)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $tcar = 0;
                                    $tar = 0;
                                    $tcbs = 0;
                                    $tbs = 0;
                                    $tcos = 0;
                                    $tos = 0;
                                    $sctotal = 0;
                                    $stotal = 0;
                                    $tsc = 0;
                                    $ts = 0;
                                    @endphp
                                    @foreach ($query as $item)
                                        @php
                                        $sctotal = $item->car + $item->cbs + $item->cos;
                                        $stotal = $item->ar + $item->bs + $item->os;
                                        $tcar += $item->car;
                                        $tar += $item->ar;
                                        $tcbs += $item->cbs;
                                        $tbs += $item->bs;
                                        $tcos += $item->cos;
                                        $tos += $item->os;
                                        $tsc += $sctotal;
                                        $ts += $stotal;
                                        @endphp
                                    <tr>
                                        <td>{{$item->nama}}</td>
                                        <td>{{$item->car}}</td>
                                        <td>{{number_format($item->ar/1000000000000,2,",",".")}}</td>
                                        <td>{{$item->cbs}}</td>
                                        <td>{{number_format($item->bs/1000000000000,2,",",".")}}</td>
                                        <td>{{$item->cos}}</td>
                                        <td>{{number_format($item->os/1000000000000,2,",",".")}}</td>
                                        <td>{{$sctotal}}</td>
                                        <td>{{number_format($stotal/1000000000000,2,",",".")}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td>Jumlah</td>
                                        <td style="background-color:#FF0000">{{$tcar}}</td>
                                        <td style="background-color:#FF0000">{{number_format($tar/1000000000000,2,",",".")}}</td>
                                        <td style="background-color:#FFFF00">{{$tcbs}}</td>
                                        <td style="background-color:#FFFF00">{{number_format($tbs/1000000000000,2,",",".")}}</td>
                                        <td style="background-color:#00FF00">{{$tcos}}</td>
                                        <td style="background-color:#00FF00">{{number_format($tos/1000000000000,2,",",".")}}</td>
                                        <td>{{$tsc}}</td>
                                        <td>{{number_format($ts/1000000000000,2,",",".")}}</td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    am4core.ready(function() {
        am4core.useTheme(am4themes_animated);
        
        var chart = am4core.create("chart", am4charts.XYChart);
        chart.hiddenState.properties.opacity = 0;
        
        chart.data = {!!$result!!};
        
        chart.colors.step = 2;
        chart.padding(30, 30, 10, 30);
        chart.legend = new am4charts.Legend();

        chart.responsive.enabled = true;
        chart.colors.list = [
            am4core.color("#FF0000"),
            am4core.color("#FFFF00"),
            am4core.color("#FFFF00"),
            am4core.color("#00FF00"),
        ];
        chart.dataSource.parser = new am4core.JSONParser();
        chart.dataSource.parser.options.emptyAs = 0;
        
        var categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
        categoryAxis.dataFields.category = "nama";
        categoryAxis.renderer.grid.template.location = 0;
        
        var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
        valueAxis.calculateTotals = true;
        valueAxis.renderer.minWidth = 50;
        
        
        var series1 = chart.series.push(new am4charts.ColumnSeries());
        series1.columns.template.width = am4core.percent(80);
        series1.columns.template.tooltipText = "{name} {categoryX}: {valueY}";
        series1.name = "At Risk";
        series1.dataFields.categoryX = "nama";
        series1.dataFields.valueY = "car";
        series1.dataItems.template.locations.categoryX = 0.5;
        series1.stacked = true;
        series1.tooltip.pointerOrientation = "vertical";
        
        var bullet1 = series1.bullets.push(new am4charts.LabelBullet());
        bullet1.interactionsEnabled = false;
        bullet1.label.text = "{valueY}";
        bullet1.label.fill = am4core.color("#ffffff");
        bullet1.locationY = 0.5;
        
        var series2 = chart.series.push(new am4charts.ColumnSeries());
        series2.columns.template.width = am4core.percent(80);
        series2.columns.template.tooltipText = "{name} {categoryX}: {valueY}";
        series2.name = "Behind Schedule";
        series2.dataFields.categoryX = "nama";
        series2.dataFields.valueY = "cbs";
        series2.dataItems.template.locations.categoryX = 0.5;
        series2.stacked = true;
        series2.tooltip.pointerOrientation = "vertical";
        
        var bullet2 = series2.bullets.push(new am4charts.LabelBullet());
        bullet2.interactionsEnabled = false;
        bullet2.label.text = "{valueY}";
        bullet2.locationY = 0.5;
        bullet2.label.fill = am4core.color("#ffffff");
        
        var series3 = chart.series.push(new am4charts.ColumnSeries());
        series3.columns.template.width = am4core.percent(80);
        series3.columns.template.tooltipText = "{name} {categoryX}: {valueY}";
        series3.name = "On Schedule";
        series3.dataFields.categoryX = "nama";
        series3.dataFields.valueY = "cos";
        series3.dataItems.template.locations.categoryX = 0.5;
        series3.stacked = true;
        series3.tooltip.pointerOrientation = "vertical";
        
        var bullet3 = series3.bullets.push(new am4charts.LabelBullet());
        bullet3.interactionsEnabled = false;
        bullet3.label.text = "{valueY}";
        bullet3.locationY = 0.5;
        bullet3.label.fill = am4core.color("#ffffff");
        
        chart.scrollbarX = new am4core.Scrollbar();
    });
</script>