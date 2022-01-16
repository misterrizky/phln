<div class="card mb-5 mb-xl-10">
    <div class="card-header border-0 pt-5">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bolder fs-3 mb-1">Pelaksanaan</span>
            <span class="text-muted mt-1 fw-bold fs-7">Pinjaman</span>
        </h3>
        <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" title="Klik untuk kembali">
            <a href="javascript:;" onclick="main_content('content_list');" class="btn btn-sm btn-light btn-active-primary">
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
            <ul class="nav nav-tabs nav-line-tabs nav-stretch fs-6 border-0" id="tab_kegiatan">
                <li class="nav-item">
                    <a class="nav-link active" data-bs-toggle="tab" href="#tab_ik" data-href="tab_ik">1. Informasi Kegiatan</a>
                </li>
                @if($data->id)
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#tab_ea" data-href="tab_ea">2. EA</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#tab_ia" data-href="tab_ia">3. IA</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#tab_dmu" data-href="tab_dmu">4. DMU</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#tab_kpi" data-href="tab_kpi">5. KPI</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#tab_arsip" data-href="tab_arsip">6. Arsip</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#tab_pagu" data-href="tab_pagu">7. DIPA (PAGU)</a>
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
                            <label class="required fs-6 fw-bold mb-2">Kode Register</label>
                            <input type="text" class="form-control" name="kode_register" placeholder="Masukkan kode register..." value="{{$data->kode_register}}">
                        </div>
                        <div class="col-lg-4">
                            <label class="required fs-6 fw-bold mb-2">No Pinjaman</label>
                            <input type="text" class="form-control" name="no_loan" placeholder="Masukkan no pinjaman..." value="{{$data->no_loan}}">
                        </div>
                        <div class="col-lg-4">
                            <label class="required fs-6 fw-bold mb-2">Donor</label>
                            <select class="form-select" name="donor" id="donor">
                                <option value="" selected disabled>Harap Pilih Donor</option>
                                @foreach($donor as $item)
                                <option value="{{$item->id}}" {{$data->donor_id == $item->id ? 'selected' : ''}}>{{$item->singkatan}} | {{$item->nama}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-lg-6">
                            <label class="required fs-6 fw-bold mb-2">Mata Uang</label>
                            <select class="form-select" name="mata_uang" id="mata_uang">
                                <option value="" selected disabled>Harap Pilih Mata Uang</option>
                                @foreach($mata_uang as $item)
                                <option value="{{$item->id}}" {{$data->mata_uang_id == $item->id ? 'selected' : ''}}>{{$item->kode}} | {{$item->nama}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-lg-6">
                            <label class="required fs-6 fw-bold mb-2">Nilai</label>
                            <input type="text" class="form-control" id="nilai" name="nilai" placeholder="Masukkan nilai..." value="{{number_format($data->nilai,2,",",".")}}">
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-lg-6">
                            <label class="fs-6 fw-bold mb-2">Mata Uang</label>
                            <select class="form-select" name="mata_uang_2" id="mata_uang_2">
                                <option value="" selected disabled>Harap Pilih Mata Uang</option>
                                @foreach($mata_uang as $item)
                                <option value="{{$item->id}}" {{$data->mata_uang_2_id == $item->id ? 'selected' : ''}}>{{$item->kode}} | {{$item->nama}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-lg-6">
                            <label class="fs-6 fw-bold mb-2">Nilai</label>
                            <input type="text" class="form-control" id="nilai_2" name="nilai_2" placeholder="Masukkan nilai..." value="{{number_format($data->nilai_2,2,",",".")}}">
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-lg-6"></div>
                        <div class="col-lg-6">
                            <label class="required fs-6 fw-bold mb-2">Total Nilai (Rp)</label>
                            <input type="text" class="form-control" id="total_nilai" name="total_nilai" placeholder="Masukkan total nilai..." value="{{number_format($data->nilai_konversi,2,",",".")}}">
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-lg-12">
                            <label class="required fs-6 fw-bold mb-2">Judul Kegiatan</label>
                            <input type="text" class="form-control" name="judul" placeholder="Masukkan judul kegiatan..." value="{{$data->judul}}">
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-lg-6">
                            <label class="fs-6 fw-bold mb-2">Tujuan</label>
                            <div id="tujuan" style="height:100px;">{!!$data->tujuan!!}</div>
                            <textarea class="form-control d-none" name="tujuan">{!!$data->tujuan!!}</textarea>
                        </div>
                        <div class="col-lg-6">
                            <label class="fs-6 fw-bold mb-2">Sasaran</label>
                            <div id="sasaran" style="height:100px;">{!!$data->sasaran!!}</div>
                            <textarea class="form-control d-none" name="sasaran">{!!$data->sasaran!!}</textarea>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-lg-6">
                            <label class="fs-6 fw-bold mb-2">Komponen</label>
                            <div id="komponen" style="height:100px;">{!!$data->komponen!!}</div>
                            <textarea class="form-control d-none" name="komponen">{!!$data->komponen!!}</textarea>
                        </div>
                        <div class="col-lg-6">
                            <label class="fs-6 fw-bold mb-2">Lingkup Kegiatan</label>
                            <div id="lingkup_kegiatan" style="height:100px;">{!!$data->lingkup_kegiatan!!}</div>
                            <textarea class="form-control d-none" name="lingkup_kegiatan">{!!$data->lingkup_kegiatan!!}</textarea>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-lg-6">
                            <label class="required fs-6 fw-bold mb-2">Tanggal Efektif</label>
                            <input type="text" class="form-control" id="tanggal_efektif" name="tanggal_efektif" placeholder="Masukkan tanggal efektif..." value="{{$data->tanggal_efektif}}">
                        </div>
                        <div class="col-lg-6">
                            <label class="required fs-6 fw-bold mb-2">Tanggal Closing</label>
                            <input type="text" class="form-control" id="tanggal_closing" name="tanggal_closing" placeholder="Masukkan tanggal closing..." value="{{$data->tanggal_closing}}">
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-lg-6">
                            <label class="fs-6 fw-bold mb-2">Sektor</label>
                            <select class="form-select" name="sektor" id="sektor">
                                <option value="" selected disabled>Harap Pilih Sektor</option>
                                @foreach($sektor as $item)
                                <option value="{{$item->id}}" {{$data->sektor_id == $item->id ? 'selected' : ''}}>{{$item->nama}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-lg-6">
                            <label class="fs-6 fw-bold mb-2">Metode Pembayaran</label>
                            <select class="form-select" name="metode_pembayaran" id="metode_pembayaran">
                                <option value=""selected disabled>Pilih Metode Pembayaran</option>
                                <option value="1"  {{$data->metode_pembayaran == 1 ? 'selected' : '' }}>PP</option>
                                <option value="2"  {{$data->metode_pembayaran == 2 ? 'selected' : '' }}>PL</option>
                                <option value="3"  {{$data->metode_pembayaran == 3 ? 'selected' : '' }}>LC</option>
                                <option value="4"  {{$data->metode_pembayaran == 4 ? 'selected' : '' }}>RK</option>
                            </select>
                        </div>
                        <div class="min-w-150px mt-10 text-end">
                            @if ($data->id)
                            <button id="tombol_simpan" onclick="handle_save('#tombol_simpan','#form_input','{{route('phln.kegiatan.update',$data->id)}}','PATCH');" class="btn btn-sm btn-primary">Simpan</button>
                            @else
                            <button id="tombol_simpan" onclick="handle_save('#tombol_simpan','#form_input','{{route('phln.kegiatan.store')}}','POST');" class="btn btn-sm btn-primary">Simpan</button>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
            <div class="tab-pane fade" id="tab_ea" role="tabpanel">
                <form id="form_input_exec">
                    <div class="row">
                        <div class="col-lg-4">
                            <label class="required fs-6 fw-bold mb-2">Kementerian / Lembaga</label>
                            <input type="hidden" name="kegiatan_exec" value="{{$data->id}}">
                            <select name="exec_kl" id="exec_kl" class="form-control">
                                <option value="">Pilih Kementerian / Lembaga</option>
                                @foreach($department as $item)
                                    <option value="{{$item->kode}}">{{$item->nama}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-lg-4">
                            <label class="required fs-6 fw-bold mb-2">Unor</label>
                            <select name="exec_unor" id="exec_unor" class="form-control"></select>
                        </div>
                        <div class="col-lg-4">
                            <label class="fs-6 fw-bold mb-2">Satker</label>
                            <select name="exec_satker" id="exec_satker" class="form-control"></select>
                        </div>
                        <div class="min-w-150px mt-10 text-end">
                            <button id="tombol_simpan_exec" type="button" onclick="handle_save('#tombol_simpan_exec','#form_input_exec','{{route('phln.kegiatan.storeExec')}}','POST','tab_ea');" class="btn btn-primary mr-2">Tambah</button>
                        </div>
                    </div>
                </form>
                <div class="row mt-5">
                    <table class="table table-row-dashed table-striped table-row-gray-300 align-middle gs-0 gy-4">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kementerian / Lembaga</th>
                                <th>Unor</th>
                                <th>Satker</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $no = 1;
                            @endphp
                            @foreach ($data->exec as $item)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$item->kl->nama}}</td>
                                <td>{{$item->unor->nama}}</td>
                                <td>
                                    @if($item->satker_code)
                                    {{$item->satker->nama}}
                                    @endif
                                </td>
                                <td>
                                    <a href="javascript:;" onclick="handle_confirm('Konfirmasi hapus data','Ya','Tidak','DELETE','{{route('phln.kegiatan.destroyExec',$item->id)}}');" class="btn btn-icon btn-bg-light btn-active-color-danger btn-sm">
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
            <div class="tab-pane fade" id="tab_ia" role="tabpanel">
                <form id="form_input_imp">
                    <div class="row">
                        <div class="col-lg-4">
                            <label class="required fs-6 fw-bold mb-2">Kementerian / Lembaga</label>
                            <input type="hidden" name="kegiatan_imp" value="{{$data->id}}">
                            <select name="imp_kl" id="imp_kl" class="form-control">
                                <option value="">Pilih Kementerian / Lembaga</option>
                                @foreach($department as $item)
                                    <option value="{{$item->kode}}">{{$item->nama}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-lg-4">
                            <label class="required fs-6 fw-bold mb-2">Unor</label>
                            <select name="imp_unor" id="imp_unor" class="form-control"></select>
                        </div>
                        <div class="col-lg-4">
                            <label class="fs-6 fw-bold mb-2">Satker</label>
                            <select name="imp_satker" id="imp_satker" class="form-control"></select>
                        </div>
                        <div class="min-w-150px mt-10 text-end">
                            <button id="tombol_simpan_imp" type="button" onclick="handle_save('#tombol_simpan_imp','#form_input_imp','{{route('phln.kegiatan.storeImp')}}','POST','tab_ia');" class="btn btn-primary mr-2">Tambah</button>
                        </div>
                    </div>
                </form>
                <div class="row mt-5">
                    <table class="table table-row-dashed table-striped table-row-gray-300 align-middle gs-0 gy-4">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kementerian / Lembaga</th>
                                <th>Unor</th>
                                <th>Satker</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $no = 1;
                            @endphp
                            @foreach ($data->imp as $item)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$item->kl->nama}}</td>
                                <td>{{$item->unor->nama}}</td>
                                <td>
                                    @if($item->satker_code)
                                    {{$item->satker->nama}}
                                    @endif
                                </td>
                                <td>
                                    <a href="javascript:;" onclick="handle_confirm('Konfirmasi hapus data','Ya','Tidak','DELETE','{{route('phln.kegiatan.destroyImp',$item->id)}}');" class="btn btn-icon btn-bg-light btn-active-color-danger btn-sm">
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
            <div class="tab-pane fade" id="tab_dmu" role="tabpanel">
                <form id="form_input_mu">
                    <div class="row">
                        <div class="col-lg-4">
                            <label class="required fs-6 fw-bold mb-2">Nama</label>
                            <input type="hidden" id="id" name="id" class="form-control" placeholder="Masukkan Kode Register"/>
                            <input value="{{$data->kode_register}}" type="hidden" name="kd_register" class="form-control" placeholder="Masukkan Kode Register"/>
                            <input type="text" id="nama" name="nama" class="form-control" placeholder="Masukkan Nama"/>
                        </div>
                        <div class="col-lg-4">
                            <label class="required fs-6 fw-bold mb-2">Jabatan</label>
                            <input type="text" name="jabatan" id="jabatan" class="form-control" placeholder="Masukkan Jabatan"/>
                        </div>
                        <div class="col-lg-4">
                            <label class="fs-6 fw-bold mb-2">Alamat</label>
                            <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Masukkan Alamat"/>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-lg-3">
                            <label class="required fs-6 fw-bold mb-2">Telp</label>
                            <input type="text" id="telp" name="telp" class="form-control" placeholder="Masukkan Telp"/>
                        </div>
                        <div class="col-lg-3">
                            <label class="required fs-6 fw-bold mb-2">Fax</label>
                            <input type="text" name="fax" id="fax" class="form-control" placeholder="Masukkan Fax"/>
                        </div>
                        <div class="col-lg-3">
                            <label class="required fs-6 fw-bold mb-2">Email</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Masukkan Email"/>
                        </div>
                        <div class="col-lg-3">
                            <label class="required fs-6 fw-bold mb-2">Tipe</label>
                            <select class="form-control" id="tipe" name="tipe">
                                <option value="" SELECTED DISABLED>Pilih Tipe</option>
                                <option value="CPMU">CPMU</option>
                                <option value="PMU">PMU</option>
                                <option value="PIU">PIU</option>
                            </select>
                        </div>
                        <div class="min-w-150px mt-10 text-end">
                            <button id="tombol_simpan_mu" type="button" onclick="handle_save('#tombol_simpan_mu','#form_input_mu','{{route('phln.management-unit.store')}}','POST','tab_dmu');" class="btn btn-primary mr-2">Tambah</button>
                        </div>
                    </div>
                </form>
                <div class="row mt-5">
                    <table class="table table-row-dashed table-striped table-row-gray-300 align-middle gs-0 gy-4">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Jabatan</th>
                                <th>Alamat</th>
                                <th>Telp</th>
                                <th>Fax</th>
                                <th>Email</th>
                                <th>Tipe</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $no = 1;
                            @endphp
                            @foreach ($data->managementUnit as $item)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$item->nama}}</td>
                                <td>{{$item->jabatan}}</td>
                                <td>{{$item->alamat}}</td>
                                <td>{{$item->telp}}</td>
                                <td>{{$item->fax}}</td>
                                <td>{{$item->email}}</td>
                                <td>{{$item->type}}</td>
                                <td>
                                    <a href="javascript:;" onclick="load_edit('{{$item->id}}',
                                        '{{$item->nama}}',
                                        '{{$item->jabatan}}',
                                        '{{$item->alamat}}',
                                        '{{$item->telp}}',
                                        '{{$item->fax}}',
                                        '{{$item->email}}',
                                        '{{$item->type}}');" class="btn btn-icon btn-bg-light btn-active-color-warning btn-sm">
                                        <span class="svg-icon svg-icon-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="black" />
                                                <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="black" />
                                            </svg>
                                        </span>
                                    </a>
                                    <a href="javascript:;" onclick="handle_confirm('Konfirmasi hapus data','Ya','Tidak','DELETE','{{route('phln.management-unit.destroy',$item->id)}}');" class="btn btn-icon btn-bg-light btn-active-color-danger btn-sm">
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
            <div class="tab-pane fade" id="tab_kpi" role="tabpanel">
                <form id="form_input_kpi">
                    <div class="row">
                        <div class="col-lg-4">
                            <label class="required fs-6 fw-bold mb-2">Indikator</label>
                            <input type="hidden" id="id_kpi" name="id" class="form-control" placeholder="Masukkan ID Indikator"/>
                            <input value="{{$data->id}}" type="hidden" name="id_kegiatan" class="form-control" placeholder="Masukkan ID Kegiatan"/>
                            <input type="text" id="indikator" name="indikator" class="form-control" placeholder="Masukkan Indikator"/>
                        </div>
                        <div class="col-lg-4">
                            <label class="required fs-6 fw-bold mb-2">Target</label>
                            <input type="text" name="target" id="target" class="form-control" placeholder="Masukkan Target"/>
                        </div>
                        <div class="col-lg-4">
                            <label class="fs-6 fw-bold mb-2">Satuan</label>
                            <input type="text" name="satuan" id="satuan" class="form-control" placeholder="Masukkan Satuan"/>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-lg-12">
                            <label class="fs-6 fw-bold mb-2">Keterangan</label>
                            <textarea name="keterangan" id="keterangan" class="form-control"></textarea>
                        </div>
                        <div class="min-w-150px mt-10 text-end">
                            <button id="tombol_simpan_kpi" type="button" onclick="handle_save('#tombol_simpan_kpi','#form_input_kpi','{{route('phln.kegiatan-kpi.store')}}','POST','tab_kpi');" class="btn btn-primary mr-2">Tambah</button>
                        </div>
                    </div>
                </form>
                <div class="row mt-5">
                    <table class="table table-row-dashed table-striped table-row-gray-300 align-middle gs-0 gy-4">
                        @php
                            $tahun_grup = array();
                            $tahun = \App\Models\KegiatanKpi::select('transaction.kegiatan_kpi_detail.tahun')->join('transaction.kegiatan_kpi_detail', 'transaction.kegiatan_kpi.id', '=', 'transaction.kegiatan_kpi_detail.kpi_id')->where('transaction.kegiatan_kpi.kegiatan_id', $data->id)->groupBy('transaction.kegiatan_kpi_detail.tahun')->orderBy('transaction.kegiatan_kpi_detail.tahun','ASC')->get();
                            $jumlah_tahun = count($tahun);
                            $colspan = $jumlah_tahun + 1;
                        @endphp
                        <thead>
                            <tr>
                                <th rowspan="2">No</th>
                                <th rowspan="2">Indikator</th>
                                <th rowspan="2">Target</th>
                                <th rowspan="2">Satuan</th>
                                <th colspan="{{$colspan}}">Proyeksi / Target</th>
                                <th colspan="{{$colspan}}">Capaian</th>
                                <th rowspan="2">Keterangan</th>
                                <th rowspan="2"></th>
                            </tr>
                            <tr>
                                @foreach ($tahun as $thn)
                                <th>{{$thn->tahun}}</th>
                                @php $tahun_grup[] = $thn->tahun; @endphp   
                                @endforeach
                                <th>Total</th>

                                @foreach ($tahun as $thn)
                                <th>{{$thn->tahun}}</th>
                                @endforeach
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $no = 1;
                            @endphp
                            @foreach ($data->kpi as $item)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$item->indikator}}</td>
                                <td>{{$item->target}}</td>
                                <td>{{$item->satuan}}</td>
                                @php
                                $total_target = 0;
                                $total_capaian = 0;
                                @endphp
                                @foreach ($tahun_grup as $year)
                                @php
                                $target = $item->detil->where('tahun', $year)->sum('target');
                                $total_target += $target;
                                @endphp
                                <td>{{$target}}</td>
                                @endforeach
                                <td>{{$total_target}}</td>
                                @foreach ($tahun as $thn)
                                @php
                                $capaian = $item->detil->where('tahun', $year)->sum('capaian');
                                $total_capaian += $capaian;
                                @endphp
                                <td>{{$capaian}}</td>
                                @endforeach
                                <td>{{$total_capaian}}</td>
                                <td>{{$item->ket}}</td>
                                <td>
                                    <a href="javascript:;" onclick="load_edit_kpi('{{$item->id}}',
                                        '{{$item->indikator}}',
                                        '{{$item->target}}',
                                        '{{$item->satuan}}',
                                        '{{$item->keterangan}}');" class="btn btn-icon btn-bg-light btn-active-color-warning btn-sm">
                                        <span class="svg-icon svg-icon-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="black" />
                                                <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="black" />
                                            </svg>
                                        </span>
                                    </a>
                                    <a href="javascript:;" onclick="handle_confirm('Konfirmasi hapus data','Ya','Tidak','DELETE','{{route('phln.kegiatan-kpi.destroy',$item->id)}}');" class="btn btn-icon btn-bg-light btn-active-color-danger btn-sm">
                                        <span class="svg-icon svg-icon-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="black" />
                                                <path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="black" />
                                                <path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="black" />
                                            </svg>
                                        </span>
                                    </a>
                                    <a href="javascript:;" onclick="handle_open_modal('{{route('phln.kegiatan-kpi.show',$item->id)}}','#modalPage','#contentListResult');" class="btn btn-icon btn-bg-light btn-info-color-info btn-sm">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24"/>
                                                <path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                                <path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero"/>
                                            </g>
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="tab-pane fade" id="tab_arsip" role="tabpanel">
                <form id="form_input_dokumen">
                    <div class="row">
                        <div class="col-lg-3">
                            <label class="required fs-6 fw-bold mb-2">Judul Dokumen</label>
                            <input type="hidden" id="id_dokumen" name="id" class="form-control" placeholder="Masukkan ID Dokumen"/>
                            <input value="{{$data->id}}" type="hidden" name="id_kegiatan" class="form-control" placeholder="Masukkan ID Kegiatan"/>
                            <input type="text" id="judul_dokumen" name="judul_dokumen" class="form-control" placeholder="Masukkan Dokumen"/>
                        </div>
                        <div class="col-lg-3">
                            <label class="required fs-6 fw-bold mb-2">Tanggal Terbit Dokumen</label>
                            <input type="text" name="tanggal_terbit" id="tanggal_terbit" class="form-control" placeholder="Masukkan Tanggal Terbit"/>
                        </div>
                        <div class="col-lg-3">
                            <label class="fs-6 fw-bold mb-2">File Dokumen</label>
                            <input type="file" name="file" id="file" accept="application/pdf" class="form-control" placeholder="Masukkan Satuan"/>
                        </div>
                        <div class="col-lg-3">
                            <label class="fs-6 fw-bold mb-2">Deskripsi Singkat</label>
                            <textarea name="deskripsi" id="deskripsi" class="form-control"></textarea>
                        </div>
                        <div class="min-w-150px mt-10 text-end">
                            <button id="tombol_simpan_dokumen" onclick="handle_upload('#tombol_simpan_dokumen','#form_input_dokumen','{{route('phln.kegiatan-dokumen.store')}}','POST','tab_arsip');" class="btn btn-primary mr-2">Tambah</button>
                        </div>
                    </div>
                </form>
                <div class="row mt-5">
                    <table class="table table-row-dashed table-striped table-row-gray-300 align-middle gs-0 gy-4">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul Dokumen</th>
                                <th>Tanggal Terbit Dokumen</th>
                                <th>File Dokumen</th>
                                <th>Deskripsi Singkat</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $no = 1;
                            @endphp
                            @foreach ($data->dokumen as $item)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$item->judul_dokumen}}</td>
                                <td>{{$item->tanggal_terbit->isoFormat('DD MMM Y')}}</td>
                                <td><a href="{{route('phln.kegiatan-dokumen.download',$item->id)}}">Unduh</a></td>
                                <td>{{$item->deskripsi}}</td>
                                <td>
                                    <a href="javascript:;" onclick="load_edit_dokumen('{{$item->id}}',
                                        '{{$item->judul_dokumen}}',
                                        '{{$item->tanggal_terbit}}',
                                        '{{$item->deskripsi}}');" class="btn btn-icon btn-bg-light btn-active-color-warning btn-sm">
                                        <span class="svg-icon svg-icon-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="black" />
                                                <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="black" />
                                            </svg>
                                        </span>
                                    </a>
                                    <a href="javascript:;" onclick="handle_confirm('Konfirmasi hapus data','Ya','Tidak','DELETE','{{route('phln.kegiatan-dokumen.destroy',$item->id)}}');" class="btn btn-icon btn-bg-light btn-active-color-danger btn-sm">
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
            <div class="tab-pane fade" id="tab_pagu" role="tabpanel">
                <form id="form_input_dipa">
                    <div class="row">
                        <div class="col-lg-4">
                            <label class="required fs-6 fw-bold mb-2">Tahun Anggaran</label>
                            <input type="hidden" id="id_dipa" name="id" class="form-control" placeholder="Masukkan ID Dokumen"/>
                            <input value="{{$data->id}}" type="hidden" name="id_kegiatan" class="form-control" placeholder="Masukkan ID Kegiatan"/>
                            <input type="text" id="tahun" name="tahun" class="form-control" placeholder="Masukkan Tahun Anggaran"/>
                        </div>
                        <div class="col-lg-4">
                            <label class="required fs-6 fw-bold mb-2">DIPA</label>
                            <input type="tel" name="dipa" id="dipa" class="form-control" placeholder="Masukkan DIPA"/>
                        </div>
                        <div class="col-lg-4">
                            <label class="fs-6 fw-bold mb-2">DIPA Real</label>
                            <input type="tel" name="dipa_real" id="dipa_real" class="form-control" placeholder="Masukkan DIPA Real"/>
                        </div>
                        <div class="min-w-150px mt-10 text-end">
                            <button id="tombol_simpan_dipa" type="button" onclick="handle_save('#tombol_simpan_dipa','#form_input_dipa','{{route('phln.kegiatan-dipa.store')}}','POST','tab_pagu');" class="btn btn-primary mr-2">Tambah</button>
                        </div>
                    </div>
                </form>
                <div class="row mt-5">
                    <table class="table table-row-dashed table-striped table-row-gray-300 align-middle gs-0 gy-4">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tahun Anggaran</th>
                                <th>DIPA</th>
                                <th>DIPA Real</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $no = 1;
                            @endphp
                            @foreach ($data->dipa as $item)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$item->tahun}}</td>
                                <td>{{number_format($item->dipa)}}</td>
                                <td>{{number_format($item->dipa_real)}}</td>
                                <td>
                                    <a href="javascript:;" onclick="load_edit_dipa('{{$item->id}}',
                                        '{{$item->tahun}}',
                                        '{{number_format($item->dipa)}}',
                                        '{{number_format($item->dipa_real)}}');" class="btn btn-icon btn-bg-light btn-active-color-warning btn-sm">
                                        <span class="svg-icon svg-icon-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="black" />
                                                <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="black" />
                                            </svg>
                                        </span>
                                    </a>
                                    <a href="javascript:;" onclick="handle_confirm('Konfirmasi hapus data','Ya','Tidak','DELETE','{{route('phln.kegiatan-dipa.destroy',$item->id)}}');" class="btn btn-icon btn-bg-light btn-active-color-danger btn-sm">
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
        </div>
    </div>
