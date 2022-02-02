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
    
    /* Create series */
    var columnSeries = chart.series.push(new am4charts.ColumnSeries());
    columnSeries.name = "Realisasi";
    columnSeries.dataFields.valueY = "real";
    columnSeries.dataFields.categoryX = "prov";
    
    columnSeries.columns.template.tooltipText = "[#fff font-size: 15px]{name} in {categoryX}:\n[/][#fff font-size: 20px]{valueY}[/] [#fff]{additional}[/]"
    columnSeries.columns.template.propertyFields.fillOpacity = "fillOpacity";
    columnSeries.columns.template.propertyFields.stroke = "stroke";
    columnSeries.columns.template.propertyFields.strokeWidth = "strokeWidth";
    columnSeries.columns.template.propertyFields.strokeDasharray = "columnDash";
    columnSeries.tooltip.label.textAlign = "middle";
    
    var columnSeriess = chart.series.push(new am4charts.ColumnSeries());
    columnSeriess.name = "DIPA";
    columnSeriess.dataFields.valueY = "dipa";
    columnSeriess.dataFields.categoryX = "prov";
    
    columnSeriess.columns.template.tooltipText = "[#fff font-size: 15px]{name} in {categoryX}:\n[/][#fff font-size: 20px]{valueY}[/] [#fff]{additional}[/]"
    columnSeriess.columns.template.propertyFields.fillOpacity = "fillOpacity";
    columnSeriess.columns.template.propertyFields.stroke = "stroke";
    columnSeriess.columns.template.propertyFields.strokeWidth = "strokeWidth";
    columnSeriess.columns.template.propertyFields.strokeDasharray = "columnDash";
    columnSeriess.tooltip.label.textAlign = "middle";
    
    var lineSeries = chart.series.push(new am4charts.LineSeries());
    lineSeries.name = "Persentase";
    lineSeries.dataFields.valueY = "kuning";
    lineSeries.dataFields.categoryX = "prov";
    
    lineSeries.stroke = am4core.color("#fdd400");
    lineSeries.strokeWidth = 3;
    lineSeries.propertyFields.strokeDasharray = "lineDash";
    lineSeries.tooltip.label.textAlign = "top";
    
    var bullet = lineSeries.bullets.push(new am4charts.Bullet());
    bullet.fill = am4core.color("#fdd400"); // tooltips grab fill from parent by default
    // bullet.label.text = "{valueY.totalPercent.formatNumber('#.00')}%";
    bullet.tooltipText = "[#fff font-size: 15px]{categoryX}:\n[/][#fff font-size: 20px]{valueY}%[/] [#fff]{additional}[/]";
    var circle = bullet.createChild(am4core.Circle);
    circle.radius = 4;
    circle.fill = am4core.color("#fff");
    circle.strokeWidth = 3;

    var lineSeriess = chart.series.push(new am4charts.LineSeries());
    lineSeriess.name = "AVG";
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
    
}); // end am4core.ready()
</script>