// JavaScript Document


//obxecto img fillo de div.entradac presentar con efecto slide e sair con efecto fade
$(document).ready(function(){
  	$("div.entradac").hover(function() {
		$(this).children("img").css("display", "none");
		$(this).children("img").slideDown();
		$(this).children("img").css("display", "inline");
		}, function() {
		$(this).children("img").fadeOut(500,0);
		$("div entradac").children("img").css("display", "none");}
);});