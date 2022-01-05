<div class="card mb-5 mb-xl-10">
    <div class="card-header border-0 pt-5">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bolder fs-3 mb-1">Pelaksanaan</span>
            <span class="text-muted mt-1 fw-bold fs-7">
                @if($data->id)
                Perbarui
                @else
                Tambah
                @endif
                Paket Kegiatan : {{$kegiatan->judul}} <br> {{$kegiatan->no_loan}} | {{$kegiatan->kode_register}}
            </span>
        </h3>
        <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" title="Klik untuk kembali">
            <a href="javascript:;" onclick="load_list(1);" class="btn btn-sm btn-light btn-active-primary">
                <span class="svg-icon svg-icon-3">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect x="0" y="0" width="24" height="24"/>
                            <path d="M8.42034438,20 L21,20 C22.1045695,20 23,19.1045695 23,18 L23,6 C23,4.8954305 22.1045695,4 21,4 L8.42034438,4 C8.15668432,4 7.90369297,4.10412727 7.71642146,4.28972363 L0.653241109,11.2897236 C0.260966303,11.6784895 0.25812177,12.3116481 0.646887666,12.7039229 C0.648995955,12.7060502 0.651113791,12.7081681 0.653241109,12.7102764 L7.71642146,19.7102764 C7.90369297,19.8958727 8.15668432,20 8.42034438,20 Z" fill="#000000" opacity="0.3"/>
                            <path d="M12.5857864,12 L11.1715729,10.5857864 C10.7810486,10.1952621 10.7810486,9.56209717 11.1715729,9.17157288 C11.5620972,8.78104858 12.1952621,8.78104858 12.5857864,9.17157288 L14,10.5857864 L15.4142136,9.17157288 C15.8047379,8.78104858 16.4379028,8.78104858 16.8284271,9.17157288 C17.2189514,9.56209717 17.2189514,10.1952621 16.8284271,10.5857864 L15.4142136,12 L16.8284271,13.4142136 C17.2189514,13.8047379 17.2189514,14.4379028 16.8284271,14.8284271 C16.4379028,15.2189514 15.8047379,15.2189514 15.4142136,14.8284271 L14,13.4142136 L12.5857864,14.8284271 C12.1952621,15.2189514 11.5620972,15.2189514 11.1715729,14.8284271 C10.7810486,14.4379028 10.7810486,13.8047379 11.1715729,13.4142136 L12.5857864,12 Z" fill="#000000"/>
                        </g>
                    </svg>
                </span>
                Kembali
            </a>
        </div>
    </div>
    <div class="card-header card-header-stretch">
        <div class="card-toolbar">
            <ul class="nav nav-tabs nav-line-tabs nav-stretch fs-6 border-0">
                <li class="nav-item">
                    <a class="nav-link active" data-bs-toggle="tab" href="#tab_ik">1. Informasi Kegiatan</a>
                </li>
                @if($data->id)
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#tab_ea">2. EA</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#tab_ia">3. IA</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#tab_dmu">4. DMU</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#tab_kpi">5. KPI</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#tab_arsip">6. Arsip</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#tab_pagu">7. DIPA (PAGU)</a>
                </li>
                @endif
            </ul>
        </div>
    </div>
    <div class="card-body py-3">
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="tab_ik" role="tabpanel">
                <form id="form_input">
                    <div class="row">
                        <div class="col-lg-4">
                            <label class="required fs-6 fw-bold mb-2">Jenis Paket</label>
                            <select class="form-control" name="jenis_paket" id="jenis_paket">
                                <option value="" selected disabled>Pilih Jenis Paket</option>
                                <option value="1" {{$data->jenis_paket == 1 ? 'selected' : '' }}>Kontraktual</option>
                                <option value="2" {{$data->jenis_paket == 2 ? 'selected' : '' }}>Swakelola</option>
                                <option value="3" {{$data->jenis_paket == 3 ? 'selected' : '' }}>Administrasi Umum</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="min-w-150px mt-10 text-end">
                            @if ($data->id)
                            <button id="tombol_simpan" onclick="handle_save('#tombol_simpan','#form_input','{{route('phln.paket.update',$data->id)}}','PATCH');" class="btn btn-sm btn-primary">Simpan</button>
                            @else
                            <button id="tombol_simpan" onclick="handle_save('#tombol_simpan','#form_input','{{route('phln.paket.store')}}','POST');" class="btn btn-sm btn-primary">Simpan</button>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
</script>