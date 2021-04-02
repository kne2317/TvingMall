

$(document).ready(function() {

	$('#program_nav_ul1').hover(function() {

		$("#nav_program").show();

	});
	
	$('nav>ul>li:nth-child(2)').hover(function() {

		$("#nav_program").hide();

	});
	$('#logo').hover(function() {

		$("#nav_program").hide();

	});
	$('#gallary').hover(function() {

		$("#nav_program").hide();

	});
	$('#nav_program').hover(function() {

		$("#nav_program").show();

	},function() {

		$("#nav_program").hide();

	});
	$('#programName>li').click(function() {

		$(this).css('color','#f5f2eb');
		$(this).css('background-color','#5a5750');

	});


});

