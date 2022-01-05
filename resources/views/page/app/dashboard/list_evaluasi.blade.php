<div class="row">
    <div class="col-lg-12">
        <div class="card mb-5 mb-xl-10">
            <div class="card-header border-0 pt-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bolder fs-3 mb-1">Grafik Evaluasi:</span>
                </h3>
            </div>
            <div class="card-body py-3">
                <div class="content_grafik" id="chart_evaluasi"></div>
            </div>
        </div>
    </div>
</div>
<script>
    am4core.ready(function() {
        // Themes begin
        am4core.useTheme(am4themes_animated);
        // Themes end
        // Create chart instance
        var chart = am4core.create("chart_evaluasi", am4charts.XYChart);
        // Add data
        chart.data = {!!$evaluasi!!};

        // Create axes
        var categoryAxis = chart.yAxes.push(new am4charts.CategoryAxis());
        categoryAxis.renderer.inversed = true;
        categoryAxis.dataFields.category = "nilai_konversi";
        categoryAxis.title.text = "Pagu Alokasi (USD)";
        categoryAxis.title.fontWeight = "bold";
        // Create value axis
        var valueAxis = chart.xAxes.push(new am4charts.ValueAxis());
        valueAxis.title.text = "Progress Variant (PV)";
        valueAxis.calculateTotals = true;
        valueAxis.renderer.minWidth = 50;
        valueAxis.title.fontWeight = "bold";
        // Create series
        var series = chart.series.push(new am4charts.LineSeries());
        series.dataFields.valueX = "pv";
        series.dataFields.categoryY = "nilai_konversi";
        series.dataFields.name = "judul";
        series.strokeWidth = 0;
        series.strokeDasharray = 4;
        series.stacked = true;
        series.bullets.push(new am4charts.CircleBullet());
        series.tooltipText = "Kegiatan {name}: {categoryY}";
        series.tooltip.pointerOrientation = "vertical";

        // Add chart cursor
        chart.cursor = new am4charts.XYCursor();
        chart.cursor.behavior = "zoomXY";

        // Add scrollbar
        chart.scrollbarX = new am4core.Scrollbar();
        chart.scrollbarY = new am4core.Scrollbar();

        // Create ranges
        var range = valueAxis.axisRanges.create();
        range.value = 0;
        range.endValue = 0.3;
        range.axisFill.fill = am4core.color("#FF4500");
        range.axisFill.fillOpacity = 0.2;

        var range2 = valueAxis.axisRanges.create();
        range2.value = 0.3;
        range2.endValue = 1;
        range2.axisFill.fill = am4core.color("#FFD700");
        range2.axisFill.fillOpacity = 0.2;

        var range3 = valueAxis.axisRanges.create();
        range3.value = 1;
        range3.endValue = 1.5;
        range3.axisFill.fill = am4core.color("#66FF33");
        range3.axisFill.fillOpacity = 0.2;

    }); // end am4core.ready()
</script>