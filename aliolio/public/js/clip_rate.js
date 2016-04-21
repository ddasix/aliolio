$(function () {
    $('.clip_toggle').on('click', function () {
        if ($(this).hasClass('select')) {
            $(this).removeClass('select');
            $('.clip_fixed').removeClass('select');
            $(this).html(function (i, val) {
                return val * 1 - 1
            });
        } else {
            $(this).addClass('select');
            $('.clip_fixed').addClass('select');
			$('.clip_alert').attr('style','display:normal;');
				setTimeout(function(){
					$(".clip_alert").attr('style','display:none;');
				}, 2000);
            $(this).html(function (i, val) {
                return val * 1 + 1
            });
        }
    });
});

$(function () {
    $('.clip_fixed').on('click', function () {
        if ($('.clip_fixed,.clip_toggle').hasClass('select')) {
            $('.clip_fixed,.clip_toggle').removeClass('select');
            $('.clip_toggle').html(function (i, val) {
                return val * 1 - 1
            });
        } else {
            $('.clip_fixed,.clip_toggle').addClass('select');
			$('.clip_alert').attr('style','display:normal;');
				setTimeout(function(){
					$(".clip_alert").attr('style','display:none;');
				}, 2400);
            $('.clip_toggle').html(function (i, val) {
                return val * 1 + 1
            });
        }
    });
});