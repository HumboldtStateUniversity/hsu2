<?php
	
	# menu tree style navigation
	
	function hsu2_preprocess_page(&$variables) {
		$main_menu_tree = menu_tree_all_data('main-menu');
		$variables['main_menu_expanded'] = menu_tree_output($main_menu_tree);
	}

	# change title of contact page to "Contact Us"

	function hsu2_form_contact_site_form_alter(&$form, &$form_state) {
	  drupal_set_title('Contact Us');
	}

		
?>
