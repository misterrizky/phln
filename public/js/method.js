function web_content(obj){
    $("#content_main").hide();
    $("#content_map").hide();
    $("#content_progress").hide();
    $("#" + obj).show();
}
function load_list(page){
    $.get('?page=' + page, $('#content_filter').serialize(), function(result) {
        $('#main_result').html(result);
        web_content('content_main');
    }, "html");
}
function load_progress(page){
    $.get('?page=' + page, $('#content_filter').serialize(), function(result) {
        $('#main_result').html(result);
        web_content('content_main');
    }, "html");
}
function handle_get(url,content){
    $.get(url, {}, function(result) {
        $("#" + content).html(result);
        web_content(content);
    }, "html");
}