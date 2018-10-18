$(document).ready(function(){
  var offsetApr = $('#scroll-aprender').offset().top - $('#scroll-aprender').height();
  var offsetPro = $('#scroll-probar').offset().top - $('#scroll-probar').height();
  var offsetCom = $('#scroll-comprar').offset().top - $('#scroll-comprar').height();
  var offsetCarousel = $('#carouselHeader').offset().top - $('#carouselHeader').height();

  $('.lengueta').hide();
  $('.tag').hide();

  $(window).scroll(function(){

            if ($(this).scrollTop() > offsetCarousel) {
              $('.lengueta').fadeIn();
            }else{
              $('.lengueta').fadeOut();
            }

            if ($(this).scrollTop() > offsetApr) {
              
              $('#tag-aprender').show();
            }else{
              $('#tag-aprender').hide();
            }

            if ($(this).scrollTop() > offsetPro) {
              $('#tag-probar').show();
            }else{
              $('#tag-probar').hide();
            }

            if ($(this).scrollTop() > offsetCom) {
              $('#tag-comprar').show();
            }else{
              $('#tag-comprar').hide();
            }
          });
});

