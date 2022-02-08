<div id="chartdiv" class="content_grafik"></div>
<script>
am4core.ready(function() {
    
    // Themes begin
    am4core.useTheme(am4themes_animated);
    // Themes end
    
    // Create chart instance
    var chart = am4core.create("chartdiv", am4charts.XYChart);
    
    // Export
    chart.exporting.menu = new am4core.ExportMenu();
    
    // Data for both series
    var data = {!!$result!!};
    chart.legend = new am4charts.Legend();
    
    /* Create axes */
    var categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
    categoryAxis.dataFields.category = "prov";
    categoryAxis.renderer.minGridDistance = 30;
    
    /* Create value axis */
    var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
    valueAxis.renderer.minWidth = 50;
    valueAxis.min = 0;
    valueAxis.cursorTooltipEnabled = false;
    
    /* Create series */
    var columnSeries = chart.series.push(new am4charts.ColumnSeries());
    columnSeries.name = "Realisasi";
    columnSeries.dataFields.valueY = "real";
    columnSeries.dataFields.categoryX = "prov";
    
    columnSeries.columns.template.tooltipText = "[#fff font-size: 15px]{name} in {categoryX}:\n[/][#fff font-size: 20px]{valueY}M[/] [#fff]{additional}[/]"
    columnSeries.columns.template.propertyFields.fillOpacity = "fillOpacity";
    columnSeries.columns.template.propertyFields.stroke = "stroke";
    columnSeries.columns.template.propertyFields.strokeWidth = "strokeWidth";
    columnSeries.columns.template.propertyFields.strokeDasharray = "columnDash";
    columnSeries.tooltip.label.textAlign = "middle";
    
    var columnSeriess = chart.series.push(new am4charts.ColumnSeries());
    columnSeriess.name = "DIPA";
    columnSeriess.dataFields.valueY = "dipa";
    columnSeriess.dataFields.categoryX = "prov";
    
    columnSeriess.columns.template.tooltipText = "[#fff font-size: 15px]{name} in {categoryX}:\n[/][#fff font-size: 20px]{valueY}M[/] [#fff]{additional}[/]"
    columnSeriess.columns.template.propertyFields.fillOpacity = "fillOpacity";
    columnSeriess.columns.template.propertyFields.stroke = "stroke";
    columnSeriess.columns.template.propertyFields.strokeWidth = "strokeWidth";
    columnSeriess.columns.template.propertyFields.strokeDasharray = "columnDash";
    columnSeriess.tooltip.label.textAlign = "middle";
    
    var paretoValueAxis = chart.yAxes.push(new am4charts.ValueAxis());
    paretoValueAxis.renderer.opposite = true;
    paretoValueAxis.min = 0;
    paretoValueAxis.max = 100;
    paretoValueAxis.strictMinMax = true;
    paretoValueAxis.renderer.grid.template.disabled = true;
    paretoValueAxis.numberFormatter = new am4core.NumberFormatter();
    paretoValueAxis.numberFormatter.numberFormat = "#'%'"
    // paretoValueAxis.cursorTooltipEnabled = false;

    var paretoSeries = chart.series.push(new am4charts.LineSeries())
    paretoSeries.dataFields.valueY = "kuning";
    paretoSeries.dataFields.categoryX = "prov";
    paretoSeries.name = "Persentase Realisasi";
    paretoSeries.yAxis = paretoValueAxis;
    paretoSeries.tooltipText = "[#fff font-size: 15px]{categoryX}:\n[/][#fff font-size: 20px]{valueY}%[/] [#fff]{additional}[/]";
    paretoSeries.bullets.push(new am4charts.CircleBullet());
    paretoSeries.strokeWidth = 2;
    paretoSeries.stroke = new am4core.InterfaceColorSet().getFor("alternativeBackground");
    paretoSeries.strokeOpacity = 0.5;

    var lineSeriess = chart.series.push(new am4charts.LineSeries());
    lineSeriess.name = "Prognosis";
    lineSeriess.dataFields.valueY = "merah";
    lineSeriess.dataFields.categoryX = "prov";
    
    lineSeriess.stroke = am4core.color("#fe7a33");
    lineSeriess.strokeWidth = 3;
    lineSeriess.propertyFields.strokeDasharray = "lineDash";
    lineSeriess.tooltip.label.textAlign = "top";
    
    var bullets = lineSeriess.bullets.push(new am4charts.Bullet());
    bullets.fill = am4core.color("#fe7a33"); // tooltips grab fill from parent by default
    // bullets.label.text = "{valueY.totalPercent}%";
    bullets.tooltipText = "[#fff font-size: 15px]{categoryX}:\n[/][#fff font-size: 20px]{valueY}%[/] [#fff]{additional}[/]";

    var circles = bullets.createChild(am4core.Circle);
    circles.radius = 4;
    circles.fill = am4core.color("#fff");
    circles.strokeWidth = 3;
    
    chart.data = data;
    chart.scrollbarX = new am4core.Scrollbar();
    chart.cursor = new am4charts.XYCursor();
    chart.cursor.behavior = "panX";
    
}); // end am4core.ready()
</script>