<x-app-layout title="Project Brief {{$kegiatan->judul}} {{$kegiatan->no_loan}} | {{$kegiatan->kode_register}}">
    <div id="content_list">
        <div class="card mb-5 mb-xl-10">
            <div class="card-toolbar">
                <ul class="nav nav-tabs nav-line-tabs nav-stretch fs-6 border-0">
                    <li class="nav-item">
                        <a class="nav-link {{request()->is('office/kegiatan/*/paket-project-brief') ? 'active' : ''}}" href="{{route('phln.project_brief',$kegiatan->id)}}">Project Brief</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{request()->is('office/kegiatan/*/paket') ? 'active' : ''}}" href="{{route('phln.kegiatan.paket',$kegiatan->id)}}">Pemaketan & Statusnya</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{request()->is('office/kegiatan/*/paket-timeline') ? 'active' : ''}}" href="{{route('phln.paket_timeline',$kegiatan->id)}}">Timeline</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{request()->is('office/kegiatan/*/paket-owp') ? 'active' : ''}}" href="{{route('phln.paket_owp',$kegiatan->id)}}">OWP</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{request()->is('office/kegiatan/*/paket-awp') ? 'active' : ''}}" href="{{route('phln.paket_awp',$kegiatan->id)}}">AWP</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{request()->is('office/kegiatan/*/paket-kurva') ? 'active' : ''}}" href="{{route('phln.paket_kurva',$kegiatan->id)}}">Kurva -S</a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <div class="card mb-5 mb-xl-10">
                    <div class="card-header border-0 pt-5">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bolder fs-3 mb-1">Pelaksanaan</span>
                            <span class="text-muted mt-1 fw-bold fs-7">Project Brief : {{$kegiatan->judul}} <br> {{$kegiatan->no_loan}} | {{$kegiatan->kode_register}}</span>
                        </h3>
                    </div>
                    <div class="card-body py-3">
                        <div class="row">
                            <div class="col-xl-7">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <h3 class="font-size-lg text-dark font-weight-bold mb-6">Nama Kegiatan: {{$kegiatan->judul}}</h3>
                                            <ul>
                                                <li>Lender : {{$kegiatan->donor->nama}}</li>
                                                <li>
                                                    Executing Agency :
                                                    @if($kegiatan->exec_unor_code) 
                                                    {{$kegiatan->exec_unor->nama}}
                                                    @endif
                                                    @if($kegiatan->exec_satker_code)
                                                    -
                                                    {{$kegiatan->exec_satker->nama}}
                                                    @endif
                                                </li>
                                                <li>
                                                    Implementing Agency : 
                                                    @if($kegiatan->imp_unor_code)
                                                    {{$kegiatan->imp_unor->nama}}
                                                    @endif
                                                    @if($kegiatan->imp_satker_code)
                                                    - 
                                                    {{$kegiatan->imp_satker->nama}}
                                                    @endif
                                                </li>
                                                <li>Masa Efektif : {{$kegiatan->tanggal_efektif->format('j F Y')}} - {{$kegiatan->tanggal_closing->format('j F Y')}}</li>
                                                <li>
                                                    Metode Pembayaran :
                                                    @if($kegiatan->metode_pembayaran == 1)
                                                    PP
                                                    @elseif($kegiatan->metode_pembayaran == 2)
                                                    PL
                                                    @elseif($kegiatan->metode_pembayaran == 3)
                                                    LK
                                                    @elseif($kegiatan->metode_pembayaran == 4)
                                                    RK
                                                    @endif
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-xl-4">
                                        <div class="card" style="background-color:navy;">
                                            <div class="card-body">
                                                <span style="font-size: 80%;color:white;">
                                                    Total Pinjaman Luar Negeri
                                                </span>
                                                <br>
                                                <span style="color:white;font-weight:bold;">
                                                    Rp {{number_format($kegiatan->nilai_konversi)}}
                                                </span>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-body">
                                                <span style="font-size: 80%;">Realisasi Kumulatif</span>
                                                <br>
                                                <span style="color:black;font-weight:bold;">
                                                    Rp {{number_format($kegiatan->penyerapan)}}
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-8">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th>PAGU DIPA {{date("Y")}}</th>
                                                                <th>Realisasi {{date("Y")}}</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>{{number_format($pagu_dipa)}}</td>
                                                                <td>
                                                                    {{number_format($realisasi)}}
                                                                    <br>
                                                                    {{$realisasi ? $realisasi / $pagu_dipa * 100 : 0}} %
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-body">
                                                <span style="font-size: 80%;">Status Kegiatan:</span>
                                                <br>
                                                <span style="color:black;font-weight:bold;">
                                                    {{$kegiatan->st}}
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-xl-6">
                                        <div class="content_grafik_mini" id="penyerapan"></div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="content_grafik_mini" id="elapsed"></div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-xl-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <h3 class="font-size-lg text-dark font-weight-bold mb-6">Kinerja Kegiatan Berdasarkan PV</h3>
                                                <div class="content_grafik" id="kinerja_kegiatan"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-5">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <h3 class="font-size-lg text-dark font-weight-bold mb-6">Gambaran Umum:</h3>
                                            {!!$kegiatan->tujuan!!}
                                            {!!$kegiatan->sasaran!!}
                                            {!!$kegiatan->lingkup_kegiatan!!}
                                        </div>
                                    </div>
                                </div>
                                <div class="card mt-5">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <h3 class="font-size-lg text-dark font-weight-bold mb-6">Komponen Kegiatan:</h3>
                                            {!!$kegiatan->komponen!!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="content_input"></div>
    @section('custom_js')
    <script>
        am4core.ready(function() {
        
            // Themes begin
            am4core.useTheme(am4themes_animated);
            // Themes end
            
            var chart = am4core.create("penyerapan", am4charts.PieChart3D);
            chart.hiddenState.properties.opacity = 0; // this creates initial fade-in
            chart.responsive.enabled = true;
            
            chart.legend = new am4charts.Legend();
            
            chart.data = chart.data = {!!$kegiatans!!};
            
            chart.innerRadius = 50;
            
            var series = chart.series.push(new am4charts.PieSeries3D());
            series.dataFields.value = "jumlah";
            series.dataFields.category = "nama";
        
        });
        am4core.ready(function() {
        
            // Themes begin
            am4core.useTheme(am4themes_animated);
            // Themes end
            
            var chart = am4core.create("elapsed", am4charts.PieChart3D);
            chart.hiddenState.properties.opacity = 0; // this creates initial fade-in
            chart.responsive.enabled = true;
            
            chart.legend = new am4charts.Legend();
            
            chart.data = {!!$kegiatanss!!};
            
            chart.innerRadius = 50;
            
            var series = chart.series.push(new am4charts.PieSeries3D());
            series.dataFields.value = "jumlah";
            series.dataFields.category = "nama";
        
        });
        am4core.ready(function() {

            // Themes begin
            am4core.useTheme(am4themes_animated);
            // Themes end

            // Create chart instance
            var chart = am4core.create("kinerja_kegiatan", am4charts.XYChart);

            // Enable chart cursor
            chart.cursor = new am4charts.XYCursor();
            chart.cursor.lineX.disabled = true;
            chart.cursor.lineY.disabled = true;

            // Enable scrollbar
            chart.scrollbarX = new am4core.Scrollbar();

            // Add data
            chart.data = [
                @php
                $srd = 0;
                $date = '';
                @endphp
                @foreach($kinerja_kegiatan as $item)
                {
                    @php
                    $rd = $item->rd;
                    $srd += $rd;
                    $dr = $srd / $kegiatan->nilai_konversi;
                    if($item->bulan == 1){
                        $date = \Carbon\Carbon::parse(date($item->ta.'-03-30'));
                    }elseif($item->bulan == 4){
                        $date = \Carbon\Carbon::parse(date($item->ta.'-06-30'));
                    }elseif($item->bulan == 7){
                        $date = \Carbon\Carbon::parse(date($item->ta.'-09-30'));
                    }elseif($item->bulan == 10){
                        $date = \Carbon\Carbon::parse(date($item->ta.'-12-30'));
                    }
                    $etr = $date->diffInDays($kegiatan->tanggal_efektif) / $kegiatan->tanggal_closing->diffInDays($kegiatan->tanggal_efektif);
                    $pv = $dr / $etr;
                    $kategori = $item->ta . ' / Bulan ' . $item->bulan;
                    @endphp
                    "pv":{{$pv}},
                    "kategori":"{{$kategori}}",
                },
                @endforeach
            ];

            // Create axes
            var categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
            categoryAxis.renderer.inversed = false;
            categoryAxis.dataFields.category = "kategori";
            // categoryAxis.title.text = "Pagu Alokasi (USD)";
            categoryAxis.title.fontWeight = "bold";

            var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());

            // Create series
            var series = chart.series.push(new am4charts.LineSeries());
            series.tooltipText = "{date}\n[bold font-size: 17px]value: {valueY}[/]";
            series.dataFields.valueY = "pv";
            series.dataFields.categoryX = "kategori";
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
    @endsection
</x-app-layout>