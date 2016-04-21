$(window).load(function(){
    $('.grid').masonry({
        itemSelector: '.product',
        columnWidth: '.product',
        percentPosition: true
    });
});