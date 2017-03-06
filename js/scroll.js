	$(document).ready(function() {
		$('.call-to-action').on('click', function() { // Au clic sur un élément
			var page = $(this).attr('href'); // Page cible
			var speed = 750; // Durée de l'animation (en ms)
			//var nav = $('nav').offset();
			//$(this).css("bottom",10);
			$('html, body').animate( { scrollTop: $(page).offset().top + 15}, speed ); // Go
			return false;
			
		});
	});