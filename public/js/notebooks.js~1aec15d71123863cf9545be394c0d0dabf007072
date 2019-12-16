$(".notes-container>li>a").click(function(e){
  var num_elements=$(this).next().children().length;
  var total_length=($(this).next().find("a").outerHeight())*num_elements;
  if($(this).next().css('max-height')=="0px"){
      $(this).next().css('max-height',total_length);
  }
  else{
      $(this).next().css('max-height',0);
      $(this).next().find('.lastnotes-container.open').removeClass('open');

  }
});

$(".subnotes-container>li>a").click(function(e){
    $(".lastnotes-container").each(function(e){
      $(this).removeClass('open');
    });
      $(this).next().toggleClass('open');
});
