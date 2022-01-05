<div class="row">
    <div class="col-lg-6">
        <div class="card mb-5 mb-xl-10">
            <div class="card-header border-0 pt-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bolder fs-3 mb-1">Berdasarkan Donor / Development Partner:</span>
                </h3>
            </div>
            <div class="card-body py-3">
                <div class="content_grafik" id="chart_donor"></div>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="card mb-5 mb-xl-10">
            <div class="card-header border-0 pt-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bolder fs-3 mb-1">Berdasarkan Sektor / Direktorat:</span>
                </h3>
            </div>
            <div class="card-body py-3">
                <div class="content_grafik" id="chart_sektor"></div>
            </div>
        </div>
    </div>
    <div class="col-lg-2"></div>
    <div class="col-lg-8">
        <div class="card mb-5 mb-xl-10">
            <div class="card-body py-3">
                <div class="content_grafik" id="chart_pie"></div>
            </div>
        </div>
    </div>
    <div class="col-lg-2"></div>
</div>
<script>
    am4core.ready(function() {
        am4core.useTheme(am4themes_animated);
        
        var chart = am4core.create("chart_donor", am4charts.XYChart);
        chart.hiddenState.properties.opacity = 0;
        
        chart.data = {!!$donor!!};
        
        chart.colors.step = 2;
        chart.padding(30, 30, 10, 30);
        chart.legend = new am4charts.Legend();
        chart.responsive.enabled = true;
        chart.colors.list = [
            am4core.color("#FF4500"),
            am4core.color("#FFD700"),
            am4core.color("#3399FF"),
            am4core.color("#66FF33"),
            am4core.color("#e60000"),
            am4core.color("#F9F871"),
        ];
        
        var categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
        categoryAxis.dataFields.category = "donor";
        categoryAxis.renderer.grid.template.location = 0;
        
        var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
        valueAxis.calculateTotals = true;
        valueAxis.title.text = "Nilai PHLN (Dalam Rp Milyar)";
        valueAxis.renderer.minWidth = 50;
        
        
        var series1 = chart.series.push(new am4charts.ColumnSeries());
        series1.columns.template.width = am4core.percent(80);
        series1.columns.template.tooltipText = "{name}: {valueY}";
        series1.name = "Belum terserap";
        series1.dataFields.categoryX = "donor";
        series1.dataFields.valueY = "alokasi";
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
        series2.columns.template.tooltipText = "{name}: {valueY}";
        series2.name = "Penyerapan";
        series2.dataFields.categoryX = "donor";
        series2.dataFields.valueY = "penyerapan";
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
        am4core.useTheme(am4themes_animated);
        
        var chart = am4core.create("chart_sektor", am4charts.XYChart);
        chart.hiddenState.properties.opacity = 0;
        
        chart.data = {!!$sektor!!};
        
        chart.colors.step = 2;
        chart.padding(30, 30, 10, 30);
        chart.legend = new am4charts.Legend();

        chart.responsive.enabled = true;
        chart.colors.list = [
            am4core.color("#FF4500"),
            am4core.color("#FFD700"),
            am4core.color("#3399FF"),
            am4core.color("#66FF33"),
            am4core.color("#e60000"),
            am4core.color("#F9F871"),
        ];
        
        var categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
        categoryAxis.dataFields.category = "nama";
        categoryAxis.renderer.grid.template.location = 0;
        
        var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
        valueAxis.calculateTotals = true;
        valueAxis.title.text = "Nilai PHLN (Dalam Rp Milyar)";
        valueAxis.renderer.minWidth = 50;
        
        var series1 = chart.series.push(new am4charts.ColumnSeries());
        series1.columns.template.width = am4core.percent(80);
        series1.columns.template.tooltipText =
        "{name}: {valueY}";
        series1.name = "Belum terserap";
        series1.dataFields.categoryX = "nama";
        series1.dataFields.valueY = "alokasi";
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
        series2.columns.template.tooltipText =
        "{name}: {valueY}";
        series2.name = "Penyerapan";
        series2.dataFields.categoryX = "nama";
        series2.dataFields.valueY = "penyerapan";
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
        am4core.useTheme(am4themes_animated);
        // Themes end

        var chart = am4core.create("chart_pie", am4charts.PieChart3D);
        chart.hiddenState.properties.opacity = 0; // this creates initial fade-in

        chart.legend = new am4charts.Legend();

        chart.data = {!!$kegiatan!!};

        var series = chart.series.push(new am4charts.PieSeries3D());
        chart.legend.valueLabels.template.text = "{jumlah}";
        series.dataFields.category = "nama";
        series.slices.template.tooltipText = "{nama}: {jumlah}";
        series.dataFields.value = "jumlah";
        // series.dataFields.category = "st";
    });
</script>