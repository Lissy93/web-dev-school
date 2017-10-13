
$(document).ready(function(){
	$('.read-more-btn').click(function() {
		$(this).prev().toggleClass( "showing", 1000, "easeOutSine" );
		var text = $(this).text();
		$(this).text(text == "Read More" ? "Show Less" : "Read More");
	});	
});