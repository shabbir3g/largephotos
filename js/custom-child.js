(function($){
	$(document).ready(function(){
		
		$('a.toggle-bars').click(function(){
			
			
		$('.right-menu .drop-menu ul').toggle();
			
			return false;
			
			
		});
		
		$("body").click(function() {
		  if ($(".right-menu .drop-menu ul").is(":visible")) {
			$(".right-menu .drop-menu ul").toggle("slide");
		  }
		});
		
		
		
		
		
		
		$('a.search-ttoggle').click(function(){
			
			
			$('.search-options ').toggle();
			
			return false;
			
			
		});
		
		$("bod").click(function() {
		  if ($(".search-options ").is(":visible")) {
			$(".search-options ").toggle("slide");
		  }
		});
		
		
		
		
		
		
		
		
	});
})(jQuery)