@if ($collection->count() > 0)
<table class="table table-row-dashed table-striped table-row-gray-300 align-middle gs-0 gy-4">
    <thead>
        <tr class="fw-bolder text-muted">
            <th class="min-w-30px">NO</th>
            <th class="min-w-150px">NAMA KEGIATAN | NO LOAN | NO REGISTER</th>
            <th class="min-w-100px">DONOR</th>
            <th class="min-w-150px">TANGGAL</th>
            <th class="min-w-70px">MATA UANG</th>
            <th class="min-w-70px">NILAI VALAS</th>
            <th class="min-w-70px">NILAI RUPIAH (Rp. RIBU)</th>
            <th class="min-w-70px">ETR</th>
            <th class="min-w-70px">DR</th>
            <th class="min-w-70px">PV</th>
            <th class="min-w-100px">STATUS</th>
            <th class="min-w-100px text-end">AKSI</th>
        </tr>
    </thead>
    <tbody>
        @php
        $no = 1;
        @endphp
        @foreach ($collection as $item)
        <tr>
            <td>
                <span class="fw-bold d-block fs-7">{{$no++}}</span>
            </td>
            <td>
                <div class="d-flex align-items-center">
                    {{-- <div class="symbol symbol-45px me-5">
                        <img src="assets/media/avatars/150-11.jpg" alt="" />
                    </div> --}}
                    <div class="d-flex justify-content-start flex-column">
                        {{-- <a href="#" class="text-dark fw-bolder text-hover-primary fs-6">Ana Simmons</a> --}}
                        <span class="fw-bold d-block fs-7">{{$item->judul}} <br> {{$item->no_loan}} | {{$item->kode_register}}</span>
                    </div>
                </div>
            </td>
            <td>
                {{-- <a href="#" class="text-dark fw-bolder text-hover-primary d-block fs-6">Intertico</a> --}}
                <span class="fw-bold d-block fs-7">{{$item->donor->nama}} | {{$item->donor->singkatan}}</span>
            </td>
            <td>
                <span class="fw-bold d-block fs-7">
                    Efektif :{{$item->tanggal_efektif->format('j M Y')}} <br>
                    Closing :{{$item->tanggal_closing->format('j M Y')}} <br>
                </span>
            </td>
            <td>
                <span class="fw-bold d-block fs-7">
                    {{$item->mata_uang->kode}}
                    @if($item->mata_uang_2_id)
                    <br>
                    {{$item->mata_uang_2->kode}}
                    @endif
                </span>
            </td>
            <td>
                <span class="fw-bold d-block fs-7">
                    {{number_format($item->nilai,2,',','.')}}
                    @if($item->nilai_2)
                    {{number_format($item->nilai_2,2,',','.')}}
                    @endif
                </span>
            </td>
            <td>
                <span class="fw-bold d-block fs-7">
                    {{number_format($item->nilai_konversi / 1000,2,',','.')}}
                </span>
            </td>
            <td>
                <span class="fw-bold d-block fs-7">
                    {{$item->etr ? number_format($item->etr,2,',','.') : 0}} %
                </span>
            </td>
            <td>
                <span class="fw-bold d-block fs-7">
                    {{$item->dr ? number_format($item->dr,2,',','.') : 0}} %
                </span>
            </td>
            <td>
                <span class="fw-bold d-block fs-7">
                    {{$item->pv ? number_format($item->pv,2,',','.') : 0}} %
                </span>
            </td>
            <td>
                <span class="fw-bold d-block fs-7">
                    {{$item->st}}
                </span>
            </td>
            {{-- <td class="text-end">
                <div class="d-flex flex-column w-100 me-2">
                    <div class="d-flex flex-stack mb-2">
                        <span class="text-muted me-2 fs-7 fw-bold">50%</span>
                    </div>
                    <div class="progress h-6px w-100">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </td> --}}
            <td>
                <div class="d-flex justify-content-end flex-shrink-0">
                    <a href="{{route('phln.kegiatan.paket',$item->id)}}" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" title="Klik untuk lihat paket">
                        <span class="svg-icon svg-icon-3">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <polygon points="0 0 24 0 24 24 0 24"/>
                                    <path d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z" fill="#000000" fill-rule="nonzero"/>
                                    <path d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z" fill="#000000" opacity="0.3"/>
                                </g>
                            </svg>
                        </span>
                    </a>
                    <a href="javascript:;" onclick="load_input('{{route('phln.kegiatan.edit',$item->id)}}');" class="btn btn-icon btn-bg-light btn-active-color-warning btn-sm me-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" title="Klik untuk perbarui pinjaman">
                        <span class="svg-icon svg-icon-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="black" />
                                <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="black" />
                            </svg>
                        </span>
                    </a>
                    <a href="javascript:;" onclick="handle_confirm('Konfirmasi hapus data','Ya','Tidak','DELETE','{{route('phln.kegiatan.destroy',$item->id)}}');" class="btn btn-icon btn-bg-light btn-active-color-danger btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" title="Klik untuk hapus pinjaman">
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