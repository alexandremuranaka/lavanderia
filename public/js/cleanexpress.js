$(document).ready(function(){

    $("#pacote_pecas_lista").on("click","li",function(){
        $(this).addClass("selected");
    });

    $("#pacote_items").on("click","li",function(){
        $(this).addClass("removed");
    });

    $("#btn_pacote_add").on("click",function(){
    	item = $("#pacote_pecas_lista").find("li.selected");
    	$("#pacote_pecas_lista").find("li.selected").remove();
    	$(item).appendTo("#pacote_items");

    });
    
    $("#btn_pacote_remove").on("click",function(){
    	item_removed = $("#pacote_items").find("li.removed");
    	$("#pacote_pecas_lista").find("li.removed").remove();
    	$(item_removed).appendTo("#pacote_pecas_lista");

    });


});