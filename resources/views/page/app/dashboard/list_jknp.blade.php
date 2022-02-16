<div class="row">
    <div class="col-6">
        <div class="content_grafik" id="chartdiv"></div>
    </div>
    <div class="col-6">
        <div class="card mb-5 mb-xl-10">
            <div class="card-header">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bolder fs-3 mb-1">Total Kegiatan {{$kegiatan->count()}}</span>
                </h3>
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bolder fs-3 mb-1">Rp {{number_format($kegiatan->sum('nilai')/1000000000000,2,",",".")}}</span>
                </h3>
                <div class="card-toolbar">
                    <div class="row">
                        <div class="col-lg-12">
                            @if($kegiatan)
                            @if ($tipe == "Sektor")
                            Dilihat dari sektornya, nilai pinjaman terbesar pada sektor {{$kegiatan[0]->sektor->nama}} sebesar Rp. {{number_format($kegiatan[0]->nilai/1000000000000,2,",",".")}} Trilyun
                            ({{number_format($kegiatan[0]->nilai/$kegiatan->sum('nilai')*100,2,",",".")}} %) pada {{$kegiatan[0]->total}} kegiatan, disusul sektor {{$kegiatan[1]->sektor->nama}} sebesar Rp. {{number_format($kegiatan[1]->nilai/1000000000000,2,",",".")}} Trilyun
                            ({{number_format($kegiatan[1]->nilai/$kegiatan->sum('nilai')*100,2,",",".")}} %) pada {{$kegiatan[1]->total}} kegiatan, kemudian sektor {{$kegiatan[2]->sektor->nama}} sebesar Rp. {{number_format($kegiatan[2]->nilai/1000000000000,2,",",".")}} Trilyun
                            ({{number_format($kegiatan[2]->nilai/$kegiatan->sum('nilai')*100,2,",",".")}} %) pada {{$kegiatan[2]->total}} kegiatan.
                            @else
                            Nilai pinjaman terbesar berasal dari {{$kegiatan[0]->donor->nama}} sebesar Rp. {{number_format($kegiatan[0]->nilai/1000000000000,2,",",".")}} Trilyun
                            ({{number_format($kegiatan[0]->nilai/$kegiatan->sum('nilai')*100,2,",",".")}} %) pada {{$kegiatan[0]->total}} kegiatan, disusul {{$kegiatan[1]->donor->nama}} sebesar Rp. {{number_format($kegiatan[1]->nilai/1000000000000,2,",",".")}} Trilyun
                            ({{number_format($kegiatan[1]->nilai/$kegiatan->sum('nilai')*100,2,",",".")}} %) pada {{$kegiatan[1]->total}} kegiatan.
                            @endif
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th rowspan="2">
                                @if ($tipe == "Sektor")
                                Sektor
                                @else
                                Donor
                                @endif
                            </th>
                            <th rowspan="2">Jumlah Kegiatan</th>
                            <th colspan="2">Nilai Pinjaman</th>
                        </tr>
                        <tr>
                            <th>Rp. Trilyun</th>
                            <th>%</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($kegiatan as $k)
                        <tr>
                            <td>
                                @if ($tipe == "Sektor")
                                {{$k->sektor->nama}}
                                @else
                                {{$k->donor->nama}}
                                @endif
                            </td>
                            <td>
                                {{$k->total}}
                            </td>
                            <td>
                                {{number_format($k->nilai/1000000000000,2,",",".")}}
                            </td>
                            <td>{{number_format($k->nilai/$kegiatan->sum('nilai')*100,2,",",".")}} %</td>
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

// Themes begin
am4core.useTheme(am4themes_animated);
// Themes end

// create chart
var chart = am4core.create("chartdiv", am4charts.TreeMap);
chart.hiddenState.properties.opacity = 0;
chart.data = [{
    name: "First",
    children: {!!$result!!}
}];

chart.colors.step = 2;

// define data fields
chart.dataFields.value = "value";
chart.dataFields.name = "name";
chart.dataFields.children = "children";
chart.layoutAlgorithm = chart.binaryTree;

chart.zoomable = false;

// level 0 series template
var level0SeriesTemplate = chart.seriesTemplates.create("0");
var level0ColumnTemplate = level0SeriesTemplate.columns.template;

level0ColumnTemplate.column.cornerRadius(10, 10, 10, 10);
level0ColumnTemplate.fillOpacity = 0;
level0ColumnTemplate.strokeWidth = 4;
level0ColumnTemplate.strokeOpacity = 0;

// level 1 series template
var level1SeriesTemplate = chart.seriesTemplates.create("1");
level1SeriesTemplate.tooltip.dy = - 15;
level1SeriesTemplate.tooltip.pointerOrientation = "vertical";

var level1ColumnTemplate = level1SeriesTemplate.columns.template;

level1SeriesTemplate.tooltip.animationDuration = 0;
level1SeriesTemplate.strokeOpacity = 1;

level1ColumnTemplate.column.cornerRadius(10, 10, 10, 10)
level1ColumnTemplate.fillOpacity = 1;
level1ColumnTemplate.strokeWidth = 4;
level1ColumnTemplate.stroke = am4core.color("#ffffff");

var bullet1 = level1SeriesTemplate.bullets.push(new am4charts.LabelBullet());
bullet1.locationY = 0.5;
bullet1.locationX = 0.5;
bullet1.label.text = "{name}";
bullet1.label.fill = am4core.color("#ffffff");
bullet1.interactionsEnabled = false;
chart.maxLevels = 2;

}); // end am4core.ready()
</script>