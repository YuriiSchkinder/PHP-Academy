$(document).ready(function () {
    $('.w3-row-padding').children().each(function () {
        $(this).animate({
            right:0,
            left:0,
        });
    });
  setTimeout(checkAnimate,500);
  var i=0;
  setTimeout(function () {                   // я невпевнений стосовно цієї функції,
      $('.block').each(function () {        //може це якось по-іншому реалізувати?
          setInterval(block(this),1000*i) ;
          i++;
      });
  },500);

});
$(window).scroll(checkAnimate);
function block(elem) {
   return function () {
       $(elem).fadeIn();
   }
}
function checkAnimate () {
    var bootomLine=$(window).height()+$(window).scrollTop();
    $('.progress-bar:not(:animated):not(.animated)').each(function () {
        var elementBottom = $(this).offset().top +$(this).height();
        if(elementBottom<=bootomLine){
            $(this).addClass('animated').animate({
               width: $(this).data('width'),
            },{
                progress:function (animate,percent) {
                   var max=parseInt($(this).data('width'));
                   var current=Math.round(max*percent);
                   $(this).text(current+"%");
                }
            });
        }
    });
}

