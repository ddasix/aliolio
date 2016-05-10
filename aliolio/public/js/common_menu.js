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
    loadingProductInfo(info, pcode, function(){
        $("#detail_layer,html").addClass("detail_open");
        window.location.hash = "#open";
    });
});

function loadingProductInfo(info, pcode, cb){
    var productinfo = render('productinfo');
    console.log(productinfo);
    // $.getJSON("/product/info/"+pcode, function(xhr){
    //     console.log(JSON.parse(xhr));
    //     if(typeof cb == 'function'){
    //         cb(true);
    //     }
    // });
}

window.onhashchange = function () {
    if (location.hash != "#menu_open") {
        $("#srch_menu,#cover_menu,#cover_wrap,html").removeClass("open");
    }
	if (location.hash != "#open") {
        $("#detail_layer,html").removeClass("detail_open");
    }
};

function render(tmpl_name, tmpl_data) {
    if ( !render.tmpl_cache ) { 
        render.tmpl_cache = {};
    }

    if ( ! render.tmpl_cache[tmpl_name] ) {
        var tmpl_dir = '/templates';
        var tmpl_url = tmpl_dir + '/' + tmpl_name + '.html';

        var tmpl_string;
        $.ajax({
            url: tmpl_url,
            method: 'GET',
            async: false,
            success: function(data) {
                tmpl_string = data;
            }
        });

        render.tmpl_cache[tmpl_name] = _.template(tmpl_string);
    }

    return render.tmpl_cache[tmpl_name](tmpl_data);
}