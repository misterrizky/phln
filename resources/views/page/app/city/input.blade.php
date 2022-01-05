<div class="card mb-5 mb-xl-10">
    <div class="card-header border-0 pt-5">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bolder fs-3 mb-1">Master Satker</span>
            <span class="text-muted mt-1 fw-bold fs-7">Kota/Kabupaten</span>
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
    <div class="card-body py-3">
        <form id="form_input">
            <div class="row">
                <div class="col-lg-4">
                    <label class="required fs-6 fw-bold mb-2">Nama Provinsi</label>
                    <input name="id_prov" value="{{$province->id_prov}}" type="hidden">
                    <input value="{{$province->nm_prov}}" type="text" readonly class="form-control">
                </div>
                <div class="col-lg-4">
                    <label class="required fs-6 fw-bold mb-2">No Kota/Kabupaten</label>
                    <input type="text" class="form-control" name="no_kab" placeholder="Masukkan No Kota/Kabupaten..." value="{{$data->id_kab}}">
                </div>
                <div class="col-lg-4">
                    <label class="required fs-6 fw-bold mb-2">Nama Kota/Kabupaten</label>
                    <input type="text" class="form-control" name="nm_kab" placeholder="Masukkan nama Kota/Kabupaten..." value="{{$data->nm_kab}}">
                </div>
                <div class="min-w-150px mt-10 text-end">
                    @if ($data->id)
                    <button id="tombol_simpan" onclick="handle_save('#tombol_simpan','#form_input','{{route('phln.city.update',$data->id)}}','PATCH');" class="btn btn-sm btn-primary">Simpan</button>
                    @else
                    <button id="tombol_simpan" onclick="handle_save('#tombol_simpan','#form_input','{{route('phln.city.store')}}','POST');" class="btn btn-sm btn-primary">Simpan</button>
                    @endif
                </div>
            </div>
        </form>
    </div>
</div>