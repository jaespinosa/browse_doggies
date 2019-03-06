/**
 * admin.js
 *
 * Handles behaviour of the active menus and isotope
 */
(function(jQuery){
    jQuery(function(){


		// init Isotope
		var $grid = jQuery('.grid').isotope({
		  	itemSelector: '.element-item',
		  	layoutMode: 'fitRows'
		});


		// bind filter button click
		jQuery('#filters').on( 'click', 'button', function() {
		  	var filterValue = jQuery( this ).attr('data-filter');
		  	$grid.isotope({ filter: filterValue });
		});

		// change is-checked class on buttons
		jQuery('.button-group').each( function( i, buttonGroup ) {
		  	var $buttonGroup = jQuery( buttonGroup );
		  	$buttonGroup.on( 'click', 'button', function() {
		   		$buttonGroup.find('.is-checked').removeClass('is-checked');
		    	jQuery( this ).addClass('is-checked');
		  	});
		});


		//add active class to menu
		var url = window.location.href;
		var value = url.substring(url.lastIndexOf('doggies/') + 8);
		value = value.substring(0, value.length - 1);

		if (value == '') {
			jQuery('.nav-item.home').addClass('active');
		} else {
			jQuery('.nav-item.'+value).addClass('active');
		}
		
  
	}); // end of document ready
})(jQuery); // end of jQuery name space