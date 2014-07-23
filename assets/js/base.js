jQuery(document).ready(function($)
{
	// add class for Chrome on Windows (temporary)
	if (navigator.userAgent.indexOf('Chrome') !== -1 && navigator.userAgent.indexOf('Windows') !== -1) {
		$('html').addClass('chrome-win');
	}
});
