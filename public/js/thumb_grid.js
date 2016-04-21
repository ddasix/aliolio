$(window).load(function(){
    $('.thumb_grid').masonry({
        itemSelector: '.thumb_product',
        columnWidth: '.thumb_product',
        percentPosition: true
    });
});