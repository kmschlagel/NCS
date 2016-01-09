jQuery(function($) {
		$('.myMenu > li').bind('mouseover', openSubMenu);
		$('.myMenu > li').bind('mouseout', closeSubMenu);
		
		function openSubMenu() {
			$(this).find('ul').css('visibility', 'visible');	
		};
		
		function closeSubMenu() {
			$(this).find('ul').css('visibility', 'hidden');	
		};
		
		

	
	
	//for gallery page
	
	$("#gallerythumbs img").fadeTo("slow", 0.6); // This sets the opacity of the thumbs to fade down to 60% when the page loads

	$("#gallerythumbs img").hover(function(){
		$(this).fadeTo("medium", 1.0); // This should set the opacity to 100% on hover
	},function(){
   		$(this).fadeTo("medium", 0.6); // This should set the opacity back to 60% on mouseout
	});
	
	$("#gallerythumbs2 img").fadeTo("slow", 0.6); // This sets the opacity of the thumbs to fade down to 60% when the page loads

	$("#gallerythumbs2 img").hover(function(){
		$(this).fadeTo("medium", 1.0); // This should set the opacity to 100% on hover
	},function(){
   		$(this).fadeTo("medium", 0.6); // This should set the opacity back to 60% on mouseout
	});
	

});
