$(document).ready(function ($) { 
    $(".cpf").mask('000.000.000-00', {reverse: true});
    $(".celular").mask('(00) 00000-0000', {reverse:false});
    $(".telefone").mask('(00) 0000-0000', {reverse:false});
    $(".cep").mask('00000-000', {reverse:true});
    $(".numero").mask('00000000', {reverse:true});
    
});