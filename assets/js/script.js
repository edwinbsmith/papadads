$(document).ready(function() { 
	$('ul.menu').superfish({ 
		delay:       600,                            // one second delay on mouseout 
		animation:   {height:'show'},  // fade-in and slide-down animation 
		speed:       'normal',                          // faster animation speed 
		autoArrows:  false,                           // disable generation of arrow mark-up 
		dropShadows: false                            // disable drop shadows 
	});
	
	var pathname = window.location.pathname;
	var thisPage = pathname.substring(pathname.lastIndexOf('/') + 1, pathname.lastIndexOf('.'));
	//console.log(thisPage);
	
	$("#menu_" + thisPage).addClass("active");
}); 