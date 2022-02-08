<div class="row">
    <div class="col-6">
        <div class="content_grafik" id="chart"></div>
    </div>
    <div class="col-6">
        <div class="card mb-5 mb-xl-10">
            <div class="card-header">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bolder fs-3 mb-1">{{number_format($persen,2)}} %</span>
                </h3>
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bolder fs-3 mb-1">Rp {{number_format($sumnilai/1000000000000,2,",",".")}}</span>
                </h3>
                <div class="card-toolbar">
                    <div class="row">
                        <div class="col-lg-12">
                            @if($kegiatan)
                            @if ($tipe == "Sektor")
                            Dilihat dari sektornya, penyerapan kumulatif yang terbesar pada Sektor {{$kegiatan[0]->nama}} : ({{number_format($kegiatan[0]->real/$sumnilai*100,2,",",".")}} %),
                            disusul Sektor {{$kegiatan[1]->nama}} : ({{number_format($kegiatan[1]->real/$sumnilai*100,2,",",".")}} %).
                            Sedangkan penyerapan terkecil pada Sektor {{$lkegiatan[0]->nama}} : ({{number_format($lkegiatan[0]->real/$sumnilai*100,2,",",".")}} %) dari total nilai pinjaman Sektor {{$lkegiatan[0]->nama}}.
                            @else
                            Penyerapan Kumulatif yang terbesar pada sumber dana {{$kegiatan[0]->nama}} : ({{number_format($kegiatan[0]->real/$sumnilai*100,2,",",".")}} %),
                            disusul {{$kegiatan[1]->nama}} : ({{number_format($kegiatan[1]->real/$sumnilai*100,2,",",".")}} %).
                            Sedangkan penyerapan terkecil pada sumber dana {{$lkegiatan[0]->nama}} : ({{number_format($lkegiatan[0]->real/$sumnilai*100,2,",",".")}} %) dari total nilai pinjaman terhadap {{$lkegiatan[0]->nama}}.
                            @endif
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="content_grafik_mini" id="pie"></div>
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
    series1.name = "Disburse";
    series1.dataFields.categoryX = "nama";
    series1.dataFields.valueY = "t";
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
    series2.name = "Undisburse";
    series2.dataFields.categoryX = "nama";
    series2.dataFields.valueY = "bt";
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
am4core.ready(function() {

    // Themes begin
    am4core.useTheme(am4themes_animated);
    // Themes end

    var chart = am4core.create("pie", am4charts.PieChart3D);
    chart.hiddenState.properties.opacity = 0; // this creates initial fade-in

    chart.legend = new am4charts.Legend();

    chart.data = {!!$results!!};

    var series = chart.series.push(new am4charts.PieSeries3D());
    series.dataFields.value = "jumlah";
    series.dataFields.category = "nama";

}); // end am4core.ready()
</script>