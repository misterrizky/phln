@php
$role = Auth::guard('office')->user()->role;
@endphp
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
            <a href="javascript:;" onclick="main_content('content_list');3" class="btn btn-sm btn-light btn-active-primary">
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
                    <a class="nav-link active" data-bs-toggle="tab" href="#tab_ik" data-href="tab_ik">1. Informasi Paket</a>
                </li>
                @if($data->id)
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#tab_foto" data-href="tab_foto">2. Foto</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#tab_alokasi" data-href="tab_alokasi">3. Alokasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#tab_dipa" data-href="tab_dipa">4. DIPA PAGU</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#tab_awp" data-href="tab_awp">5. AWP</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#tab_realisasi" data-href="tab_realisasi">6. Realisasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#tab_masalah" data-href="tab_masalah">7. Masalah</a>
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
                        <div class="col-lg-4">
                            <label class="required fs-6 fw-bold mb-2">Provinsi</label>
                            <input type="hidden" name="kegiatan_id" value="{{$kegiatan->id}}" id="kegiatan_id">
                            <label>Pilih Provinsi :</label>
                            <select class="form-control" name="prov_id" id="prov_id">
                                <option value="">Pilih Provinsi</option>
                                    @if ($role == 5)
                                    <option value="{{Auth::guard('office')->user()->province->id_prov}}" {{Auth::guard('office')->user()->province->id_prov==$data->prov_id ? 'selected':''}}>{{Auth::guard('office')->user()->province->nm_prov}}</option>
                                    @else
                                        @foreach($provinsi as $prov)
                                            <option value="{{$prov->id_prov}}" {{$prov->id_prov==$data->prov_id ? 'selected':''}}>{{$prov->nm_prov}}</option>
                                        @endforeach
                                    @endif
                            </select>
                        </div>
                        <div class="col-lg-4">
                            <label class="required fs-6 fw-bold mb-2">Kota/Kabupaten</label>
                            <select class="form-control" name="kab_id" id="kab_id"></select>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-lg-6">
                            <label class="required fs-6 fw-bold mb-2">Nama Paket</label>
                            <input type="text" value="{{$data->nama_paket}}" name="nama_paket" id="nama_paket" class="form-control" placeholder="Masukan Nama Paket"/>
                        </div>
                        <div class="col-lg-6">
                            <label class="required fs-6 fw-bold mb-2">Kode Paket (Sesuai data EMON)</label>
                            <input type="text" value="{{$data->kode_paket}}" name="kode_paket" id="kode_paket" class="form-control" placeholder="Masukan Kode Paket">
                        </div>
                    </div>
                    <div id="kontraktual">
                        <div class="row mt-5">
                            <div class="col-lg-6">
                                <label class="required fs-6 fw-bold mb-2">Status Tender</label>
                                <select class="form-control" style="width:100%;" name="st_tender" id="st_tender">
                                    <option value="" selected disabled>Pilih Status Tender</option>
                                    <option value="0" {{$data->st_tender == 0 ?'selected':''}}>Belum</option>
                                    <option value="1" {{$data->st_tender == 1 ?'selected':''}}>Proses</option>
                                    <option value="2" {{$data->st_tender == 2 ?'selected':''}}>Kontrak</option>
                                </select>
                            </div>
                            <div class="col-lg-6">
                                <label class="required fs-6 fw-bold mb-2">Penyedia Jasa</label>
                                <input type="text" value="{{$data->penyedia_jasa}}" name="penyedia_jasa" id="penyedia_jasa" class="form-control" placeholder="Masukkan Penyedia Jasa"/>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-lg-6">
                                <label class="required fs-6 fw-bold mb-2">Tanggal Mulai Tender <span class="label_tanggal">(Rencana)</span></label>
                                <input type="text" value="{{$data->tanggal_mtender ? $data->tanggal_mtender->format('Y-m-d') : ''}}" name="tanggal_mtender" id="tanggal_mtender" class="form-control" placeholder="Masukkan Tanggal Kontrak" readonly/>
                            </div>
                            <div class="col-lg-6">
                                <label class="required fs-6 fw-bold mb-2">Tanggal Berakhir Tender <span class="label_tanggal">(Rencana)</span></label>
                                <input type="text" value="{{$data->tanggal_stender ? $data->tanggal_stender->format('Y-m-d') : ''}}" name="tanggal_stender" id="tanggal_stender" class="form-control" placeholder="Masukkan Tanggal Kontrak" readonly/>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-lg-6">
                                <label class="required fs-6 fw-bold mb-2">Tanggal Mulai Kontrak <span class="label_tanggal">(Rencana)</span></label>
                                <input type="text" value="{{$data->tanggal_mkontrak ? $data->tanggal_mkontrak->format('Y-m-d') : ''}}" name="tanggal_mkontrak" id="tanggal_mkontrak" class="form-control" placeholder="Masukkan Tanggal Kontrak" readonly/>
                            </div>
                            <div class="col-lg-6">
                                <label class="required fs-6 fw-bold mb-2">Tanggal Berakhir kontrak <span class="label_tanggal">(Rencana)</span></label>
                                <input type="text" value="{{$data->tanggal_skontrak ? $data->tanggal_skontrak->format('Y-m-d') : ''}}" name="tanggal_skontrak" id="tanggal_skontrak" class="form-control" placeholder="Masukkan Tanggal Kontrak"/>
                            </div>
                        </div>
                        <div class="separator separator-dotted separator-content border-dark my-15"><span class="h4">Kontrak</span></div>
                        <div class="row mt-5">
                            <div class="col-lg-4">
                                <label class="required fs-6 fw-bold mb-2">Mata Uang</label>
                                <select class="form-control" name="mata_uang_nilai_kontrak" id="mata_uang_nilai_kontrak">
                                    <option value="">Pilih Mata Uang</option>
                                        @foreach($matauang as $mu)
                                            <option value="{{$mu->id}}" {{$mu->id== $data->mata_uang_nilai_kontrak ? 'selected':''}}>{{$mu->kode}} | {{$mu->nama}}</option>
                                        @endforeach
                                </select>
                            </div>
                            <div class="col-lg-4">
                                <label class="required fs-6 fw-bold mb-2">Valas</label>
                                <input type="text" value="{{number_format($data->nilai_kontrak_valas,2)}}" name="nilai_kontrak_valas" id="nilai_kontrak_valas" class="form-control" placeholder="Masukan Valas"/>
                            </div>
                            <div class="col-lg-4">
                                <label class="required fs-6 fw-bold mb-2">Rupiah</label>
                                <input type="text" value="{{number_format($data->nilai_kontrak_rupiah,2)}}" name="nilai_kontrak_rupiah" id="nilai_kontrak_rupiah" class="form-control" placeholder="Masukan Rupiah"/>
                            </div>
                        </div>
                        @if($data->id)
                        <div class="separator separator-dotted separator-content border-dark my-15"><span class="h4">Alokasi</span></div>
                        <div class="row mt-5">
                            <div class="col-lg-4">
                                <label class="required fs-6 fw-bold mb-2">Mata Uang</label>
                                <input type="text" value="{{$data->mata_uang_alokasi ? $data->matauang_alokasi->kode : ''}}" class="form-control" readonly/>
                            </div>
                            <div class="col-lg-4">
                                <label class="required fs-6 fw-bold mb-2">Valas</label>
                                <input type="text" value="{{number_format($data->alokasi_valas,2)}}" name="alokasi_valas" class="form-control" placeholder="Masukan Valas" readonly/>
                            </div>
                            <div class="col-lg-4">
                                <label class="required fs-6 fw-bold mb-2">Rupiah</label>
                                <input type="text" value="{{number_format($data->alokasi_rupiah,2)}}" name="alokasi_rupiah" class="form-control" placeholder="Masukan Rupiah" readonly/>
                            </div>
                        </div>
                        <div class="separator separator-dotted separator-content border-dark my-15"><span class="h4">DIPA ({{date('Y')}})</span></div>
                        <div class="row mt-5">
                            <div class="col-lg-6">
                                <label class="required fs-6 fw-bold mb-2">DIPA</label>
                                <input type="text" value="{{number_format($data->getLastDipa['dipa'],2)}}" class="form-control" placeholder="Masukan Valas" readonly/>
                            </div>
                            <div class="col-lg-6">
                                <label class="required fs-6 fw-bold mb-2">Prognosis</label>
                                <input type="text" value="{{number_format($data->getLastDipa['prognosis'],2)}}" class="form-control" placeholder="Masukan Rupiah" readonly/>
                            </div>
                        </div>
                        @endif
                    </div>
                    <div class="row mt-5">
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
            @if($data->id)
                <div class="tab-pane fade" id="tab_foto" role="tabpanel">
                    <form id="form_input_foto">
                        <div class="row">
                            <div class="col-lg-6">
                                <label class="required fs-6 fw-bold mb-2">Tanggal</label>
                                <input type="text" name="tanggal" id="tanggal_foto" class="form-control" placeholder="Masukkan Tanggal"/>
                            </div>
                            <div class="col-lg-6">
                                <label class="required fs-6 fw-bold mb-2">Foto</label>
                                <input type="hidden" id="id_dipa" name="id" class="form-control" placeholder="Masukkan"/>
                                <input value="{{$data->id}}" type="hidden" name="paket_id" class="form-control" placeholder="Masukkan Kode Register"/>
                                <input type="file" name="foto" class="form-control" placeholder="Masukkan Foto"/>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-lg-6">
                                <label class="required fs-6 fw-bold mb-2">Latitude</label>
                                <input type="text" name="latitude" id="latitude_foto" class="form-control" placeholder="Masukkan Latitude"/>
                            </div>
                            <div class="col-lg-6">
                                <label class="required fs-6 fw-bold mb-2">Longitude</label>
                                <input type="text" name="longitude" id="longitude_foto" class="form-control" placeholder="Masukkan Longitude"/>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-lg-12">
                                <label class="required fs-6 fw-bold mb-2">Keterangan</label>
                                <textarea class="form-control" name="keterangan" id="keterangan_foto"></textarea>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="min-w-150px mt-10 text-end">
                                <button id="tombol_simpan_foto" onclick="handle_upload('#tombol_simpan_foto','#form_input_foto','{{route('phln.paket-foto.store')}}','POST','tab_foto');" class="btn btn-sm btn-primary">Simpan</button>
                            </div>
                        </div>
                    </form>
                    <div class="row">
                        <table class="table table-row-dashed table-striped table-row-gray-300 align-middle gs-0 gy-4">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Tanggal</th>
                                    <th>Latitude</th>
                                    <th>Longitude</th>
                                    <th>Keterangan</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $no = 1;
                                @endphp
                                @foreach ($data->paketFoto as $item)
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <a href="{{$item->image}}" target="_blank" class="symbol symbol-45px me-5">
                                                <img src="{{$item->image}}" alt="" />
                                            </a>
                                            <div class="d-flex justify-content-start flex-column">
                                                <span class="fw-bold d-block fs-7">{{$item->tanggal ? $item->tanggal->isoFormat('D MMMM Y') : ''}}</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>{{$item->lat}}</td>
                                    <td>{{$item->lng}}</td>
                                    <td>{{$item->keterangan}}</td>
                                    <td>
                                        <a href="javascript:;" onclick="handle_confirm('Konfirmasi hapus data','Ya','Tidak','DELETE','{{route('phln.paket-foto.destroy',$item->id)}}');" class="btn btn-icon btn-bg-light btn-active-color-danger btn-sm">
                                            <span class="svg-icon svg-icon-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="black" />
                                                    <path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="black" />
                                                    <path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="black" />
                                                </svg>
                                            </span>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab_alokasi" role="tabpanel">
                    <form id="form_input_alokasi">
                        <input type="hidden" id="id_alokasi" name="id" class="form-control" placeholder="Masukkan"/>
                        <input value="{{$data->id}}" type="hidden" name="paket_id" class="form-control" placeholder="Masukkan Kode Register"/>
                        <div class="row">
                            <div class="col-lg-4">
                                <label class="required fs-6 fw-bold mb-2">Mata Uang</label>
                                <select class="form-control" name="mata_uang_alokasi" id="mata_uang_alokasi">
                                    <option value="">Pilih Mata Uang</option>
                                        @foreach($matauang as $mu)
                                            <option value="{{$mu->id}}" {{$mu->id== $data->mata_uang_alokasi ? 'selected':''}}>{{$mu->kode}} | {{$mu->nama}}</option>
                                        @endforeach
                                </select>
                            </div>
                            <div class="col-lg-4">
                                <label class="required fs-6 fw-bold mb-2">Valas</label>
                                <input type="text" name="alokasi_valas" id="alokasi_valas" class="form-control" placeholder="Masukan Valas"/>
                            </div>
                            <div class="col-lg-4">
                                <label class="required fs-6 fw-bold mb-2">Rupiah</label>
                                <input type="text" name="alokasi_rupiah" id="alokasi_rupiah" class="form-control" placeholder="Masukan Rupiah"/>
                            </div>
                            <div class="col-lg-6 mt-5">
                                <label class="required fs-6 fw-bold mb-2">Tanggal Revisi</label>
                                <input type="text" name="tanggal_revisi" id="tanggal_alokasi" class="form-control" placeholder="Masukkan Tanggal Revisi"/>
                            </div>
                            <div class="col-lg-6 mt-5">
                                <label class="required fs-6 fw-bold mb-2">Keterangan</label>
                                <textarea class="form-control" name="keterangan" id="keterangan_alokasi"></textarea>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="min-w-150px mt-10 text-end">
                                <button id="tombol_simpan_alokasi" onclick="handle_save('#tombol_simpan_alokasi','#form_input_alokasi','{{route('phln.paket-alokasi.store')}}','POST','tab_alokasi');" class="btn btn-sm btn-primary">Simpan</button>
                            </div>
                        </div>
                    </form>
                    <div class="row">
                        <table class="table table-row-dashed table-striped table-row-gray-300 align-middle gs-0 gy-4">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Mata Uang</th>
                                    <th>Valas</th>
                                    <th>Rupiah</th>
                                    <th>Tanggal Revisi</th>
                                    <th>Keterangan</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $no = 1;
                                @endphp
                                @foreach ($data->paketAlokasi as $item)
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="d-flex justify-content-start flex-column">
                                                <span class="fw-bold d-block fs-7">
                                                    @if($item->mata_uang_alokasi)
                                                    {{$item->matauang_alokasi->kode}}
                                                    @endif
                                                </span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="d-flex justify-content-start flex-column">
                                                <span class="fw-bold d-block fs-7">{{number_format($item->alokasi_valas,2,',','.')}}</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="d-flex justify-content-start flex-column">
                                                <span class="fw-bold d-block fs-7">{{number_format($item->alokasi_rupiah,2,',','.')}}</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>{{$item->tanggal_revisi ? $item->tanggal_revisi->isoFormat('D MMMM Y') : ''}}</td>
                                    <td>{{$item->keterangan}}</td>
                                    <td>
                                        <a href="javascript:;" onclick="load_edit_alokasi('{{$item->id}}','{{$item->mata_uang_alokasi}}','{{number_format($item->alokasi_valas,2)}}','{{number_format($item->alokasi_rupiah,2)}}','{{$item->tanggal_revisi->format('Y-m-d')}}','{{$item->keterangan}}');" class="btn btn-icon btn-bg-light btn-active-color-warning btn-sm">
                                            <span class="svg-icon svg-icon-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="black" />
                                                    <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="black" />
                                                </svg>
                                            </span>
                                        </a>
                                        <a href="javascript:;" onclick="handle_confirm('Konfirmasi hapus data','Ya','Tidak','DELETE','{{route('phln.paket-alokasi.destroy',$item->id)}}');" class="btn btn-icon btn-bg-light btn-active-color-danger btn-sm">
                                            <span class="svg-icon svg-icon-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="black" />
                                                    <path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="black" />
                                                    <path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="black" />
                                                </svg>
                                            </span>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <form id="content_filter_input">
                    <div class="form-group row">
                        <div class="col-lg-4">
                            <input type="hidden" name="filter_tahun">
                        </div>
                    </div>
                </form>
                <div class="tab-pane fade" id="tab_dipa" role="tabpanel">
                    <form id="form_input_dipa">
                        <div class="row">
                            <div class="col-lg-4">
                                <input type="hidden" id="id_dipa" name="id" class="form-control" placeholder="Masukkan"/>
                                <input value="{{$data->kegiatan_id}}" type="hidden" name="kegiatan_id" class="form-control" placeholder="Masukkan Kode Register"/>
                                <input value="{{$data->id}}" type="hidden" name="paket_id" class="form-control" placeholder="Masukkan Kode Register"/>
                                <label class="required fs-6 fw-bold mb-2">Tahun</label>
                                <div class="input-group mb-5">
                                    <input type="text" id="ta_dipa" name="ta" class="form-control" placeholder="Masukkan Tahun" readonly/>
                                    <span class="input-group-text" id="basic-addon1" onclick="load_input('{{route('phln.paket.edit',[$data->kegiatan_id,$data->id])}}','tab_dipa');">Filter</span>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <label class="required fs-6 fw-bold mb-2">DIPA</label>
                                <input type="text" name="dipa" id="dipa" class="form-control" placeholder="Masukkan DIPA"/>
                            </div>
                            <div class="col-lg-4">
                                <label class="required fs-6 fw-bold mb-2">Prognosis</label>
                                <input type="text" name="prognosis" id="prognosis_dipa" class="form-control" placeholder="Masukkan Prognosis"/>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-lg-6">
                                <label class="required fs-6 fw-bold mb-2">Tanggal Revisi</label>
                                <input type="text" name="tanggal_revisi" id="tanggal_dipa" class="form-control" placeholder="Masukkan Tanggal Revisi"/>
                            </div>
                            <div class="col-lg-6">
                                <label class="required fs-6 fw-bold mb-2">Keterangan</label>
                                <textarea class="form-control" name="keterangan" id="keterangan_dipa"></textarea>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="min-w-150px mt-10 text-end">
                                <button id="tombol_simpan_keterangan" onclick="handle_save('#tombol_simpan_keterangan','#form_input_dipa','{{route('phln.paket-dipa.store')}}','POST','tab_dipa');" class="btn btn-sm btn-primary">Simpan</button>
                            </div>
                        </div>
                    </form>
                    <div class="row">
                        <table class="table table-row-dashed table-striped table-row-gray-300 align-middle gs-0 gy-4">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Tahun</th>
                                    <th>DIPA</th>
                                    <th>Prognosis</th>
                                    <th>Tanggal Revisi</th>
                                    <th>Keterangan</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $no = 1;
                                @endphp
                                @foreach ($paket_dipa as $item)
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{$item->tahun}}</td>
                                    <td>{{number_format($item->dipa,2,',','.')}}</td>
                                    <td>{{number_format($item->prognosis,2,',','.')}}</td>
                                    <td>{{$item->tanggal_revisi ? $item->tanggal_revisi->isoFormat('D MMMM Y') : ''}}</td>
                                    <td>{{$item->keterangan}}</td>
                                    <td>
                                        <a href="javascript:;" onclick="load_edit_dipa('{{$item->id}}','{{$item->tahun}}','{{number_format($item->dipa)}}','{{number_format($item->prognosis)}}','{{$item->tanggal_revisi}}','{{$item->keterangan}}');" class="btn btn-icon btn-bg-light btn-active-color-warning btn-sm">
                                            <span class="svg-icon svg-icon-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="black" />
                                                    <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="black" />
                                                </svg>
                                            </span>
                                        </a>
                                        <a href="javascript:;" onclick="handle_confirm('Konfirmasi hapus data','Ya','Tidak','DELETE','{{route('phln.paket-dipa.destroy',$item->id)}}');" class="btn btn-icon btn-bg-light btn-active-color-danger btn-sm">
                                            <span class="svg-icon svg-icon-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="black" />
                                                    <path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="black" />
                                                    <path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="black" />
                                                </svg>
                                            </span>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab_awp" role="tabpanel">
                    <form id="form_input_awp">
                        <div class="row">
                            <div class="col-lg-6">
                                <input value="{{$data->kegiatan_id}}" type="hidden" id="kegiatan_id" name="kegiatan_id" class="form-control" placeholder="Masukkan Kode Register"/>
                                <input value="{{$data->id}}" type="hidden" id="paket_id" name="paket_id" class="form-control" placeholder="Masukkan Kode Register"/>
                                <label class="required fs-6 fw-bold mb-2">Tahun</label>
                                <div class="input-group mb-5">
                                    <input type="text" id="ta_awp" name="ta" class="form-control" placeholder="Masukkan Tahun" readonly/>
                                    <span class="input-group-text" id="basic-addon1" onclick="load_input('{{route('phln.paket.edit',[$data->kegiatan_id,$data->id])}}','tab_awp');">Filter</span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <label class="required fs-6 fw-bold mb-2">Bulan</label>
                                <select class="form-control" id="bulan_awp" name="bulan">
                                    <option value="1">Januari</option>
                                    <option value="2">Februari</option>
                                    <option value="3">Maret</option>
                                    <option value="4">April</option>
                                    <option value="5">Mei</option>
                                    <option value="6">Juni</option>
                                    <option value="7">Juli</option>
                                    <option value="8">Agustus</option>
                                    <option value="9">September</option>
                                    <option value="10">Oktober</option>
                                    <option value="11">Nopember</option>
                                    <option value="12">Desember</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-lg-6">
                                <label class="required fs-6 fw-bold mb-2">Target Dana</label>
                                <input type="text" name="target_dana" id="target_dana" class="form-control" placeholder="Masukkan Target Dana"/>
                            </div>
                            <div class="col-lg-6">
                                <label class="required fs-6 fw-bold mb-2">Target Fisik (%)</label>
                                <input type="text" name="target_fisik" id="target_fisik" class="form-control" placeholder="Masukkan Target Fisik"/>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="min-w-150px mt-10 text-end">
                                <button id="tombol_simpan_awp" onclick="handle_save('#tombol_simpan_awp','#form_input_awp','{{route('phln.paket-awp.store')}}','POST','tab_awp');" class="btn btn-sm btn-primary">Simpan</button>
                            </div>
                        </div>
                    </form>
                    <div class="row">
                        <table class="table table-row-dashed table-striped table-row-gray-300 align-middle gs-0 gy-4">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Tahun Anggaran</th>
                                    <th>Bulan</th>
                                    <th>Target Dana</th>
                                    <th>Target Fisik</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $no = 1;
                                @endphp
                                @foreach ($paket_awp as $item)
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{$item->ta}}</td>
                                    <td>{{$item->bulan}}</td>
                                    <td>
                                        {{number_format($item->target_dana,2,',','.')}}
                                    </td>
                                    <td>
                                        {{number_format($item->target_fisik,2,',','.')}}
                                    </td>
                                    <td>
                                        <a href="javascript:;" onclick="load_edit_awp('{{$item->ta}}','{{$item->bulan}}','{{$item->target_dana}}','{{$item->target_fisik}}');" class="btn btn-icon btn-bg-light btn-active-color-warning btn-sm">
                                            <span class="svg-icon svg-icon-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="black" />
                                                    <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="black" />
                                                </svg>
                                            </span>
                                        </a>
                                        <a href="javascript:;" onclick="handle_confirm('Konfirmasi hapus data','Ya','Tidak','DELETE','{{route('phln.paket-awp.destroy',$item->id)}}');" class="btn btn-icon btn-bg-light btn-active-color-danger btn-sm">
                                            <span class="svg-icon svg-icon-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="black" />
                                                    <path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="black" />
                                                    <path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="black" />
                                                </svg>
                                            </span>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab_realisasi" role="tabpanel">
                    <form id="form_input_realisasi">
                        <div class="row">
                            <div class="col-lg-6">
                                <input value="{{$data->kegiatan_id}}" type="hidden" name="kegiatan_id" class="form-control" placeholder="Masukkan Kode Register"/>
                                <input value="{{$data->id}}" type="hidden" name="paket_id" class="form-control" placeholder="Masukkan Kode Register"/>
                                <label class="required fs-6 fw-bold mb-2">Tahun</label>
                                <div class="input-group mb-5">
                                    <input type="text" id="ta_realisasi" name="ta" class="form-control" placeholder="Masukkan Tahun" readonly/>
                                    <span class="input-group-text" id="basic-addon1" onclick="load_input('{{route('phln.paket.edit',[$data->kegiatan_id,$data->id])}}','tab_realisasi');">Filter</span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <label class="required fs-6 fw-bold mb-2">Bulan</label>
                                <select class="form-control" id="bulan_realisasi" name="bulan">
                                    <option value="1">Januari</option>
                                    <option value="2">Februari</option>
                                    <option value="3">Maret</option>
                                    <option value="4">April</option>
                                    <option value="5">Mei</option>
                                    <option value="6">Juni</option>
                                    <option value="7">Juli</option>
                                    <option value="8">Agustus</option>
                                    <option value="9">September</option>
                                    <option value="10">Oktober</option>
                                    <option value="11">Nopember</option>
                                    <option value="12">Desember</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-lg-6">
                                <label class="required fs-6 fw-bold mb-2">Real Dana</label>
                                <input type="text" name="real_dana" id="real_dana" class="form-control" placeholder="Masukkan Real Dana"/>
                            </div>
                            <div class="col-lg-6">
                                <label class="required fs-6 fw-bold mb-2">Real Fisik (%)</label>
                                <input type="text" name="real_fisik" id="real_fisik" class="form-control" placeholder="Masukkan Real Fisik"/>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="min-w-150px mt-10 text-end">
                                <button id="tombol_simpan_realisasi" onclick="handle_save('#tombol_simpan_realisasi','#form_input_realisasi','{{route('phln.paket-awp.update')}}','POST','tab_realisasi');" class="btn btn-sm btn-primary">Simpan</button>
                            </div>
                        </div>
                    </form>
                    <div class="row">
                        <table class="table table-row-dashed table-striped table-row-gray-300 align-middle gs-0 gy-4">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Tahun Anggaran</th>
                                    <th>Bulan</th>
                                    <th>Real Dana</th>
                                    <th>Real Fisik</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $no = 1;
                                @endphp
                                @foreach ($paket_awp_realisasi as $item)
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{$item->ta}}</td>
                                    <td>{{$item->bulan}}</td>
                                    <td>
                                        {{number_format($item->real_dana,2,',','.')}}
                                    </td>
                                    <td>
                                        {{number_format($item->real_fisik,2,',','.')}}
                                    </td>
                                    <td>
                                        <a href="javascript:;" onclick="load_edit_realisasi('{{$item->ta}}','{{$item->bulan}}','{{$item->real_dana}}','{{$item->real_fisik}}');" class="btn btn-icon btn-bg-light btn-active-color-warning btn-sm">
                                            <span class="svg-icon svg-icon-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="black" />
                                                    <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="black" />
                                                </svg>
                                            </span>
                                        </a>
                                        <a href="javascript:;" onclick="handle_confirm('Konfirmasi hapus data','Ya','Tidak','DELETE','{{route('phln.paket-awp.destroy',$item->id)}}');" class="btn btn-icon btn-bg-light btn-active-color-danger btn-sm">
                                            <span class="svg-icon svg-icon-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="black" />
                                                    <path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="black" />
                                                    <path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="black" />
                                                </svg>
                                            </span>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab_masalah" role="tabpanel">
                    <form id="form_input_masalah">
                        <div class="row">
                            <div class="col-lg-6">
                                <input value="{{$data->kegiatan_id}}" type="hidden" name="kegiatan_id" class="form-control" placeholder="Masukkan Kode Register"/>
                                <input value="{{$data->id}}" type="hidden" name="paket_id" class="form-control" placeholder="Masukkan Kode Register"/>
                                <label class="required fs-6 fw-bold mb-2">Tahun</label>
                                <div class="input-group mb-5">
                                    <input type="text" id="ta_masalah" name="ta" class="form-control" placeholder="Masukkan Tahun" readonly/>
                                    <span class="input-group-text" id="basic-addon1" onclick="load_input('{{route('phln.paket.edit',[$data->kegiatan_id,$data->id])}}','tab_masalah');">Filter</span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <label class="required fs-6 fw-bold mb-2">Bulan</label>
                                <select class="form-control" id="bulan_masalah" name="bulan">
                                    <option value="1">Januari</option>
                                    <option value="2">Februari</option>
                                    <option value="3">Maret</option>
                                    <option value="4">April</option>
                                    <option value="5">Mei</option>
                                    <option value="6">Juni</option>
                                    <option value="7">Juli</option>
                                    <option value="8">Agustus</option>
                                    <option value="9">September</option>
                                    <option value="10">Oktober</option>
                                    <option value="11">Nopember</option>
                                    <option value="12">Desember</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-lg-6">
                                <label class="required fs-6 fw-bold mb-2">Masalah</label>
                                <textarea class="form-control" name="masalah" id="masalah"></textarea>
                            </div>
                            <div class="col-lg-6">
                                <label class="required fs-6 fw-bold mb-2">Tindak Lanjut</label>
                                <textarea class="form-control" name="tindak_lanjut" id="tindak_lanjut"></textarea>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-lg-4">
                                <label class="required fs-6 fw-bold mb-2">Kategori</label>
                                <select class="form-control" name="kategori" id="kategori">
                                    <option value="">Pilih Kategori</option>
                                    @foreach ($kategori as $item)
                                    <option value="{{$item->id}}">{{$item->nama}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-lg-4">
                                <label class="required fs-6 fw-bold mb-2">Sub Kategori</label>
                                <select class="form-control" name="subkategori" id="subkategori">
                                    <option value="">Pilih Kategori terlebih dahulu</option>
                                </select>
                            </div>
                            <div class="col-lg-4">
                                <label class="required fs-6 fw-bold mb-2">Target Penyelesaian</label>
                                <input type="text" name="target_penyelesaian" id="target_penyelesaian" class="form-control" placeholder="Masukkan Target Penyelesaian"/>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="min-w-150px mt-10 text-end">
                                <button id="tombol_simpan_masalah" onclick="handle_save('#tombol_simpan_masalah','#form_input_masalah','{{route('phln.paket-awp.update_masalah')}}','POST','tab_masalah');" class="btn btn-sm btn-primary">Simpan</button>
                            </div>
                        </div>
                    </form>
                    <div class="row">
                        <table class="table table-row-dashed table-striped table-row-gray-300 align-middle gs-0 gy-4">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Tahun Anggaran</th>
                                    <th>Bulan</th>
                                    <th>Masalah</th>
                                    <th>Tindak Lanjut</th>
                                    <th>Kategori</th>
                                    <th>Sub Kategori</th>
                                    <th>Target Penyelesaian</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $no = 1;
                                @endphp
                                @foreach ($paket_awp_realisasi as $item)
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{$item->ta}}</td>
                                    <td>{{$item->bulan}}</td>
                                    <td>{{$item->masalah}}</td>
                                    <td>{{$item->tindak_lanjut}}</td>
                                    <td>
                                        @if ($item->category_id != 0)
                                        {{$item->kategori->nama}}
                                        @endif
                                    </td>
                                    <td>
                                        @if ($item->subcategory_id != 0)
                                        {{$item->subkategori->nama}}
                                        @endif
                                    </td>
                                    <td>
                                        {{$item->target_penyelesaian}}
                                    </td>
                                    <td>
                                        <a href="javascript:;" onclick="load_edit_masalah('{{$item->ta}}','{{$item->bulan}}','{{$item->masalah}}','{{$item->tindak_lanjut}}','{{$item->category_id}}','{{$item->target_penyelesaian}}','{{$item->subcategory_id}}');" class="btn btn-icon btn-bg-light btn-active-color-warning btn-sm">
                                            <span class="svg-icon svg-icon-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="black" />
                                                    <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="black" />
                                                </svg>
                                            </span>
                                        </a>
                                        <a href="javascript:;" onclick="handle_confirm('Konfirmasi hapus data','Ya','Tidak','DELETE','{{route('phln.paket-awp.destroy',$item->id)}}');" class="btn btn-icon btn-bg-light btn-active-color-danger btn-sm">
                                            <span class="svg-icon svg-icon-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="black" />
                                                    <path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="black" />
                                                    <path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="black" />
                                                </svg>
                                            </span>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>
