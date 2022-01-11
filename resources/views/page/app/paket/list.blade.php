@if ($collection->count() > 0)
<table class="table table-row-dashed table-striped table-row-gray-300 align-middle gs-0 gy-4">
    <thead>
        <tr class="fw-bolder text-muted">
            <th class="min-w-30px">NO</th>
            <th class="min-w-150px">LOKASI</th>
            <th class="min-w-100px">PAKET</th>
            <th class="min-w-150px">ALOKASI</th>
            <th class="min-w-150px">NILAI KONTRAK</th>
            <th class="min-w-150px">TANGGAL KONTRAK</th>
            <th class="min-w-150px">STATUS TENDER</th>
            <th class="min-w-150px">PENYEDIA JASA</th>
            <th class="min-w-150px">FISIK</th>
            <th class="min-w-150px">KEUANGAN</th>
            <th class="min-w-100px text-end">AKSI</th>
        </tr>
    </thead>
    <tbody>
        @php
        $no = 1;
        $status= "";
        @endphp
        @foreach ($collection as $item)
        @php
            $status = $item->st_tender;
            if($status == 0){
                $status = "Belum";
            }else if($status == 1){
                $status = "Proses";
            }else if($status == 2){
                $status =  "Kontrak";
            }
        @endphp
        <tr>
            <td>
                <span class="fw-bold d-block fs-7">{{$no++}}</span>
            </td>
            <td>
                <span class="fw-bold d-block fs-7">
                    @if($item->prov_id)
                    {{$item->provinsi->nm_prov}}, {{$item->kabupaten->nm_kab}}
                    @endif
                </span>
            </td>
            <td>
                <span class="fw-bold d-block fs-7">({{$item->kode_paket}}) - {{$item->nama_paket}}</span>
            </td>
            <td>
                <span class="fw-bold d-block fs-7">
                    @if($item->mata_uang_alokasi)
                    {{$item->matauang_alokasi->kode}}
                    <br>
                    @endif
                    {{number_format($item->alokasi_valas,2,',','.')}}
                    <br>
                    Rp. {{number_format($item->alokasi_rupiah,2,',','.')}}
                </span>
            </td>
            <td>
                <span class="fw-bold d-block fs-7">
                    @if($item->mata_uang_nilai_kontrak)
                    {{$item->matauang_kontrak->kode}}
                    <br>
                    @endif
                    {{number_format($item->nilai_kontrak_valas,2,',','.')}}
                    <br>
                    Rp. {{number_format($item->nilai_kontrak_rupiah,2,',','.')}}
                </span>
            </td>
            <td>
                <span class="fw-bold d-block fs-7">
                    Mulai :{{$item->tanggal_mkontrak->format('j M Y')}} <br>
                    Selesai :{{$item->tanggal_skontrak->format('j M Y')}} <br>
                </span>
            </td>
            <td>
                <span class="fw-bold d-block fs-7">{{$status}}</span>
            </td>
            <td>
                <span class="fw-bold d-block fs-7">{{$item->penyedia_jasa}}</span>
            </td>
            <td>
                <span class="fw-bold d-block fs-7">{{number_format($item->last_fisik['real_fisik'],2,',','.') ?:0 }} %</span>
            </td>
            <td>
                <span class="fw-bold d-block fs-7">{{number_format($item->last_keu(),2,',','.')}} %</span>
            </td>
            <td>
                <div class="d-flex justify-content-end flex-shrink-0">
                    <a href="javascript:;" onclick="load_input('{{route('phln.paket.edit',[$kegiatan->id,$item->id])}}');" class="btn btn-icon btn-bg-light btn-active-color-warning btn-sm me-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" title="Klik untuk perbarui pinjaman">
                        <span class="svg-icon svg-icon-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="black" />
                                <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="black" />
                            </svg>
                        </span>
                    </a>
                    <a href="javascript:;" onclick="handle_confirm('Konfirmasi hapus data','Ya','Tidak','DELETE','{{route('phln.paket.destroy',$item->id)}}');" class="btn btn-icon btn-bg-light btn-active-color-danger btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" title="Klik untuk hapus pinjaman">
                        <span class="svg-icon svg-icon-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="black" />
                                <path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="black" />
                                <path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="black" />
                            </svg>
                        </span>
                    </a>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{{$collection->links('theme.app.pagination')}}
@else
<div class="text-center px-4 mb-3">
    <img class="mw-100 mh-300px" alt="" src="{{asset('keenthemes/media/illustrations/sketchy-1/2.png')}}">
</div>
@endif