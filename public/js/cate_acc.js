$(document).ready(function () {
    function close_accordion_section() {
        $('.upper_cate,.lower_cate > ul > li > a.active').removeClass('cate_active');
        $('.lower_cate').slideUp(300).removeClass('cate_open');
    }

    $('.upper_cate').click(function (e) {
        // Grab current anchor value
        var currentAttrValue = $(this).attr('href');

        if ($(e.target).is('.cate_active')) {
            close_accordion_section();
        } else {
            close_accordion_section();

            // Add active class to section title
            $(this).addClass('cate_active');
            // Open up the hidden content panel
            $('.accordion_cate ' + currentAttrValue).slideDown(300).addClass('cate_open');
        }
        var moveid = $(this).attr("href");
        $(html,body).animate({scrollTop:moveid},600);
    
        e.preventDefault();
        
    });
});