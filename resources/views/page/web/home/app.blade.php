<x-web-layout title="Selamat Datang">
    <div class="content-wrap">
        <div class="container">
            <div id="content_main">
                <div id="main_result"></div>
            </div>
            <div id="content_map"></div>
            <div id="content_progress"></div>
        </div>
    </div>
    @section('custom_js')
        <script>
            load_list(1);
        </script>
    @endsection
</x-web-layout>