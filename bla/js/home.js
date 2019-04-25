var banners = ["img/teste.png","img/teste2.png","img/teste3.png"];
var bannerAtual = 0;

function trocaBanner(){
    bannerAtual = (bannerAtual + 1) % 3;
    document.querySelector('.banner-destaque img').src = banners[bannerAtual];

}
var timer = setInterval(trocaBanner,4000);
var controle = document.querySelector('.pause');
/* 
controle.onclick = function(){
    if(controle.className == 'pause'){
        clearInterval(timer);
        controle.className = 'play';
    }else{
        timer = setInterval(trocaBanner, 4000);
        controle.className ='pause';
    }
    return false;
}
*/
$('.painel button').click(function() {
    $(this).parent().toggleClass('painel-aberto');
   })