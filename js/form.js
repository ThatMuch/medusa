$(document).on('focus active', 'input', function () {
		$('label[for=' + $(this).attr('id') + ']').addClass('active');
	});
$(document).on('blur', 'input', function () {
		$('label[for=' + $(this).attr('id') + ']').removeClass('active');
	});
$(document).on('focus active', 'textarea', function () {
		$('label[for=' + $(this).attr('id') + ']').addClass('active');
	});
$(document).on('blur', 'textarea', function () {
		$('label[for=' + $(this).attr('id') + ']').removeClass('active');
	});

$(document).on('invalid', 'textarea', function () {
		$('label[for=' + $(this).attr('id') + ']').removeClass('alert');
	});

