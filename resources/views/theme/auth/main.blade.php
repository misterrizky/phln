<!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
	@include('theme.auth.head')
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="bg-body">
		<!--begin::Main-->
		<!--begin::Root-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Authentication - Sign-in -->
			<div class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed" style="background-image: url({{asset('keenthemes/media/illustrations/dozzy-1/14.png')}}">
				<!--begin::Content-->
				<div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
					{{$slot}}
				</div>
				<!--end::Content-->
				<!--begin::Footer-->
				<!--end::Footer-->
			</div>
			<!--end::Authentication - Sign-in-->
		</div>
		<!--end::Root-->
		<!--end::Main-->
		<!--begin::Javascript-->
		@include('theme.auth.js')
		@yield('custom_js')
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>