<h1>Disbursement Plan</h1>
@if ($collection->count() > 0)
<table class="table table-row-dashed table-striped table-row-gray-300 align-middle gs-0 gy-4">
    <thead>
        <tr>
            <th class="text-center" rowspan='3'>NO</th>
            <th class="text-center" rowspan='3'>KODE & NAMA PAKET</th>
            <th class="text-center" rowspan='3'>ALOKASI</th>
            <th class="text-center" rowspan='3'>REALISASI KOMULATIF (T-1)</th>
            <th class="text-center" rowspan='3'>DIPA (TAHUN BERJALAN)</th>
            <th class="text-center" colspan='12'>RENCANA PENYERAPAN (TAHUN BERJALAN)</th>
            <th class="text-center" rowspan='3'>SISA ALOKASI</th>
        </tr>
        <tr>
            <th colspan="3" class="text-center">Q1</th>
            <th colspan="3" class="text-center">Q2</th>
            <th colspan="3" class="text-center">Q3</th>
            <th colspan="3" class="text-center">Q4</th>
        </tr>
        <tr>
            <th class="text-center">1</th>
            <th class="text-center">2</th>
            <th class="text-center">3</th>
            <th class="text-center">4</th>
            <th class="text-center">5</th>
            <th class="text-center">6</th>
            <th class="text-center">7</th>
            <th class="text-center">8</th>
            <th class="text-center">9</th>
            <th class="text-center">10</th>
            <th class="text-center">11</th>
            <th class="text-center">12</th>
        </tr>
    </thead>
    <tbody>
        @php
        $no = 1;
        $sisa_alokasi = 0;
        $alokasi = 0;
        @endphp
        @foreach ($collection as $item)
        @php
            $alokasi = $item->paket_alokasi['alokasi'];
            $sisa_alokasi = $alokasi - $target - $item->q_dana->sum('target_dana');
        @endphp
        <tr>
            <td>{{$no++}}</td>
            <td>({{$item->kode_paket}}) - {{$item->nama_paket}}</td>
            <td>{{number_format($alokasi)}}</td>
            <td>{{number_format($target)}}</td>
            <td>{{number_format($item->getLastDipa['dipa'])}}</td>
            @if($item->paketAwp->count() > 0)
                @for ($i=1; $i < 13; $i++)
                    @if ($item->q_b($item->id,$i))
                    <td>
                        {{number_format($item->q_b($item->id,$i)->target_dana)}}
                    </td>
                    @else
                    <td>0</td>
                    @endif
                @endfor
            @else
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
            @endif
            <td>{{number_format($sisa_alokasi)}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@else
<div class="text-center px-4 mb-3">
    <img class="mw-100 mh-300px" alt="" src="{{asset('keenthemes/media/illustrations/sketchy-1/2.png')}}">
</div>
@endif
<hr>
<h1>Disbursement Actual</h1>
@if ($collection->count() > 0)
<table class="table table-row-dashed table-striped table-row-gray-300 align-middle gs-0 gy-4">
    <thead>
        <tr>
            <th class="text-center" rowspan='3'>NO</th>
            <th class="text-center" rowspan='3'>KODE & NAMA PAKET</th>
            <th class="text-center" rowspan='3'>ALOKASI</th>
            <th class="text-center" rowspan='3'>REALISASI KOMULATIF (T-1)</th>
            <th class="text-center" rowspan='3'>DIPA (TAHUN BERJALAN)</th>
            <th class="text-center" colspan='12'>RENCANA PENYERAPAN (TAHUN BERJALAN)</th>
            <th class="text-center" rowspan='3'>SISA ALOKASI</th>
        </tr>
        <tr>
            <th colspan="3" class="text-center">Q1</th>
            <th colspan="3" class="text-center">Q2</th>
            <th colspan="3" class="text-center">Q3</th>
            <th colspan="3" class="text-center">Q4</th>
        </tr>
        <tr>
            <th class="text-center">1</th>
            <th class="text-center">2</th>
            <th class="text-center">3</th>
            <th class="text-center">4</th>
            <th class="text-center">5</th>
            <th class="text-center">6</th>
            <th class="text-center">7</th>
            <th class="text-center">8</th>
            <th class="text-center">9</th>
            <th class="text-center">10</th>
            <th class="text-center">11</th>
            <th class="text-center">12</th>
        </tr>
    </thead>
    <tbody>
        @php
        $no = 1;
        $sisa_alokasi = 0;
        $alokasi = 0;
        @endphp
        @foreach ($collection as $item)
        @php
            $alokasi = $item->paket_alokasi['alokasi'];
            $sisa_alokasi = $alokasi - $target - $item->q_dana->sum('real_dana');
        @endphp
        <tr>
            <td>{{$no++}}</td>
            <td>({{$item->kode_paket}}) - {{$item->nama_paket}}</td>
            <td>{{number_format($alokasi)}}</td>
            <td>{{number_format($realisasi)}}</td>
            <td>{{number_format($item->getLastDipa['dipa'])}}</td>
            @if($item->paketAwp->count() > 0)
                @for ($i=1; $i < 13; $i++)
                    @if ($item->q_b($item->id,$i))
                    <td>
                        {{number_format($item->q_b($item->id,$i)->real_dana)}}
                    </td>
                    @else
                    <td>0</td>
                    @endif
                @endfor
            @else
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
            @endif
            <td>{{number_format($sisa_alokasi)}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@else
<div class="text-center px-4 mb-3">
    <img class="mw-100 mh-300px" alt="" src="{{asset('keenthemes/media/illustrations/sketchy-1/2.png')}}">
</div>
@endif