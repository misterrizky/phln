<x-app-layout title="Sandingan">
    <div id="content_list">
        <div class="card mb-5 mb-xl-10">
            <div class="card-header border-0 pt-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bolder fs-3 mb-1">Dashboard</span>
                    <span class="text-muted mt-1 fw-bold fs-7">Sandingan Alokasi & Realisasi DIPA TA <span id="tahun">{{date('Y')}}</span> Per Provinsi Sumber Dana PHLN</span>
                </h3>
                <div class="card-toolbar">
                    <div class="row">
                        <div class="col-lg-12">
                            <form id="content_filter">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="input-group input-group-sm mb-5">
                                            <span class="input-group-text" id="keywords">
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24"/>
                                                        <path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                                        <path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero"/>
                                                    </g>
                                                </svg>
                                            </span>
                                            <input type="text" id="keyword" name="keyword" value="{{date('Y')}}" onchange="load_list(1);" onkeyup="load_list(1);" class="form-control" placeholder="Cari data..." aria-label="Cari data..." aria-describedby="keywords"/>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="list_result"></div>
    </div>
    @section('custom_js')
        <script>
            load_list(1);
            year("keyword");
            $('#keyword').on('change', function() {
                $("#tahun").html(this.value);
            });
        </script>
    @endsection
</x-app-layout>