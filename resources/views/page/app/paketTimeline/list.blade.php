@if ($collection->count() > 0)
<table class="table table-row-dashed table-striped table-row-gray-300 align-middle gs-0 gy-4">
    <thead>
        <tr class="fw-bolder text-muted">
            <th class="text-center" rowspan='2'>NO</th>
            <th class="text-center" rowspan='2'>KODE & NAMA PAKET</th>
            <th class="text-center" rowspan='2'>LOKASI</th>
            @php
            $tender = $tanggal->tanggal_mtender;
            $kontrak = $tanggal->tanggal_skontrak;
            $diff = $kontrak->diffInMonths($tender);
            $dify = $kontrak->diffInYears($tender);
            $mt = $tanggal->tanggal_mtender->format('m');
            $mk = $tanggal->tanggal_skontrak->format('m');
            $yt = $tanggal->tanggal_mtender->format('Y');
            $yk = $tanggal->tanggal_skontrak->format('Y');
            // $col = '';
            $lm = \Carbon\CarbonPeriod::create($tender, '1 month', $kontrak);

            // $a = 0;
            // $colspan = array();
            // foreach ($lm as $item){
            //     $data_kol =  $item->format('m');
                // $a++;
                // if($data_kol == '12'){
                //     $colspan[] = $a;
                //     $a = 0;
                // } 
            // }
            // $b= 0;
            for($i=$yt;$i<=$yk;$i++){
                echo "<th class='text-center' colspan='12'>".$i."</th>";
            }
            @endphp
        </tr>
        <tr>
            @foreach ($lm as $item)
                <th>{{Str::Upper($item->format('F'))}}</th>
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
            <td>({{$item->provinsi->nm_prov}}) - {{$item->kabupaten->nm_kab}}</td>
            @php
            // foreach ($lm as $items){
            //     $data_kol =  $items->format('m');
            //     $a++;
            //     if($data_kol == '12'){
            //         $colspan[] = $a;
            //         $a = 0;
            //     } 
            // }
            $col = ($yk - $yt + 1) * 12;
            $ttm = $item->tanggal_mtender->format('Y') - $yt;
            $tts = $item->tanggal_stender->format('Y') - $yt;
            $btm = 12 * $ttm + $item->tanggal_mtender->format('m');
            $bts = 12 * $tts + $item->tanggal_stender->format('m');
            for ($i=1; $i < $btm; $i++) { 
                echo "<th class='text-center'></th>";
            }
            for ($i=$btm; $i <= $bts; $i++) { 
                echo "<th class='text-center' style='background-color:skyblue;'></th>";
            }
            $tkm = $item->tanggal_mkontrak->format('Y') - $yt;
            $tks = $item->tanggal_skontrak->format('Y') - $yt;
            $bkm = 12 * $tkm + $item->tanggal_mkontrak->format('m') + 1;
            $bks = 12 * $tks + $item->tanggal_skontrak->format('m');
            for ($a=$bkm; $a <= $bks; $a++) { 
                echo "<th class='text-center' style='background-color:orange;'></th>";
            }
            @endphp
        </tr>
        @endforeach
    </tbody>
</table>
@else
<div class="text-center px-4 mb-3">
    <img class="mw-100 mh-300px" alt="" src="{{asset('keenthemes/media/illustrations/sketchy-1/2.png')}}">
</div>
@endif