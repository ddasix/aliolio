$(".menu_icon").click(function () {
    $("#cover_menu,#cover_wrap,html").addClass("open");
    window.location.hash = "#menu_open";
});
$(".srch_icon").on("click", function () {
    $("#srch_menu,#cover_wrap,html").addClass("open");
	$("#search_input").focus();
    window.location.hash = "#menu_open";
});

$(".detail_trigger").on("click", function () {
    var pcode = $(this).attr('data-pcode');
    var info = $(this).attr('data-info');
    loadingProductInfo(info, pcode, function(xhr){
        
        //$("#detail_layer,html").addClass("detail_open");
        //$("#detail_layer").addClass("detail_open").html(xhr);
        $("html").addClass("detail_open")
        window.location.hash = "#open";
    });
});

function loadingProductInfo(info, pcode, cb){
    $.post("/product/info/"+pcode, {_token:$("meta[name='csrf-token']").attr('content'),data:JSON.parse(info)}, function(xhr){
        if(typeof cb == 'function'){
            cb(xhr);
        }
    });
}

window.onhashchange = function () {
    if (location.hash != "#menu_open") {
        $("#srch_menu,#cover_menu,#cover_wrap,html").removeClass("open");
    }
	if (location.hash != "#open") {
        $("#detail_layer,html").removeClass("detail_open");
    }
};