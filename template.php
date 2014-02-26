<?php

  function hsu2_preprocess_html(&$variables) {
  # add web font  
    drupal_add_css('//fonts.googleapis.com/css?family=Droid+Serif:400,700', array('type' => 'external'));
  }
	
	function hsu2_preprocess_page(&$variables) {
  # menu tree style navigation
		$main_menu_tree = menu_tree_all_data('main-menu');
		$variables['main_menu_expanded'] = menu_tree_output($main_menu_tree);
  
  # switch css for navigation layout -- vertical vs horizontal
    $navigation = theme_get_setting('navigation_layout');

    $css_path = drupal_get_path('theme', 'hsu2') . '/_/css/';
    if ($navigation == 'vertical'){
      drupal_add_css($css_path . 'vertical.css', array('group' => CSS_THEME));
    } else {
      drupal_add_css($css_path . 'horizontal.css', array('group' => CSS_THEME));
    }

  # set variable for breadcrumbs
    $variables['breadcrumb_status'] = theme_get_setting('breadcrumb_status');

  # set variables for photos

    # single image
    $image_path = drupal_get_path('theme', 'hsu2') . '/_/img/banner/';
    $image_file = theme_get_setting('photos_select') . '.jpg';
    $variables['photos_select'] = $image_path . $image_file;

    #rotate images

    $rotate = theme_get_setting('photos_rotate');
    $variables['photos_rotate'] = $rotate;


    #add js for rotating
    $js_path = drupal_get_path('theme', 'hsu2') . '/_/js/';

    if ($rotate == 1){
      drupal_add_js($js_path . 'jquery.cycle.all.js', array('group' => JS_LIBRARY));
      if ($variables['is_front']) {
        drupal_add_js('(function ($) {$("#photos ul").cycle({fx:"fade",random:1,fit:1});}(jQuery));', array('type' => 'inline', 'scope' => 'header', 'every_page' => FALSE, 'weight' => 5));
      }
    }

    $directory = $image_path;
    $images = glob($directory . "*.jpg");

    $photos = array();

    foreach($images as $image) {
      $photos[] = '<img src="' . $image . '" alt=" " />';
    }

    $variables['all_photos'] = theme('item_list', array('items' => $photos));;
  }


  function hsu2_preprocess_node(&$variables){

  # override variables on node links
    $variables['content']['links']['#attributes']['class'] = array('nodelinks', 'clearfix');

  }

 