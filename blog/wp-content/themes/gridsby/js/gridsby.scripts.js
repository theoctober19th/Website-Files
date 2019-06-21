(function($) {
	
	$(document).ready(function() {
		$('.toggle-menu').jPushMenu();
 	}); 
})( jQuery ); 
	
var share_button_left = new Share(".share-button-left", {
      title: "Share this!",
      ui: {
        flyout: "top left",
        button_text: "Share"
      },
      networks: {
        facebook: {
            
        }
      }
    });
	
	 