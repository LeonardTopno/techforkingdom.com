
// JavaScript contact form Document
$(document).ready(function() {
	$('form#contact-form').submit(function(event) {
		event.preventDefault();

		var $form = $(this);
		var $button = $('#submitButton');
		$form.find('.error, .success').remove();
		$button.prop('disabled', true).text('Sending...');
		$('#loader').show();

		$.ajax({
			url: 'contact.php',
			type: 'POST',
			data: new FormData(this),
			contentType: false,
			cache: false,
			processData: false,
			dataType: 'json',
			success: function(data) {
				var message = data && data.message ? data.message : 'Thank you. Your email was sent successfully.';
				$form.slideUp('fast', function() {
					$form.before('<div class="success">' + message + '</div>');
				});
			},
			error: function(xhr) {
				var message = 'Sorry, your email could not be sent. Please try again or email leo@techforkingdom.com directly.';

				if (xhr.responseJSON && xhr.responseJSON.message) {
					message = xhr.responseJSON.message;
				}

				$form.prepend('<div class="error">' + message + '</div>');
			},
			complete: function() {
				$('#loader').hide();
				$button.prop('disabled', false).text('Send Message');
			}
		});
	});
});
