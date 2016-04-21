$(window).load(function () {
    var $grid = $('.thumb_grid').masonry({
        itemSelector: '.thumb_product',
        columnWidth: '.thumb_product',
        percentPosition: true
    });
    $grid.on('click', '.clip_toggle', function () {
        if ($(this).hasClass('select')) {}else{
            $(this).parent().parent().remove();
            $grid.masonry('layout');
        }
    });
});