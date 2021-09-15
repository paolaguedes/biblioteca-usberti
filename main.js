$(document).ready(function() {
    var botao = $('.bt'); //onde vai clicar
    var dropDown = $('.infos_adicionais'); //o que vai abrir
   
       botao.on('click', function(event){
           dropDown.stop(true,true).slideToggle();
           event.stopPropagation();
       });
   });