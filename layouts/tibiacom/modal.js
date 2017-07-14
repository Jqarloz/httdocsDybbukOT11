$(document).ready(function(){
	$('#modal1').click(function(){
		$('#Omodal1').toggle('slow');
	});
	$('.modal').click(function(){
		$(this).css({display: "none"});
	});
});