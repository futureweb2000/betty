

$("#click1").click(function(){

	$("#click1").addClass("dise");
	$("#click3").removeClass("dise");
	$("#click2").removeClass("dise");

	$(".history").addClass("displayed");
	$(".vision").addClass("display-none");
	$(".vision").removeClass("displayed");
	$(".mision").removeClass("displayed");

	$(".mision").addClass("display-none");


});


$("#click2").click(function(){
	$("#click2").addClass("dise");
	$("#click1").removeClass("dise");
	$("#click3").removeClass("dise");

	$(".history").addClass("display-none");
	$(".history").removeClass("displayed");
	$(".vision").removeClass("display-none");
	$(".vision").addClass("displayed");
	$(".mision").addClass("display-none");
	$(".mision").removeClass("displayed");



});

$("#click3").click(function(){

	$("#click3").addClass("dise");
	$("#click1").removeClass("dise");
	$("#click2").removeClass("dise");

	$(".history").addClass("display-none");
	$(".history").removeClass("displayed");

	$(".vision").addClass("display-none");
	$(".vision").removeClass("displayed");
	$(".mision").addClass("displayed");
	$(".mision").removeClass("display-none");



});




