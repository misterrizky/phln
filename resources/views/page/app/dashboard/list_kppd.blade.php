<div class="row">
    <div class="col-6">
        <div class="content_grafik" id="chart"></div>
    </div>
    <div class="col-6">
        <div class="card mb-5 mb-xl-10">
            <div class="card-header">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bolder fs-3 mb-1">DIPA PLN = Rp {{number_format($total/1000000000000,2,",",".")}}</span>
                    <span class="card-label fw-bolder fs-3">{{number_format($persen,2)}}%</span>
                </h3>
                <h3 class="card-title align-items-center flex-column">
                    <br>
                    <span class="card-label fw-bolder fs-5" style="float:right;">Realisasi PLN = Rp {{number_format($totalreal/1000000000000,2,",",".")}}</span>
                </h3>
                <div class="card-toolbar">
                    <div class="row">
                        <div class="col-lg-12">
                            {{-- @if($kegiatan) --}}
                                @if ($tipe == "Sektor")
                                Dilihat dari sektornya, alokasi Pagu DIPA PLN TA 2021 terbesar pada kegiatan Sektor {{$kegiatan[0]->nama}},
                                yaitu : Rp. {{$kegiatan[0]->dipa/1000000000000}} Trilyun atau {{$kegiatan[0]->dipa/$total*100}}% dari total Pagu DIPA PLN TA 2021 Ditjen Cipta Karya.
                                Sedangkan alokasi terkecil pada kegiatan Sektor {{$lkegiatan[0]->nama}}, yaitu : Rp. {{$lkegiatan[0]->dipa/1000000000000}} Triliun atau {{$lkegiatan[0]->dipa/$total*100}}%
                                dari total Pagu DIPA PLN TA 2021 Ditjen Cipta Karya.
                                @else
                                Alokasi Pagu DIPA PLN TA 2021 terbesar pada kegiatan sumber dana {{$kegiatan[0]->nama}},
                                yaitu : Rp. {{$kegiatan[0]->dipa/1000000000000}} Trilyun atau {{$kegiatan[0]->dipa/$total*100}}% dari total Pagu DIPA PLN TA 2021 Ditjen Cipta Karya.
                                Sedangkan alokasi terkecil pada kegiatan sumber dana {{$lkegiatan[0]->nama}},
                                yaitu : Rp. {{$lkegiatan[0]->dipa/1000000000000}} Triliun atau {{$lkegiatan[0]->dipa/$total*100}}% dari total Pagu DIPA PLN TA 2021 Ditjen Cipta Karya.
                                @endif
                            {{-- @endif --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th rowspan="2">
                                @if ($tipe == "Sektor" || $tipe == "")
                                Sektor
                                @else
                                Donor
                                @endif
                            </th>
                            <th colspan="1">DIPA</th>
                            <th colspan="2">Nilai Pinjaman</th>
                        </tr>
                        <tr>
                            <th>Rp. Trilyun</th>
                            <th>Rp. Trilyun</th>
                            <th>%</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($kegiatan as $k)
                        <tr>
                            <td>
                                {{$k->nama}}
                            </td>
                            <td>
                                {{number_format($k->dipa/1000000000000,2,",",".")}}
                            </td>
                            <td>
                                {{number_format($k->real/1000000000000,2,",",".")}}
                            </td>
                            <td>{{number_format($k->dipa/$total*100,2,",",".")}} %</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
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
        am4core.color("#FFD700"),
        am4core.color("#66FF33"),
    ];
    chart.dataSource.parser = new am4core.JSONParser();
    chart.dataSource.parser.options.emptyAs = 0;
    
    var categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
    categoryAxis.dataFields.category = "nama";
    categoryAxis.renderer.grid.template.location = 0;
    categoryAxis.tooltip.label.maxWidth = 200;
    categoryAxis.tooltip.label.wrap = true;
    var label = categoryAxis.renderer.labels.template;
    label.truncate = true;
    label.maxWidth = 120;
    label.tooltipText = "{category}";

    categoryAxis.events.on("sizechanged", function(ev) {
    var axis = ev.target;
    var cellWidth = axis.pixelWidth / (axis.endIndex - axis.startIndex);
    if (cellWidth < axis.renderer.labels.template.maxWidth) {
        axis.renderer.labels.template.rotation = -90;
        axis.renderer.labels.template.horizontalCenter = "right";
        axis.renderer.labels.template.verticalCenter = "middle";
    }
    else {
        axis.renderer.labels.template.rotation = 0;
        axis.renderer.labels.template.horizontalCenter = "middle";
        axis.renderer.labels.template.verticalCenter = "top";
    }
    });
    // var label = categoryAxis.renderer.labels.template;
    // label.wrap = true;
    // label.maxWidth = 120;
    // label.tooltipText = "{category}";
    // label.renderer.labels.template.rotation = -90;
    
    var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
    valueAxis.calculateTotals = true;
    valueAxis.renderer.minWidth = 50;
    
    
    var series1 = chart.series.push(new am4charts.ColumnSeries());
    series1.columns.template.width = am4core.percent(80);
    series1.columns.template.tooltipText = "{name}: {categoryX} {valueY}";
    series1.name = "Realisasi";
    series1.dataFields.categoryX = "nama";
    series1.dataFields.valueY = "real";
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
    series2.columns.template.tooltipText = "{name}: {categoryX} {valueY}";
    series2.name = "DIPA";
    series2.dataFields.categoryX = "nama";
    series2.dataFields.valueY = "dipa";
    series2.dataItems.template.locations.categoryX = 0.5;
    series2.stacked = true;
    series2.tooltip.pointerOrientation = "vertical";
    
    var bullet2 = series2.bullets.push(new am4charts.LabelBullet());
    bullet2.interactionsEnabled = false;
    bullet2.label.text = "{valueY}";
    bullet2.locationY = 0.5;
    bullet2.label.fill = am4core.color("#ffffff");
    
    chart.scrollbarX = new am4core.Scrollbar();
});
</script>