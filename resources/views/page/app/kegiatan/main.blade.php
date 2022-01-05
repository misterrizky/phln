<x-app-layout title="Pinjaman">
    <div id="content_list">
        <div class="row gy-5 g-xl-10" id="content_ringkasan">
            <div class="col-xl-6">
                <div class="card card-xxl-stretch mb-5 mb-xl-10" style="background-color: #F7D9E3">
                    <div class="card-body d-flex flex-column">
                        <div class="d-flex flex-column mb-7">
                            <a href="#" class="text-dark text-hover-primary fw-bolder fs-3">Jumlah Kegiatan</a>
                        </div>
                        <div class="row g-0">
                            <div class="col-6">
                                <div class="d-flex align-items-center mb-9 me-2">
                                    <div class="symbol symbol-40px me-3">
                                        <div class="symbol-label bg-white bg-opacity-50">
                                            <span class="svg-icon svg-icon-1 svg-icon-dark">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <path opacity="0.3" d="M22 8H8L12 4H19C19.6 4 20.2 4.39999 20.5 4.89999L22 8ZM3.5 19.1C3.8 19.7 4.4 20 5 20H12L16 16H2L3.5 19.1ZM19.1 20.5C19.7 20.2 20 19.6 20 19V12L16 8V22L19.1 20.5ZM4.9 3.5C4.3 3.8 4 4.4 4 5V12L8 16V2L4.9 3.5Z" fill="black" />
                                                    <path d="M22 8L20 12L16 8H22ZM8 16L4 12L2 16H8ZM16 16L12 20L16 22V16ZM8 8L12 4L8 2V8Z" fill="black" />
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                    <a href="javascript:;" onclick="load_input('{{route('phln.kegiatan.risk')}}');">
                                        <div class="fs-5 text-dark fw-bolder lh-1">{{$ar->count()}}</div>
                                        <div class="fs-7 text-gray-600 fw-bold">AT RISK</div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex align-items-center mb-9 ms-2">
                                    <div class="symbol symbol-40px me-3">
                                        <div class="symbol-label bg-white bg-opacity-50">
                                            <span class="svg-icon svg-icon-1 svg-icon-dark">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <path d="M8 22C7.4 22 7 21.6 7 21V9C7 8.4 7.4 8 8 8C8.6 8 9 8.4 9 9V21C9 21.6 8.6 22 8 22Z" fill="black" />
                                                    <path opacity="0.3" d="M4 15C3.4 15 3 14.6 3 14V6C3 5.4 3.4 5 4 5C4.6 5 5 5.4 5 6V14C5 14.6 4.6 15 4 15ZM13 19V3C13 2.4 12.6 2 12 2C11.4 2 11 2.4 11 3V19C11 19.6 11.4 20 12 20C12.6 20 13 19.6 13 19ZM17 16V5C17 4.4 16.6 4 16 4C15.4 4 15 4.4 15 5V16C15 16.6 15.4 17 16 17C16.6 17 17 16.6 17 16ZM21 18V10C21 9.4 20.6 9 20 9C19.4 9 19 9.4 19 10V18C19 18.6 19.4 19 20 19C20.6 19 21 18.6 21 18Z" fill="black" />
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                    <a href="javascript:;" onclick="load_input('{{route('phln.kegiatan.bs')}}');">
                                        <div class="fs-5 text-dark fw-bolder lh-1">{{$bs->count()}}</div>
                                        <div class="fs-7 text-gray-600 fw-bold">BEHIND SCHEDULE</div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex align-items-center me-2">
                                    <div class="symbol symbol-40px me-3">
                                        <div class="symbol-label bg-white bg-opacity-50">
                                            <span class="svg-icon svg-icon-1 svg-icon-dark">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <path opacity="0.3" d="M11.425 7.325C12.925 5.825 15.225 5.825 16.725 7.325C18.225 8.825 18.225 11.125 16.725 12.625C15.225 14.125 12.925 14.125 11.425 12.625C9.92501 11.225 9.92501 8.825 11.425 7.325ZM8.42501 4.325C5.32501 7.425 5.32501 12.525 8.42501 15.625C11.525 18.725 16.625 18.725 19.725 15.625C22.825 12.525 22.825 7.425 19.725 4.325C16.525 1.225 11.525 1.225 8.42501 4.325Z" fill="black" />
                                                    <path d="M11.325 17.525C10.025 18.025 8.425 17.725 7.325 16.725C5.825 15.225 5.825 12.925 7.325 11.425C8.825 9.92498 11.125 9.92498 12.625 11.425C13.225 12.025 13.625 12.925 13.725 13.725C14.825 13.825 15.925 13.525 16.725 12.625C17.125 12.225 17.425 11.825 17.525 11.325C17.125 10.225 16.525 9.22498 15.625 8.42498C12.525 5.32498 7.425 5.32498 4.325 8.42498C1.225 11.525 1.225 16.625 4.325 19.725C7.425 22.825 12.525 22.825 15.625 19.725C16.325 19.025 16.925 18.225 17.225 17.325C15.425 18.125 13.225 18.225 11.325 17.525Z" fill="black" />
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                    <a href="javascript:;" onclick="load_input('{{route('phln.kegiatan.os')}}');">
                                        <div class="fs-5 text-dark fw-bolder lh-1">{{$os->count()}}</div>
                                        <div class="fs-7 text-gray-600 fw-bold">ON SCHEDULE</div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex align-items-center ms-2">
                                    <div class="symbol symbol-40px me-3">
                                        <div class="symbol-label bg-white bg-opacity-50">
                                            <span class="svg-icon svg-icon-1 svg-icon-dark">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <path d="M2 11.7127L10 14.1127L22 11.7127L14 9.31274L2 11.7127Z" fill="black" />
                                                    <path opacity="0.3" d="M20.9 7.91274L2 11.7127V6.81275C2 6.11275 2.50001 5.61274 3.10001 5.51274L20.6 2.01274C21.3 1.91274 22 2.41273 22 3.11273V6.61273C22 7.21273 21.5 7.81274 20.9 7.91274ZM22 16.6127V11.7127L3.10001 15.5127C2.50001 15.6127 2 16.2127 2 16.8127V20.3127C2 21.0127 2.69999 21.6128 3.39999 21.4128L20.9 17.9128C21.5 17.8128 22 17.2127 22 16.6127Z" fill="black" />
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="fs-5 text-dark fw-bolder lh-1">{{$ar->count() + $bs->count() + $os->count()}}</div>
                                        <div class="fs-7 text-gray-600 fw-bold">TOTAL</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card card-xxl-stretch mb-5 mb-xl-10" style="background-color: #CBF0F4">
                    <div class="card-body d-flex flex-column">
                        <div class="d-flex flex-column mb-7">
                            <a href="#" class="text-dark text-hover-primary fw-bolder fs-3">Nilai Alokasi</a>
                        </div>
                        <div class="row g-0">
                            <div class="col-6">
                                <div class="d-flex align-items-center mb-9 me-2">
                                    <div class="symbol symbol-40px me-3">
                                        <div class="symbol-label bg-white bg-opacity-50">
                                            <span class="svg-icon svg-icon-1 svg-icon-dark">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <path opacity="0.3" d="M22 8H8L12 4H19C19.6 4 20.2 4.39999 20.5 4.89999L22 8ZM3.5 19.1C3.8 19.7 4.4 20 5 20H12L16 16H2L3.5 19.1ZM19.1 20.5C19.7 20.2 20 19.6 20 19V12L16 8V22L19.1 20.5ZM4.9 3.5C4.3 3.8 4 4.4 4 5V12L8 16V2L4.9 3.5Z" fill="black" />
                                                    <path d="M22 8L20 12L16 8H22ZM8 16L4 12L2 16H8ZM16 16L12 20L16 22V16ZM8 8L12 4L8 2V8Z" fill="black" />
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                    <a href="javascript:;" onclick="load_input('{{route('phln.kegiatan.risk')}}');">
                                        <div class="fs-5 text-dark fw-bolder lh-1">{{number_format($ar->sum('nilai_konversi'),2,",",".")}}</div>
                                        <div class="fs-7 text-gray-600 fw-bold">AT RISK</div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex align-items-center mb-9 ms-2">
                                    <div class="symbol symbol-40px me-3">
                                        <div class="symbol-label bg-white bg-opacity-50">
                                            <span class="svg-icon svg-icon-1 svg-icon-dark">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <path d="M8 22C7.4 22 7 21.6 7 21V9C7 8.4 7.4 8 8 8C8.6 8 9 8.4 9 9V21C9 21.6 8.6 22 8 22Z" fill="black" />
                                                    <path opacity="0.3" d="M4 15C3.4 15 3 14.6 3 14V6C3 5.4 3.4 5 4 5C4.6 5 5 5.4 5 6V14C5 14.6 4.6 15 4 15ZM13 19V3C13 2.4 12.6 2 12 2C11.4 2 11 2.4 11 3V19C11 19.6 11.4 20 12 20C12.6 20 13 19.6 13 19ZM17 16V5C17 4.4 16.6 4 16 4C15.4 4 15 4.4 15 5V16C15 16.6 15.4 17 16 17C16.6 17 17 16.6 17 16ZM21 18V10C21 9.4 20.6 9 20 9C19.4 9 19 9.4 19 10V18C19 18.6 19.4 19 20 19C20.6 19 21 18.6 21 18Z" fill="black" />
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                    <a href="javascript:;" onclick="load_input('{{route('phln.kegiatan.bs')}}');">
                                        <div class="fs-5 text-dark fw-bolder lh-1">{{number_format($bs->sum('nilai_konversi'),2,",",".")}}</div>
                                        <div class="fs-7 text-gray-600 fw-bold">BEHIND SCHEDULE</div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex align-items-center me-2">
                                    <div class="symbol symbol-40px me-3">
                                        <div class="symbol-label bg-white bg-opacity-50">
                                            <span class="svg-icon svg-icon-1 svg-icon-dark">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <path opacity="0.3" d="M11.425 7.325C12.925 5.825 15.225 5.825 16.725 7.325C18.225 8.825 18.225 11.125 16.725 12.625C15.225 14.125 12.925 14.125 11.425 12.625C9.92501 11.225 9.92501 8.825 11.425 7.325ZM8.42501 4.325C5.32501 7.425 5.32501 12.525 8.42501 15.625C11.525 18.725 16.625 18.725 19.725 15.625C22.825 12.525 22.825 7.425 19.725 4.325C16.525 1.225 11.525 1.225 8.42501 4.325Z" fill="black" />
                                                    <path d="M11.325 17.525C10.025 18.025 8.425 17.725 7.325 16.725C5.825 15.225 5.825 12.925 7.325 11.425C8.825 9.92498 11.125 9.92498 12.625 11.425C13.225 12.025 13.625 12.925 13.725 13.725C14.825 13.825 15.925 13.525 16.725 12.625C17.125 12.225 17.425 11.825 17.525 11.325C17.125 10.225 16.525 9.22498 15.625 8.42498C12.525 5.32498 7.425 5.32498 4.325 8.42498C1.225 11.525 1.225 16.625 4.325 19.725C7.425 22.825 12.525 22.825 15.625 19.725C16.325 19.025 16.925 18.225 17.225 17.325C15.425 18.125 13.225 18.225 11.325 17.525Z" fill="black" />
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                    <a href="javascript:;" onclick="load_input('{{route('phln.kegiatan.os')}}');">
                                        <div class="fs-5 text-dark fw-bolder lh-1">{{number_format($os->sum('nilai_konversi'),2,",",".")}}</div>
                                        <div class="fs-7 text-gray-600 fw-bold">ON SCHEDULE</div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex align-items-center ms-2">
                                    <div class="symbol symbol-40px me-3">
                                        <div class="symbol-label bg-white bg-opacity-50">
                                            <span class="svg-icon svg-icon-1 svg-icon-dark">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <path d="M2 11.7127L10 14.1127L22 11.7127L14 9.31274L2 11.7127Z" fill="black" />
                                                    <path opacity="0.3" d="M20.9 7.91274L2 11.7127V6.81275C2 6.11275 2.50001 5.61274 3.10001 5.51274L20.6 2.01274C21.3 1.91274 22 2.41273 22 3.11273V6.61273C22 7.21273 21.5 7.81274 20.9 7.91274ZM22 16.6127V11.7127L3.10001 15.5127C2.50001 15.6127 2 16.2127 2 16.8127V20.3127C2 21.0127 2.69999 21.6128 3.39999 21.4128L20.9 17.9128C21.5 17.8128 22 17.2127 22 16.6127Z" fill="black" />
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="fs-5 text-dark fw-bolder lh-1">{{number_format($ar->sum('nilai_konversi')+$bs->sum('nilai_konversi')+$os->sum('nilai_konversi'),2,",",".")}}</div>
                                        <div class="fs-7 text-gray-600 fw-bold">TOTAL</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mb-5 mb-xl-10">
            <div class="card-header border-0 pt-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bolder fs-3 mb-1">Pelaksanaan</span>
                    <span class="text-muted mt-1 fw-bold fs-7">Pinjaman</span>
                    <a href="javascript:;" id="tombol_show_ringkasan" onclick="show_ringkasan();" class="btn btn-sm btn-icon btn-light btn-active-primary" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" title="Klik untuk lihat ringkasan">
                        <span class="svg-icon svg-icon-3">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24"/>
                                    <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10"/>
                                    <path d="M11,11 L11,7 C11,6.44771525 11.4477153,6 12,6 C12.5522847,6 13,6.44771525 13,7 L13,11 L17,11 C17.5522847,11 18,11.4477153 18,12 C18,12.5522847 17.5522847,13 17,13 L13,13 L13,17 C13,17.5522847 12.5522847,18 12,18 C11.4477153,18 11,17.5522847 11,17 L11,13 L7,13 C6.44771525,13 6,12.5522847 6,12 C6,11.4477153 6.44771525,11 7,11 L11,11 Z" fill="#000000"/>
                                </g>
                            </svg>
                        </span>
                    </a>
                    <a href="javascript:;" id="tombol_hide_ringkasan" onclick="hide_ringkasan();" class="btn btn-sm btn-icon btn-light btn-active-primary" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" title="Klik untuk sembunyikan ringkasan">
                        <span class="svg-icon svg-icon-3">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24"/>
                                    <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10"/>
                                    <rect fill="#000000" x="6" y="11" width="12" height="2" rx="1"/>
                                </g>
                            </svg>
                        </span>
                    </a>
                </h3>
                <div class="card-toolbar">
                    <div class="row">
                        <div class="col-lg-5">
                            <a href="javascript:;" onclick="load_input('{{route('phln.kegiatan.create')}}');" class="btn btn-icon btn-sm btn-light btn-active-primary" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" title="Klik untuk tambah data">
                                <span class="svg-icon svg-icon-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="black" />
                                        <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="black" />
                                    </svg>
                                </span>
                            </a>
                            <a href="{{route('phln.kegiatan.pdf')}}" class="btn btn-icon btn-sm btn-light btn-active-primary" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" title="Klik untuk cetak data">
                                <span class="svg-icon svg-icon-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24"/>
                                            <path d="M2,13 C2,12.5 2.5,12 3,12 C3.5,12 4,12.5 4,13 C4,13.3333333 4,15 4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 C2,15 2,13.3333333 2,13 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                            <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 8.000000) rotate(-180.000000) translate(-12.000000, -8.000000) " x="11" y="1" width="2" height="14" rx="1"/>
                                            <path d="M7.70710678,15.7071068 C7.31658249,16.0976311 6.68341751,16.0976311 6.29289322,15.7071068 C5.90236893,15.3165825 5.90236893,14.6834175 6.29289322,14.2928932 L11.2928932,9.29289322 C11.6689749,8.91681153 12.2736364,8.90091039 12.6689647,9.25670585 L17.6689647,13.7567059 C18.0794748,14.1261649 18.1127532,14.7584547 17.7432941,15.1689647 C17.3738351,15.5794748 16.7415453,15.6127532 16.3310353,15.2432941 L12.0362375,11.3779761 L7.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000004, 12.499999) rotate(-180.000000) translate(-12.000004, -12.499999) "/>
                                        </g>
                                    </svg>
                                </span>
                            </a>
                            <a href="javascript:;" onclick="handle_confirm('Konfirmasi Sinkronasi data','Ya','Tidak','POST','{{route('phln.kegiatan.sync')}}');" class="btn btn-icon btn-sm btn-light btn-active-primary" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" title="Klik untuk sinkronisasi data">
                                <span class="svg-icon svg-icon-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24"/>
                                            <path d="M8.43296491,7.17429118 L9.40782327,7.85689436 C9.49616631,7.91875282 9.56214077,8.00751728 9.5959027,8.10994332 C9.68235021,8.37220548 9.53982427,8.65489052 9.27756211,8.74133803 L5.89079566,9.85769242 C5.84469033,9.87288977 5.79661753,9.8812917 5.74809064,9.88263369 C5.4720538,9.8902674 5.24209339,9.67268366 5.23445968,9.39664682 L5.13610134,5.83998177 C5.13313425,5.73269078 5.16477113,5.62729274 5.22633424,5.53937151 C5.384723,5.31316892 5.69649589,5.25819495 5.92269848,5.4165837 L6.72910242,5.98123382 C8.16546398,4.72182424 10.0239806,4 12,4 C16.418278,4 20,7.581722 20,12 C20,16.418278 16.418278,20 12,20 C7.581722,20 4,16.418278 4,12 L6,12 C6,15.3137085 8.6862915,18 12,18 C15.3137085,18 18,15.3137085 18,12 C18,8.6862915 15.3137085,6 12,6 C10.6885336,6 9.44767246,6.42282109 8.43296491,7.17429118 Z" fill="#000000" fill-rule="nonzero"/>
                                        </g>
                                    </svg>
                                </span>
                            </a>
                        </div>
                        <div class="col-lg-7">
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
                                    <input type="text" name="keyword" onkeyup="load_list(1);" class="form-control" placeholder="Cari data..." aria-label="Cari data..." aria-describedby="keywords"/>
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
    <div id="content_input"></div>
    @section('custom_js')
        <script>
            load_list(1);
            $("#tombol_hide_ringkasan").hide();
            $("#content_ringkasan").hide();
            function show_ringkasan(){
                $("#tombol_hide_ringkasan").show();
                $("#tombol_show_ringkasan").hide();
                $("#content_ringkasan").show(500);
            }
            function hide_ringkasan(){
                $("#tombol_hide_ringkasan").hide();
                $("#tombol_show_ringkasan").show();
                $("#content_ringkasan").hide(500);
            }
        </script>
    @endsection
</x-app-layout>