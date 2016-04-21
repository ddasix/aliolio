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
    $("#detail_layer,html").addClass("detail_open");
    window.location.hash = "#open";
});

window.onhashchange = function () {
    if (location.hash != "#menu_open") {
        $("#srch_menu,#cover_menu,#cover_wrap,html").removeClass("open");
    }
	if (location.hash != "#open") {
        $("#detail_layer,html").removeClass("detail_open");
    }
};