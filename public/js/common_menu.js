        $(".menu_icon").click(function () {
            $("#cover_menu,#cover_wrap,html").addClass("opened");
            window.location.hash = "#menu_open";
        });
        $(".srch_icon").click(function () {
            $("#srch_menu,#cover_wrap,html").addClass("opened");
            window.location.hash = "#menu_open";
        });
        window.onhashchange = function () {
            if (location.hash != "#menu_open") {
                $("#srch_menu,#cover_menu,#cover_wrap,html").removeClass("opened");
            }
        };