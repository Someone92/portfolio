$(document).ready(function() {
    // Navigation Click
	$("nav a[href^='#']").on('click', function(e) {
		e.preventDefault();
		var hash = this.hash;
		$('html, body').animate({
			scrollTop: $(hash).offset().top
		}, 300, function() {
			window.location.hash = hash;
		});
	});
    
    // Responsive menu
    $(".hamburger").click(function() {
        $(this).toggleClass("clicked");
    });
});