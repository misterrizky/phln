<x-auth-layout title="Selamat datang">
    <a href="javascript:;" class="mb-12">
        <img alt="Logo" src="{{asset('img/icon.jpg')}}" class="h-40px" />
    </a>
    <div class="w-lg-500px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">
        <div id="page_login">
            <form class="form w-100" novalidate="novalidate" id="form_login">
                <div class="text-center mb-10">
                    <h1 class="text-dark mb-3">Selamat datang di {{config('app.name')}}</h1>
                    <div class="text-gray-400 fw-bold fs-4">Baru disini?
                    <a href="javascript:;" onclick="auth_content('page_register');" class="link-primary fw-bolder">Buat Akun</a></div>
                </div>
                <div class="fv-row mb-10">
                    <label class="form-label fs-6 fw-bolder text-dark">ID Pengguna</label>
                    <input class="form-control form-control-lg form-control-solid" type="text" id="id_pengguna" name="id_pengguna" autocomplete="off" data-login="1" />
                </div>
                <div class="fv-row mb-10">
                    <div class="d-flex flex-stack mb-2">
                        <label class="form-label fw-bolder text-dark fs-6 mb-0">Kata sandi</label>
                    </div>
                    <input class="form-control form-control-lg form-control-solid" type="password" name="kata_sandi" autocomplete="off" data-login="2" />
                </div>
                <div class="text-center">
                    <button id="tombol_login" onclick="handle_post('#tombol_login','#form_login','{{route('phln.auth.login')}}');" class="btn btn-lg btn-primary w-100">
                        <span class="indicator-label">Masuk</span>
                        <span class="indicator-progress">Harap tunggu...
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                    </button>
                </div>
            </form>
        </div>
        <div id="page_register">
            <form class="form w-100" novalidate="novalidate" id="form_register">
                <div class="text-center mb-3">
                    <h1 class="text-dark mb-3">Selamat datang di {{config('app.name')}}</h1>
                    <div class="text-gray-400 fw-bold fs-4">Sudah punya akun?
                    <a href="javascript:;" onclick="auth_content('page_login');" class="link-primary fw-bolder">Masuk disini</a></div>
                </div>
                <div class="row fv-row mb-3">
                    <div class="col-xl-6">
                        <label class="form-label fs-6 fw-bolder text-dark">Nama Lengkap</label>
                        <input class="form-control form-control-lg form-control-solid" type="text" id="nama_lengkap" name="nama_lengkap" autocomplete="off" />
                    </div>
                    <div class="col-xl-6">
                        <label class="form-label fs-6 fw-bolder text-dark">ID Pengguna</label>
                        <input class="form-control form-control-lg form-control-solid" type="text" name="id_pengguna" autocomplete="off" />
                    </div>
                </div>
                <div class="row fv-row mb-3">
                    <div class="col-xl-6">
                        <label class="form-label fw-bolder text-dark fs-6 mb-0">Kata sandi</label>
                        <input class="form-control form-control-lg form-control-solid" type="password" name="kata_sandi" autocomplete="off" />
                    </div>
                    <div class="col-xl-6">
                        <label class="form-label fs-6 fw-bolder text-dark">Email</label>
                        <input class="form-control form-control-lg form-control-solid" type="email" id="email" name="email" autocomplete="off" />
                    </div>
                </div>
                <div class="row fv-row mb-3">
                    <div class="col-xl-6">
                        <label class="form-label fs-6 fw-bolder text-dark">Jabatan</label>
                        <input class="form-control form-control-lg form-control-solid" type="text" id="jabatan" name="jabatan" autocomplete="off" />
                    </div>
                    <div class="col-xl-6">
                        <label class="form-label fs-6 fw-bolder text-dark">Sektor</label>
                        <select class="form-select">
                            <option value="" selected disabled>Harap pilih sektor</option>
                            @foreach ($sektor as $item)
                                <option value="{{$item->id}}">{{$item->nama}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="text-center">
                    <button id="tombol_register" onclick="handle_post('#tombol_register','#register','{{route('phln.auth.register')}}');" class="btn btn-lg btn-primary w-100">
                        <span class="indicator-label">Daftar</span>
                        <span class="indicator-progress">Harap tunggu...
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                    </button>
                </div>
            </form>
        </div>
    </div>
    @section('custom_js')
    <script>
        auth_content('page_login');
    </script>
    @endsection
</x-auth-layout>