<x-app-layout title="Paket Kurva -S {{$kegiatan->judul}} {{$kegiatan->no_loan}} | {{$kegiatan->kode_register}}">
    <div id="content_list">
        <div class="card mb-5 mb-xl-10">
            <div class="card-toolbar">
                <ul class="nav nav-tabs nav-line-tabs nav-stretch fs-6 border-0">
                    <li class="nav-item">
                        <a class="nav-link {{request()->is('office/kegiatan/*/paket-project-brief') ? 'active' : ''}}" href="{{route('phln.project_brief',$kegiatan->id)}}">Project Brief</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{request()->is('office/kegiatan/*/paket') ? 'active' : ''}}" href="{{route('phln.kegiatan.paket',$kegiatan->id)}}">Pemaketan & Statusnya</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{request()->is('office/kegiatan/*/paket-timeline') ? 'active' : ''}}" href="{{route('phln.paket_timeline',$kegiatan->id)}}">Timeline</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{request()->is('office/kegiatan/*/paket-owp') ? 'active' : ''}}" href="{{route('phln.paket_owp',$kegiatan->id)}}">OWP</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{request()->is('office/kegiatan/*/paket-awp') ? 'active' : ''}}" href="{{route('phln.paket_awp',$kegiatan->id)}}">AWP</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{request()->is('office/kegiatan/*/paket-kurva') ? 'active' : ''}}" href="{{route('phln.paket_kurva',$kegiatan->id)}}">Kurva -S</a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <div class="card mb-5 mb-xl-10">
                    <div class="card-header border-0 pt-5">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bolder fs-3 mb-1">Pelaksanaan</span>
                            <span class="text-muted mt-1 fw-bold fs-7">Kurva -S : {{$kegiatan->judul}} <br> {{$kegiatan->no_loan}} | {{$kegiatan->kode_register}}</span>
                        </h3>
                        <div class="card-toolbar">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form id="content_filter">
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
                                            <input type="text" id="keyword" name="keyword" onchange="load_list(1);" class="form-control" placeholder="Cari data..." aria-label="Cari data..." aria-describedby="keywords"/>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body py-3">
                        <div class="table-responsive">
                            <div id="list_result"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="content_input"></div>
    @section('custom_js')
        <script>
            load_list(1);
            year('keyword');
        </script>
    @endsection
</x-app-layout>