</div>
<script>
    // INFORMASI KEGIATAN
    select2("donor","Pilih Donor");
    select2("mata_uang","Pilih Mata Uang");
    select2("mata_uang_2","Pilih Mata Uang");
    select2("sektor","Pilih Sektor");
    input_uang("nilai");
    input_uang("nilai_2");
    input_uang("total_nilai");
    datepicker("tanggal_efektif");
    datepicker("tanggal_closing");
    obj_quill("tujuan");
    obj_quill("sasaran");
    obj_quill("komponen");
    obj_quill("lingkup_kegiatan");

    // EA
    select2("exec_kl","Pilih Kementerian / Lembaga`");
    select2("exec_unor","Pilih Unor");
    select2("exec_satker","Pilih Satker");
    $("#exec_kl").change(function(){
        $.ajax({
            type: "POST",
            url: "{{route('phln.get_unor')}}",
            data: {department_id : $("#exec_kl").val()},
            success: function(response){
                $("#exec_unor").html(response);
            }
        });
    });
    $("#exec_unor").change(function(){
        $.ajax({
            type: "POST",
            url: "{{route('phln.get_satker')}}",
            data: {unor_id : $("#exec_unor").val()},
            success: function(response){
                $("#exec_satker").html(response);
            }
        });
    });

    // IA
    select2("imp_kl","Pilih Kementerian / Lembaga`");
    select2("imp_unor","Pilih Unor");
    select2("imp_satker","Pilih Satker");
    $("#imp_kl").change(function(){
        $.ajax({
            type: "POST",
            url: "{{route('phln.get_unor')}}",
            data: {department_id : $("#imp_kl").val()},
            success: function(response){
                $("#imp_unor").html(response);
            }
        });
    });
    $("#imp_unor").change(function(){
        $.ajax({
            type: "POST",
            url: "{{route('phln.get_satker')}}",
            data: {unor_id : $("#imp_unor").val()},
            success: function(response){
                $("#imp_satker").html(response);
            }
        });
    });

    // DMU
    function load_edit(id,nama,jabatan,alamat,telp,fax,email,type){
        $("#id").val(id);
        $("#nama").val(nama);
        $("#jabatan").val(jabatan);
        $("#alamat").val(alamat);
        $("#telp").val(telp);
        $("#fax").val(fax);
        $("#email").val(email);
        $("#tipe").val(type);
        $("#tombol_simpan_mu").html("Simpan");
    }

    // KPI
    function load_edit_kpi(id,indikator,target,satuan,keterangan){
        $("#id_kpi").val(id);
        $("#indikator").val(indikator);
        $("#target").val(target);
        $("#satuan").val(satuan);
        $("#keterangan").val(keterangan);
        $("#tombol_simpan_kpi").html("Simpan");
    }
    
    // ARSIP
    datepicker("tanggal_terbit");
    function load_edit_dokumen(id,judul,tanggal,deskripsi){
        $("#id_dokumen").val(id);
        $("#judul_dokumen").val(judul);
        $("#tanggal_terbit").val(tanggal);
        $("#deskripsi").val(deskripsi);
        $("#tombol_simpan_dokumen").html("Simpan");
    }
    
    // DIPA
    year('tahun');
    function load_edit_dipa(id,tahun,dipa,dipa_real){
        $("#id_dipa").val(id);
        $("#tahun").val(tahun);
        $("#dipa").val(dipa);
        $("#dipa_real").val(dipa_real);
        $("#tombol_simpan_dipa").html("Simpan");
    }
</script>