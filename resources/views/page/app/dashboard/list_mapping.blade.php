<div class="row">
    <div class="col-lg-6">
        <div class="card mb-5 mb-xl-10">
            <div class="card-body py-3">
                <div class="table-responsive">
                    <table class="table table-row-dashed align-middle gs-0 gy-4">
                        <thead>
                            <tr class="fw-bolder text-muted">
                                <th class="min-w-150px" rowspan="2">SEKTOR</th>
                                <th class="min-w-150px" rowspan="2">KEGIATAN</th>
                                <th class="min-w-100px" rowspan="2">STATUS KINERJA BERDASARKAN PV</th>
                                <th class="min-w-150px" colspan="5">KATEGORI PERMASALAHAN</th>
                            </tr>
                            <tr class="fw-bolder text-muted">
                                <th class="min-w-150px">LAHAN / LOKASI</th>
                                <th class="min-w-150px">DESAIN</th>
                                <th class="min-w-150px">PERENCANAAN PENDANAAN</th>
                                <th class="min-w-150px">PENYIAPAN / PROSES LELANG</th>
                                <th class="min-w-150px">KINERJA PIHAK EKSTERNAL</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $col = 0;
                            @endphp
                            @foreach ($collection as $item)
                            <tr>
                                <td rowspan="{{$item->kegiatan->count()+1}}">{{$item->nama}}</td>
                            </tr>
                            @foreach ($item->kegiatan as $k)
                            @php
                            if($k->st == "At Risk"){
                                $color = "#FF0000";
                                $fcolor = "white";
                            }
                            elseif($k->st == "Behind Schedule"){
                                $color = "#FFFF00";
                                $fcolor = "black";
                            }
                            elseif($k->st == "On Schedule"){
                                $color = "#00FF00";
                                $fcolor = "black";
                            }
                            @endphp
                            <tr>
                                <td>{{$k->judul}}</td>
                                <td style="background-color:{{$color}}">{{$k->st}}</td>
                                <td>
                                    @foreach ($k->paket as $p)
                                        @foreach ($p->paketAwp as $awp)
                                            @if($awp->category_id == 1 || $awp->subcategory_id == 1)
                                                <i class="bi bi-check-lg"></i>
                                            @endif
                                        @endforeach
                                    @endforeach
                                </td>
                                <td>
                                    @foreach ($k->paket as $p)
                                        @foreach ($p->paketAwp as $awp)
                                            @if($awp->category_id == 2 || $awp->subcategory_id == 2)
                                                <i class="bi bi-check-lg"></i>
                                            @endif
                                        @endforeach
                                    @endforeach
                                </td>
                                <td>
                                    @foreach ($k->paket as $p)
                                        @foreach ($p->paketAwp as $awp)
                                            @if($awp->category_id == 3 || $awp->subcategory_id == 3)
                                                <i class="bi bi-check-lg"></i>
                                            @endif
                                        @endforeach
                                    @endforeach
                                </td>
                                <td>
                                    @foreach ($k->paket as $p)
                                        @foreach ($p->paketAwp as $awp)
                                            @if($awp->category_id == 4 || $awp->subcategory_id == 4)
                                                <i class="bi bi-check-lg"></i>
                                            @endif
                                        @endforeach
                                    @endforeach
                                </td>
                                <td>
                                    @foreach ($k->paket as $p)
                                        @foreach ($p->paketAwp as $awp)
                                            @if($awp->category_id == 5 || $awp->subcategory_id == 5)
                                                <i class="bi bi-check-lg"></i>
                                            @endif
                                        @endforeach
                                    @endforeach
                                </td>
                            </tr>
                            @endforeach
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="card mb-5 mb-xl-10">
            <div class="card-body py-3">
                <div class="row">
                    <div class="col-6">
                        <div class="card" style="background-color:brown;">
                            <div class="card-body">
                                <span class="text-white">{{$collection->count()}} Kategori</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card" style="background-color:yellow;">
                            <div class="card-body">
                                <span class="text-black">{{$masalah->count()}} Titik Masalah</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mt-5">
                        Terdapat {{$collection->count()}} kategori permasalahan dalam pelaksanaan
                        kegiatan Pinjaman Luar Negeri dengan {{$masalah->count()}} titik permasalahan yang
                        tersebar di {{$kegiatan->count()}} kegiatan (berdasarkan nomor register). Permasalahan
                        yang dominan mengacu hasil pembahasan Rapat Koordinasi
                        Pemantauan dan Evaluasi PHLN Triwulan III Tahun 2021 internal
                        Ditjen Cipta Karya dan di Bappenas adalah pada kategori Kinerja
                        Pihak Eksternal.
                    </div>
                    <div class="col-12 mt-5">
                        <div class="content_grafik" id="chart"></div>
                    </div>
                </div>
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
    var chart = am4core.create("chart", am4charts.XYChart);
    
    // Enable chart cursor
    chart.cursor = new am4charts.XYCursor();
    chart.cursor.lineX.disabled = true;
    chart.cursor.lineY.disabled = true;
    
    // Enable scrollbar
    chart.scrollbarX = new am4core.Scrollbar();
    
    // Add data
    chart.data = {!!$results!!};
    
    // Create axes
    var categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
    categoryAxis.dataFields.category = "nama";
    categoryAxis.renderer.grid.template.location = 0;
    
    var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
    
    // Create series
    var series = chart.series.push(new am4charts.LineSeries());
    series.tooltipText = "{categoryX}\n[bold font-size: 17px]Total Masalah: {valueY}[/]";
    series.dataFields.valueY = "total";
    series.dataFields.categoryX = "nama";
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
}); // end am4core.ready()
</script>