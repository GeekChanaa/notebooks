// Array of colors
var colors = ['#3498db', '#e67e22', '#27ae60', '#9b59b6','#1abc9c','#34495e'];


// First sidebar animation
$(".notes-container>li>a").click(function(e){
  var num_elements=$(this).next().children().length;
  var total_length=($(this).next().find("a").outerHeight())*num_elements;
  if($(this).next().css('max-height')=="0px"){
      $(this).css({
        'padding':'1.5em 0 1.5em 3.7em',
        'color':$(this).siblings(".note-bg").css('background-color'),
        'font-size':'13px'
      });
      $(this).next().css('max-height',total_length);
      $(this).siblings(".note-bg").css('height',total_length+59);
      $(this).siblings("svg").css({
        'fill':$(this).siblings(".note-bg").css('background-color'),
        'width':'14px',
        'height':'14px'
      });
  }
  else{
      $(this).css({
        'padding':'1.5em 0 1.5em 4.2em',
        'color':'#8a8a8a',
        'font-size':'13px'
      });
      $(this).next().css('max-height',0);
      $(this).next().find('.lastnotes-container.open').removeClass('open');
      $(this).siblings(".note-bg").css('height','59px');
      $(this).siblings("svg").css({
        'fill':'#525252',
        'width':'15px',
        'height':'15px'
      });

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

$(".notes-container>li .note-bg").each(function(index){
  $(this).css('background',colors[index]);
});

// Inserting the icons from jquery for a clean html code

$(".subnotes-container>li>a").prepend($(".subnotes-container>li>a").prev("#arrow-right"));

// Coloring the arrows of each section

$(".notes-container>li").each(function(index){
  $(this).find(".subnotes-container svg").css('fill',colors[index]);
});