<script>
    $('#kontraktual').hide();
    @if($data->st_tender < 2)
    $('.label_tanggal').show();
    @else
    $('.label_tanggal').hide();
    @endif
    @if($data->jenis_paket == 1)
    $('#kontraktual').show();
    @else
    $('#kontraktual').hide();
    @endif
    number_only('id_paket');
    number_only('alokasi_valas');
    number_only('alokasi_rupiah');
    input_uang('target_dana');
    input_uang('real_dana');
    decimal_only('target_fisik');
    decimal_only('real_fisik');
    ribuan('alokasi_valas');
    ribuan('alokasi_rupiah');
    ribuan('target_dana');
    ribuan('real_dana');
    number_only('nilai_kontrak_valas');
    number_only('nilai_kontrak_rupiah');
    ribuan('nilai_kontrak_valas');
    ribuan('nilai_kontrak_rupiah');
    input_uang('alokasi_valas');
    input_uang('alokasi_rupiah');
    input_uang('nilai_kontrak_valas');
    input_uang('nilai_kontrak_rupiah');
    select2('penarikan','Pilih Penarikan');
    datepicker('tanggal_mkontrak');
    datepicker('tanggal_skontrak');
    datepicker('tanggal_mtender');
    datepicker('tanggal_stender');
    // $("#tanggal_mkontrak").datepicker({
    //     todayHighlight: true,
    //     autoclose: true,
    //     format: 'dd-mm-yyyy',
    //     orientation: "bottom left",
    // }).on('changeDate', function (selected) {
    //     var startDate = new Date(selected.date.valueOf());
    //     $('#tanggal_skontrak').datepicker('setStartDate', startDate);
    // }).on('clearDate', function (selected) {
    //     $('#tanggal_skontrak').datepicker('setStartDate', null);
    // });
    // $("#tanggal_skontrak").datepicker({
    //     todayHighlight: true,
    //     autoclose: true,
    //     format: 'dd-mm-yyyy',
    //     orientation: "bottom left",
    // });
    // $("#tanggal_mtender").datepicker({
    //     todayHighlight: true,
    //     autoclose: true,
    //     format: 'dd-mm-yyyy',
    //     orientation: "bottom left",
    // }).on('changeDate', function (selected) {
    //     var startDate = new Date(selected.date.valueOf());
    //     $('#tanggal_stender').datepicker('setStartDate', startDate);
    // }).on('clearDate', function (selected) {
    //     $('#tanggal_stender').datepicker('setStartDate', null);
    // });
    // $("#tanggal_stender").datepicker({
    //     todayHighlight: true,
    //     autoclose: true,
    //     format: 'dd-mm-yyyy',
    //     orientation: "bottom left",
    // })
    year('tahun_pelaksanaan');
    year('ta_awp');
    year('ta_realisasi');
    year('ta_dipa');
    year('ta_masalah');
   
    select2('prov_id','Pilih Provinsi');
    select2('kab_id','Pilih Provinsi dulu');
    @if($data->prov_id)
    $('#prov_id').val('{{$data->prov_id}}');
    setTimeout(function(){ 
        $('#prov_id').trigger('change');
        setTimeout(function(){ 
            $('#kab_id').val('{{$data->kab_id}}');
            $('#kab_id').trigger('change');
        }, 1200);
    }, 500);
    @endif
    $("#prov_id").change(function(){
        $.ajax({
            type: "POST",
            url: "{{route('phln.get_city')}}",
            data: {id_prov : $("#prov_id").val()},
            success: function(response){
                $("#kab_id").html(response);
            }
        });
    });
    $("#kategori").change(function(){
        $.ajax({
            type: "POST",
            url: "{{route('phln.category.get_sub')}}",
            data: {category : $("#kategori").val()},
            success: function(response){
                $("#subkategori").html(response);
            }
        });
    });
    number_only('dipa');
    ribuan('dipa');
    input_uang('dipa');
    number_only('prognosis_dipa');
    ribuan('prognosis_dipa');
    input_uang('prognosis_dipa');
    input_uang('alokasi_paket');
    number_only('alokasi_paket');
    ribuan('alokasi_paket');
    datepicker_end('tanggal_foto');
    datepicker_end('tanggal_alokasi');
    datepicker_end('tanggal_dipa');
    function load_edit_alokasi(id,matauang,valas,rupiah,tanggal,keterangan){
        $("#id_alokasi").val(id);
        $("#mata_uang_alokasi").val(matauang);
        $("#alokasi_valas").val(valas);
        $("#alokasi_rupiah").val(rupiah);
        $("#tanggal_alokasi").val(tanggal);
        $("#keterangan_alokasi").val(keterangan);
    }
    function load_edit_dipa(id,tahun,dipa,prognosis,keterangan,tanggal){
        $("#id_dipa").val(id);
        $("#ta_dipa").val(tahun);
        $("#dipa").val(dipa);
        $("#prognosis_dipa").val(prognosis);
        $("#keterangan_dipa").val(keterangan);
        $("#tanggal_dipa").val(tanggal);
    }
    function load_edit_awp(ta,bulan,target_dana,target_fisik){
        $("#ta_awp").val(ta);
        $("#bulan_awp").val(bulan);
        $("#target_dana").val(format_ribuan(target_dana));
        $("#target_fisik").val(format_ribuan(target_fisik));
    }
    function load_edit_realisasi(ta,bulan,real_dana,real_fisik){
        $("#ta_realisasi").val(ta);
        $("#bulan_realisasi").val(bulan);
        $("#real_dana").val(format_ribuan(real_dana));
        $("#real_fisik").val(format_ribuan(real_fisik));
    }
    function load_edit_masalah(ta,bulan,masalah,tindak_lanjut,category,target_penyelesaian,subcategory){
        $("#ta_masalah").val(ta);
        $("#bulan_masalah").val(bulan);
        $("#masalah").html(masalah);
        $("#tindak_lanjut").html(tindak_lanjut);
        $("#target_penyelesaian").val(target_penyelesaian);
        $('#kategori').val(category);
        setTimeout(function(){ 
            $('#kategori').trigger('change');
            setTimeout(function(){ 
                $('#subkategori').val(subcategory);
                $('#subkategori').trigger('change');
            }, 1200);
        }, 500);
    }
    $('#st_tender').change(function(){
        if(this.value < 2){
            $('.label_tanggal').show();
        }else{
            $('.label_tanggal').hide();
        }
    });
    $('#jenis_paket').change(function(){
        if(this.value == 1){
            $('#kontraktual').show();
        }else{
            $('#kontraktual').hide();
        }
    });
    $('#ta_dipa').on('change', function() {
        $("input[name='filter_tahun']").val( this.value );
    });
    $('#ta_awp').on('change', function() {
        $("input[name='filter_tahun']").val( this.value );
    });
    $('#ta_realisasi').on('change', function() {
        $("input[name='filter_tahun']").val( this.value );
    });
    $('#ta_masalah').on('change', function() {
        $("input[name='filter_tahun']").val( this.value );
    });
</script>