$(".menu_icon").click(function () {
    $("#cover_menu,#cover_wrap,html").addClass("open");
    window.location.hash = "#menu_open";
});
$(".srch_icon").click(function () {
    $("#srch_menu,#cover_wrap,html").addClass("open");
	$("#search_input").focus();
    window.location.hash = "#menu_open";
});

$(".detail_trigger").click(function () {
    var pcode = $(this).attr('data-pcode');
    var info = $(this).attr('data-info');
    loadingProductInfo(info, pcode, function(){
        $("#detail_layer,html").addClass("detail_open");
        window.location.hash = "#open";
    });
});

function loadingProductInfo(info, pcode, cb){
    $.getJSON("/product/info/"+pcode, function(xhr){
        console.log(JSON.parse(info));
        if(typeof cb == 'function'){
            cb(true);
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