(function($){
	$(document).ready(function(){
		
		$('a.toggle-bars').click(function(){
			
			
			$('.right-menu .drop-menu').slideToggle();
			
			return false;
			
			
		});
		
		$("body").click(function() {
		  if ($(".right-menu .drop-menu").is(":visible")) {
			$(".right-menu .drop-menu").toggle("slide");
		  }
		});
		
		
		
		
		
		
		$('a.search-ttoggle').click(function(){
			
			
			$('.search-options ').slideToggle();
			
			return false;
			
			
		});
		
		$("bod").click(function() {
		  if ($(".search-options ").is(":visible")) {
			$(".search-options ").toggle("slide");
		  }
		});
		
		
		
		
		
		
		
		
	});
})(jQuery)