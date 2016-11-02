function QuotesRotation() {
	var $next;

	if ( jQuery('.quote.active').is(':last-of-type') ) {
		jQuery('.quote.active').removeClass('active');
		jQuery('.quote:first-of-type').addClass('active');
	} else {
		jQuery('.quote.active').removeClass('active').next().addClass('active');
	}
}