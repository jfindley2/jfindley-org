$(document).ready(function(){

	// jQuery Form Processor
	$('#form').submit(function(e){
		// grab the form. Use the form id
		var form = $('#form');

		// send form data to mailer.php
		$.ajax({
			type: 'POST',
			url: form.attr('action'),
			data: form.serialize(),
			success: function(ajaxOutput) {
				// clear the output area's formatting
				$("#output-area").css("display", "");

				// write the server's reply to the output area
				$("#output-area").html(ajaxOutput);

				// reset the form if it was successful
				if($(".alert-success").length >= 1) {
					$("#contact-form")[0].reset();
				}
			}
		});
		e.preventDefault();Adde
	});// end JQuery Form Processor

});/*end document.ready()*/