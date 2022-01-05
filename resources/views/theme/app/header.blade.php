<div id="kt_header" class="header">
    <!--begin::Container-->
    <div class="container d-flex align-items-center justify-content-between" id="kt_header_container">
        <!--begin::Page title-->
        <div class="page-title d-flex flex-column align-items-start justify-content-center flex-wrap me-lg-2 pb-5 pb-lg-0" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', lg: '#kt_header_container'}">
            <!--begin::Heading-->
            <h1 class="d-flex flex-column text-dark fw-bolder my-0 fs-1">
                Hello, {{Auth::guard('office')->user()->nama}}
                {{-- <small class="text-muted fs-6 fw-bold ms-1 pt-1">You’ve got 24 New Sales</small> --}}
            </h1>
            <!--end::Heading-->
        </div>
        <!--end::Page title=-->
    </div>
    <!--end::Container-->
</div>