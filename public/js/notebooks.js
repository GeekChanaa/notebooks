$(".notes-container>li>a").click(function(e){
  var num_elements=$(this).next().children().length;
  var total_length=$(this).next().children().height()*num_elements;
  if($(this).next().css('max-height')=="0px"){
      $(this).next().css('max-height',total_length);
  }
  else{
      $(this).next().css('max-height',0);
  }
});

$(".subnotes-container>li>a").click(function(e){
    $(this).next().toggleClass('open');
});
