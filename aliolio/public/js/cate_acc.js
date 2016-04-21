$(document).ready(function(){
    
  var allPanels = $('.lower_cate').hide();
    
  $('.upper_cate').click(function() {
     $(this).slideDown(500);
    $(this).next().slideToggle();
      $(this).addClass('cate_active');
  });

});