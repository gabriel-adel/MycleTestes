$(function(){
    $(".slider").slick({
        dots: true,
  infinite: true,
  speed: 300,
  slidesToShow: 1,
  centerMode: true,
  variableWidth: true
    });
});


$('.painel button').click(function() {
    $(this).parent().toggleClass('painel-aberto');
   })