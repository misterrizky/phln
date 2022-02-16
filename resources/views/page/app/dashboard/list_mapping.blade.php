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