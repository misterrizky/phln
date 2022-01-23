@if ($collection->count() > 0)
<table class="table table-row-dashed table-striped table-row-gray-300 align-middle gs-0 gy-4">
    <thead>
        <tr>
            <th class="text-center" rowspan='2'>NO</th>
            <th class="text-center" rowspan='2'>KODE & NAMA PAKET</th>
            <th class="text-center" rowspan='2'>LOKASI</th>
            <th class="text-center" rowspan='2'>REALISASI KOMULATIF (T-1)</th>
            <th class="text-center" rowspan='2'>DIPA (TAHUN BERJALAN)</th>
            <th class="text-center" colspan='{{$tahun->count()}}'>RENCANA PENYERAPAN (TAHUN BERJALAN)</th>
        </tr>
        <tr>
            @php
                $year_arr = array();
            @endphp
            @foreach ($tahun as $item)
                @if($item->ta > date("Y"))
                @php $year_arr[] = $item->ta; @endphp
                <th>{{Str::Upper($item->ta)}}</th>
                @endif
            @endforeach
            
        </tr>
    </thead>
    <tbody>
        @php
        $no = 1;
        @endphp
        @foreach ($collection as $item)
        <tr>
            <td>{{$no++}}</td>
            <td>({{$item->kode_paket}}) - {{$item->nama_paket}}</td>
            <td>{{number_format($item->alokasi)}}</td>
            <td>{{number_format($realisasi)}}</td>
            <td>{{number_format($dipa)}}</td>
            @if($item->paketOwp->count() > 0)
                {{-- {{dd($item->paketOwp)}} --}}
                @foreach ($year_arr as $year)
                    @foreach ($item->paketOwp as $owp)
                        @php $val = 0;  @endphp
                        @if ($owp->ta == $year)
                            @php $val = $owp->target_dana;  @endphp
                            @break
                        @else
                        @endif
                    @endforeach
                <td>{{$val}}</td>
                @endforeach
            @else
            @endif
        </tr>
        @endforeach
    </tbody>
</table>
@else
<div class="text-center px-4 mb-3">
    <img class="mw-100 mh-300px" alt="" src="{{asset('keenthemes/media/illustrations/sketchy-1/2.png')}}">
</div>
@endif