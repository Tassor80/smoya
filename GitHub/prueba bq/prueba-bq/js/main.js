$( document ).ready(function() { //DOM OK! 
	
	function desplegarMenu(elemento){
		$(elemento).next("ul").slideToggle();
	}

	$( ".sub-menu" ).click(function() {
	    desplegarMenu($(this));
	});
});	