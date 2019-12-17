// First sidebar animation
$(".notes-container>li>a").click(function(e){
  var num_elements=$(this).next().children().length;
  var total_length=($(this).next().find("a").outerHeight())*num_elements;
  if($(this).next().css('max-height')=="0px"){
      $(this).css({
        'color':'#fff',
        'padding':'1.5em 0 1.5em 3.5em'
      });
      $(this).next().css('max-height',total_length);
      $(this).siblings(".note-bg").css('width','100%');
  }
  else{
      $(this).css({
        'color':'#000',
        'padding':'1.5em 0 1.5em 5em'
      });
      $(this).next().css('max-height',0);
      $(this).next().find('.lastnotes-container.open').removeClass('open');
      $(this).siblings(".note-bg").css('width','59px');

  }
});

//Second sidebar animation
$(".subnotes-container>li>a").click(function(e){
    $(this).next().toggleClass('open');
    $(".lastnotes-container.open").not($(this).next()).each(function(e){
      $(this).removeClass('open');
    });
});


// Coloring the different notes


var colors = ['#e74c3c', '#3498db', '#27ae60', '#9b59b6','#f1c40f','#1abc9c','#2c3e50','#d35400'];

$(".notes-container>li .note-bg").each(function(index){
  $(this).css('background',colors[index]);
});
