$(document).ready(function(){
  
});

var aprenderHeight = $("#scroll-aprender").height();
var probarHeight = $("#scroll-probar").height();
var comprarHeight = $("#scroll-comprar").height();
var aprenderOffset = $("#scroll-aprender").offset().top;
var probarOffset = $("#scroll-probar").offset().top;
var comprarOffset = $("#scroll-comprar").offset().top;
var aprenderOut = aprenderOffset + aprenderHeight;
var probarOut = probarOffset + probarHeight;
var comprarOut = comprarOffset + comprarHeight;
var tagAprender = $('#tag-aprender');
var tagProbar = $('#tag-probar');
var tagComprar = $('#tag-comprar');


$(window).on('scroll', function(){
    var scrollPosition = $(window).scrollTop();

    if ((scrollPosition > aprenderOffset)) {
      $('.tag').removeClass('d-block');
      $('.tag').addClass('d-none');
      tagAprender.removeClass('d-none');
      tagAprender.addClass('d-block');
    } else {
      tagAprender.removeClass('d-block');
      tagAprender.addClass('d-none');
    }

    if ((scrollPosition > probarOffset)) {
      $('.tag').removeClass('d-block');
      $('.tag').addClass('d-none');
      tagProbar.removeClass('d-none');
      tagProbar.addClass('d-block');
    } else {
      tagProbar.removeClass('d-block');
      tagProbar.addClass('d-none');
    }

    if ((scrollPosition > comprarOffset)) {
      $('.tag').removeClass('d-block');
      $('.tag').addClass('d-none');
      tagComprar.removeClass('d-none');
      tagComprar.addClass('d-block');
    } else {
      tagComprar.removeClass('d-block');
      tagComprar.addClass('d-none');
    }

});

