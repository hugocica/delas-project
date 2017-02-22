jQuery(document).ready(function($) {
	$('button.navbar-toggle').bind('click', function(event) {
		if ( $('.main-navigation-bar').hasClass('opened') ) {
			$(this).removeClass('opened');
			$('.main-navigation-bar').removeClass('opened');
		} else {
			$(this).addClass('opened');
			$('.main-navigation-bar').addClass('opened');
		}
	});
});

function QuotesRotation() {
	var $next;

	if ( jQuery('.quote.active').is(':last-of-type') ) {
		jQuery('.quote.active').removeClass('active');
		jQuery('.quote:first-of-type').addClass('active');
	} else {
		jQuery('.quote.active').removeClass('active').next().addClass('active');
	}
}