$(document).ready(function(){

$("#peca_familia_filter select").on("change",function(){
  console.log("peca_familia_filter");
  $("#peca_familia_filter").submit();

});


$(".mod_faq h3").on("click", function(){$(this).parent().toggleClass("show");$(this).siblings().slideToggle();});

$(".chosen-select").chosen();

//end of document	
});