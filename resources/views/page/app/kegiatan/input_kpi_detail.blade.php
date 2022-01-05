<div class="modal-header header-bg">
    <h6 class="">Tambah detail KPI</h6>
    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" onclick="handle_open_modal('{{route('phln.kegiatan-kpi.show',$kegiatanKpi->id)}}','#modalPage','#contentListResult');">
        <span class="svg-icon svg-icon-2x">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black"></rect>
                <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black"></rect>
            </svg>
        </span>
    </div>
</div>
<div class="modal-body scroll-y m-5">
    <form id="form_input_kpi_detail">
        <div class="form-group row">
            <div class="col-lg-3">
                <label>Tahun :</label>
                <input value="{{$kegiatanKpi->id}}" type="hidden" id="id_kpi" name="id_kpi" class="form-control" placeholder="Masukkan ID KPI"/>
                <input type="text" id="tahun_kpi" name="tahun" class="form-control" placeholder="Masukkan Tahun" value="{{$data->tahun}}"/>
            </div>
            <div class="col-lg-3">
                <label>Target :</label>
                <input type="text" name="target" id="target" class="form-control" placeholder="Masukkan Target" value="{{$data->target}}"/>
            </div>
            <div class="col-lg-3">
                <label>Capaian :</label>
                <input type="text" name="capaian" id="capaian" class="form-control" placeholder="Masukkan Satuan" value="{{$data->capaian}}"/>
            </div>
            <div class="col-lg-3 text-lg-right mt-8">
                @if ($data->id)
                <button id="tombol_simpan_kpi_detail" type="button" onclick="handle_save_modal('#tombol_simpan_kpi_detail','#form_input_kpi_detail','{{route('phln.kegiatan-kpi-detail.update',$data->id)}}','PATCH','#modalPage');" class="btn btn-sm btn-primary">Simpan</button>
                @else
                <button id="tombol_simpan_kpi_detail" onclick="handle_save_modal('#tombol_simpan_kpi_detail','#form_input_kpi_detail','{{route('phln.kegiatan-kpi-detail.store')}}','POST','#modalPage');" class="btn btn-sm btn-primary">Simpan</button>
                @endif
            </div>
        </div>
    </form>
</div>
<script type="text/javascript">
year('tahun_kpi');
</script>