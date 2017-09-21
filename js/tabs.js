$(document).ready(function(){

	$('.marketing').on('click', function(){

		$('.item_serv1').fadeIn();
		$('.item_serv2').fadeOut();
		$('.item_serv3').fadeOut();
		$('.item_serv4').fadeOut();

	})

	$('.advertising').on('click', function(){

		$('.item_serv2').fadeIn();
		$('.item_serv1').fadeOut();
		$('.item_serv3').fadeOut();
		$('.item_serv4').fadeOut();

	})

	$('.cloud').on('click', function(){

		$('.item_serv3').fadeIn();
		$('.item_serv1').fadeOut();
		$('.item_serv2').fadeOut();
		$('.item_serv4').fadeOut();

	})

	$('.consulting').on('click', function(){

		$('.item_serv4').fadeIn();
		$('.item_serv1').fadeOut();
		$('.item_serv2').fadeOut();
		$('.item_serv3').fadeOut();

	})
})