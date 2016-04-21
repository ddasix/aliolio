        $(".previous_btn").click(function () {
            $(".popup,.cover_wrap,html").addClass("opened");
            window.location.hash = "#feedback_open";
        });
        window.onhashchange = function () {
            if (location.hash != "#feedback_open") {
                $(".popup,.cover_wrap,html").removeClass("opened");
            }
        };