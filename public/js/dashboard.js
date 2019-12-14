$(".notes-container>li>a").click(function(e){
  
});

$(".subnotes-container>li>a").click(function(e){
  $(this).next().find('.open').each(function(e){
      $(this).removeClass('open');
  });
  $(this).next().toggleClass('open');
  $(this).parent().toggleClass('open');

});
