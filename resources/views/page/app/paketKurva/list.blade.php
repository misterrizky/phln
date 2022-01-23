<div id="chartdiv" class="content_grafik"></div>
<script>
    am4core.ready(function() {
    
        // Themes begin
        am4core.useTheme(am4themes_animated);
        // Themes end
        
        // Create chart instance
        var chart = am4core.create("chartdiv", am4charts.XYChart);
        
        // Enable chart cursor
        chart.cursor = new am4charts.XYCursor();
        chart.cursor.lineX.disabled = true;
        chart.cursor.lineY.disabled = true;
        
        // Enable scrollbar
        chart.scrollbarX = new am4core.Scrollbar();
        
        // Add data
        chart.data = {!!$collection!!};
        
        // Create axes
        var dateAxis = chart.xAxes.push(new am4charts.DateAxis());
        dateAxis.renderer.grid.template.location = 0.5;
        dateAxis.dateFormatter.inputDateFormat = "MMM";
        dateAxis.renderer.minGridDistance = 40;
        dateAxis.tooltipDateFormat = "MMM";
        
        var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
        
        // Create series
        var series = chart.series.push(new am4charts.LineSeries());
        series.tooltipText = "Bulan {bulan}\n[bold font-size: 17px]Realisasi: Rp. {valueY}[/]";
        series.dataFields.valueY = "real";
        series.dataFields.dateX = "bulan";
        series.strokeDasharray = 3;
        series.strokeWidth = 2
        series.strokeOpacity = 0.3;
        series.strokeDasharray = "3,3"
        
        var bullet = series.bullets.push(new am4charts.CircleBullet());
        bullet.strokeWidth = 2;
        bullet.stroke = am4core.color("#fff");
        bullet.setStateOnChildren = true;
        bullet.propertyFields.fillOpacity = "opacity";
        bullet.propertyFields.strokeOpacity = "opacity";
        
        var hoverState = bullet.states.create("hover");
        hoverState.properties.scale = 1.7;
        
        var seriess = chart.series.push(new am4charts.LineSeries());
        seriess.tooltipText = "Bulan {bulan}\n[bold font-size: 17px]Target: Rp. {valueY}[/]";
        seriess.dataFields.valueY = "target";
        seriess.dataFields.dateX = "bulan";
        seriess.strokeDasharray = 3;
        seriess.strokeWidth = 2
        seriess.strokeOpacity = 0.3;
        seriess.strokeDasharray = "3,3"
        
        var bullets = seriess.bullets.push(new am4charts.CircleBullet());
        bullets.strokeWidth = 2;
        bullets.stroke = am4core.color("#fff");
        bullets.setStateOnChildren = true;
        bullets.propertyFields.fillOpacity = "opacity";
        bullets.propertyFields.strokeOpacity = "opacity";
        
        var hoverStates = bullets.states.create("hover");
        hoverStates.properties.scale = 1.7;
    }); // end am4core.ready()
</script>