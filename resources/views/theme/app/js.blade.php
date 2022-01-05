<!--begin::Global Javascript Bundle(used by all pages)-->
<script src="{{asset('keenthemes/plugins/global/plugins.bundle.js')}}"></script>
<script src="{{asset('keenthemes/js/scripts.bundle.js')}}"></script>
<!--end::Global Javascript Bundle-->
<!--begin::Page Vendors Javascript(used by this page)-->
<!--end::Page Vendors Javascript-->
<!--begin::Page Custom Javascript(used by this page)-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js" integrity="sha512-T/tUfKSV1bihCnd+MxKD0Hm1uBBroVYBOYSk1knyvQ9VyZJpc/ALb4P0r6ubwVPSGB2GvjeoMAJJImBG12TiaQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="{{asset('js/plugin-office.js')}}"></script>
<script src="{{asset('js/method-office.js')}}"></script>
<!--end::Page Custom Javascript-->
<script>
    function toggle_aside(obj){
        if(obj == "hide"){
            $("#kt_aside_menu").hide();
            $("#kt_aside_footer").hide();
            $("#tombol_hide_aside").hide();
            $("#tombol_show_aside").show();
            $("#kt_aside").width(80);
            $(".wrapper").css('padding-left', '0px');
            $(".wrapper").css('padding-left', '100px');
        }else{
            $("#kt_aside_menu").show();
            $("#kt_aside_footer").show();
            $("#tombol_hide_aside").show();
            $("#tombol_show_aside").hide();
            $("#kt_aside").width(250);
            $(".wrapper").css('padding-left', '0px');
            $(".wrapper").css('padding-left', '300px');
        }
    }
</script>