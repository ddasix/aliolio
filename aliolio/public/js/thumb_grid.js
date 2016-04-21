$(window).load(function () {
    var $grid = $('.thumb_grid').masonry({
        itemSelector: '.thumb_product',
        columnWidth: '.thumb_product',
        percentPosition: true
    });
});