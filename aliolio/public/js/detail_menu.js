        $("#menu_icon").click(function () {
            $("#detail_menu,#cover_wrap,html").addClass("opened");
            window.location.hash = "#menu_open";
        });
        $("#srch_icon").click(function () {
            $("#srch_menu,#cover_wrap,html").addClass("opened");
            window.location.hash = "#menu_open";
        });
        $("#share_icon").click(function () {
            $("#sns_layer,#cover_wrap,html").addClass("opened");
            window.location.hash = "#menu_open";
        });
        window.onhashchange = function () {
            if (location.hash != "#menu_open") {
                $("#sns_layer,#srch_menu,#detail_menu,#cover_wrap,#cover_wrap,html").removeClass("opened");
            }
        };