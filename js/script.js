$(document).ready(function() {
	
	// Collapsable sidebar for non-touch devices capable of animation. 
	if (Modernizr.opacity && !Modernizr.touch) {
		$("aside").wpSidebar();
	}
	// Space out the WordPress sidebar list on touch devices for better usability.
	else if (Modernizr.touch) {
		$("aside").touchSidebar();				
	}
		
});






















