<x-app-layout title="Paket OWP {{$kegiatan->judul}} {{$kegiatan->no_loan}} | {{$kegiatan->kode_register}}">
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
                            <span class="text-muted mt-1 fw-bold fs-7">OWP : {{$kegiatan->judul}} <br> {{$kegiatan->no_loan}} | {{$kegiatan->kode_register}}</span>
                        </h3>
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
        </script>
    @endsection
</x-app-layout>