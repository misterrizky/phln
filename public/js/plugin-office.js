toastr.options = {
    "closeButton": true,
    "debug": true,
    "newestOnTop": true,
    "progressBar": true,
    "positionClass": "toast-top-right",
    "preventDuplicates": true,
    "onclick": null,
    "showDuration": "300",
    "hideDuration": "1000",
    "timeOut": "2000",
    "extendedTimeOut": "1000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
};
function success_toastr(msg) {
    toastr.success(msg);
}
function info_toastr(msg) {
    toastr.info(msg);
}
function error_toastr(msg) {
    toastr.error(msg);
}
let blockUI = '';
function loading(obj){
    blockUI = new KTBlockUI(obj, {
        message: '<div class="blockui-message"><span class="spinner-border text-primary"></span> Loading...</div>',
    });
    blockUI.block();
}
function loaded(obj){
    blockUI.release();
}
function number_only(obj) {
    $('#' + obj).bind('keypress', function (event) {
        var regex = new RegExp("^[0-9,]+$");
        var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
        if (!regex.test(key)) {
            event.preventDefault();
            return false;
        }
    });
}
function decimal_only(obj) {
    $('#' + obj).bind('keypress', function (event) {
        var regex = new RegExp("^[0-9.]+$");
        var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
        if (!regex.test(key)) {
            event.preventDefault();
            return false;
        }
    });
}
function format_ribuan(nStr) {
	nStr += '';
	x = nStr.split('.');
	x1 = x[0];
	x2 = x.length > 1 ? '.' + x[1] : '';
	var rgx = /(\d+)(\d{3})/;
	while (rgx.test(x1)) {
		x1 = x1.replace(rgx, '$1' + '.' + '$2');
	}
	return x1 + x2;
}
function ribuan(obj) {
    $('#' + obj).keyup(function (event) {
        if (event.which >= 37 && event.which <= 40) return;
        // format number
        $(this).val(function (index, value) {
            return value
                .replace(/\D/g, "")
                .replace(/\B(?=(\d{3})+(?!\d))/g, ".");
        });
        var id = $(this).data("id-selector");
        var classs = $(this).data("class-selector");
        var value = $(this).val();
        var noCommas = value.replace(/,/g, ",");
        $('#' + id).val(value);
        $('.' + classs).val(value);
    });
}
function input_uang(obj){
    Inputmask("999.999.999.999,99", {
        "numericInput": true,
        "rightAlignNumerics": false
    }).mask("#" + obj);
}
function select2(obj, title){
    $('#' + obj).select2({
        placeholder: title,
        width:'100%',
    });
}
function datepicker(obj){
    $("#" + obj).flatpickr();
}
function datepicker_start(obj){
    $("#" + obj).flatpickr({
        minDate: "today"
    });
}
function datepicker_end(obj){
    $("#" + obj).flatpickr({
        maxDate: "today"
    });
}
function start_date(obj,obj_end){
    $('#' + obj).datepicker({
        todayHighlight: true,
        autoclose: true,
        format: 'dd-mm-yyyy',
        orientation: "bottom left",
        onSelect: function(selected) {
            $("#" + obj_end).datepicker("option","minDate", selected)
        }
    }).on('changeDate', function (selected) {
        var startDate = new Date(selected.date.valueOf());
        $('#' + obj).datepicker('setStartDate', startDate);
    }).on('clearDate', function (selected) {
        $('#' + obj).datepicker('setStartDate', null);
    });
}
function year(obj) {
    $('#' + obj).datepicker({
        autoclose: true,
        format: 'yyyy',
        viewMode: "years",
        minViewMode: "years",
    });
}
function obj_summernote(obj){
    var KTSummernoteDemo = function () {
        // Private functions
        var demos = function () {
            $('#' + obj).summernote({
                height: 150,
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'underline', 'clear']],
                    ['fontname', ['fontname']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['table', ['table']],
                    ['view', ['fullscreen', 'codeview', 'help']],
                ],
            });
        }
        return {
            // public functions
            init: function() {
                demos();
            }
        };
    }();
    // Initialization
    jQuery(document).ready(function() {
        KTSummernoteDemo.init();
    });
}
function obj_autosize(obj){
    var KTAutosize = function () {
        var demos = function () {
            var demo = $('#' + obj);
            autosize(demo);
        }
        return {
            // public functions
            init: function() {
                demos();
            }
        };
    }();
       
    jQuery(document).ready(function() {
        KTAutosize.init();
    });
}
function obj_tinymce(obj){
    tinymce.init({
        selector: '#' + obj,
        toolbar: false,
        statusbar: false
    });
}
function obj_quill(obj){
    var quill = new Quill('#' + obj, {
        modules: {
            toolbar: [
                [{
                    header: [1, 2, false]
                }],
                ['bold', 'italic', 'underline'],
                ['image', 'code-block']
            ]
        },
        placeholder: 'Ketik teks Anda di sini...',
        theme: 'snow' // or 'bubble'
    });
    quill.on('text-change', function(delta, oldDelta, source) {
        document.querySelector("textarea[name='"+obj+"']").value = quill.root.innerHTML;
    });
}