$(document).ready(function(){


$('.date').mask('00/00/0000');
$('.cep').mask('00000-000');
$('.tel').mask('(00) 00000-0000');

$(".btn_menu").on("click", function(){

	$(".mobile_menu").slideToggle(); 
	$(".over_bg").toggleClass("active"); 
});

$(".over_bg").on("click", function(){
	$(".mobile_menu").toggleClass("active");
	$(".over_bg").toggleClass("active");
});

$(".btn_montar_cesto").on("click", function(){
	
	pos = $("#monte-seu-cesto").offset();
	posy = pos.top - 100;
	$("html,body").animate({scrollTop: posy },400);
});

$(".mod_info .btn.btn-primary").on("click", function(){

	$("#modal_cep").modal("show");

});

$("#btn_cep").on("click", function(){
	cep = $("#modal_cep input").val();
	console.log("cep:"+cep);
	if( cep == "00000-000" )
	{
		$("#modal_cep").modal("hide");
		$("#modal_cobertura").modal("show");
	}
	if(cep == "55555-555")
	{
	   window.location.assign("/cesto");
	}
});



if( $("#bannerHome").length > 0 )
{
	function resizeBannerVideo()
	{
		win_h = $(window).height();
		new_h = win_h - 225;
		$("#bannerHome .item").css("height", new_h);
	}
	resizeBannerVideo();
	$(window).resize(function(){resizeBannerVideo();});

	function toggleVideo(video)
	{
		src = $("#video_frame").attr("src");
		if( video == true )
		{
			$(".bg_overlay").addClass("active");
			$(".btn_video").removeClass("active");
		}
		if( video == false )
		{
			$('#video_frame').attr("src","");
			$(".bg_overlay").removeClass("active");
			$(".btn_video").addClass("active");
			$('#video_frame').attr("src",src);
		}
	}

	$(".btn_video").on("click",function(){toggleVideo(true);});
	$(".bg_overlay").on("click",function(){toggleVideo(false);});
}



if( $(".wow").length > 0 )
{

	function numberCount( el ) {
	  el.addEventListener('animationend', function( event ) {

	  	if($(this).attr("data-number"))
	  	{
			number_count = $(this).attr("data-number");
			$(this).find("span").animateNumber({ number: number_count },1000);
	  	}
	  });
	}

	new WOW({ callback: numberCount}).init();
}

$(".jslider").each(function(){

	min = $(this).attr("data-min");
	max = $(this).attr("data-max");
	jstep = $(this).attr("data-step");
	jwidth = $(this).width();

$(this).jRange({
    from: min,
    to: max,
    step: jstep,
    width:jwidth,
    showLabels: false,
    showScale: false,
    snap: true/*,
    onstatechange: function(value){
    	console.log(value);
    }*/
});



});
$(".jslider").change(function(){
	valor = $(this).val();
	$(this).parent().parent().find(".valor").html(valor);
});


if( $("#bannerHome").length > 0 )
{
	$("#modal_promo").modal('show');
}

if( $("#modal_cesto").length > 0 )
{
	$("#modal_cesto").modal('show');
}


$(".btn_cadastro").on("click", function(event){
	event.preventDefault();
	step = $(this).attr("data-step");
	$(".cadastro_step").removeClass("show");
	$(".cadastro_step.step_"+step+"").addClass("show");
});

$(".cesto_custom h3").on("click", function(){
	console.log("teste");
	$(this).find("i").toggleClass("show");
	$(this).parent().find(".content").slideToggle();

});


});