<?php

  function hsu2_form_system_theme_settings_alter(&$form, $form_state){


  // Add Javascript to remove the no-js class from <html>.
  drupal_add_css(drupal_get_path('theme', 'hsu2') . '/theme-settings/settings.css');

  // turn off access for logo & favicon
  $form['theme_settings']['toggle_logo']['#access'] = FALSE;
  $form['theme_settings']['toggle_favicon']['#access'] = FALSE;
  $form['logo']['#access'] = FALSE;
  $form['favicon']['#access'] = FALSE;


  // Collapse Toggle Display
  $form['theme_settings']['#collapsible'] = TRUE;
  $form['theme_settings']['#collapsed'] = TRUE;


  /* checkbox to toggle breadcrumbs

    */
    $form['theme_settings']['breadcrumb_status'] = array(
      '#type' => 'checkbox',
      '#title' => t('Breadcrumbs'),
      '#default_value' => theme_get_setting('breadcrumb_status'),
    );

  /* radio buttons to select navigation layout

  */
    $form['navigation'] = array(
      '#type' => 'fieldset',
      '#title' => t('Navigation settings'),
    );
    $form['navigation']['navigation_layout'] = array(
      '#type' => 'radios',
      '#title' => t('Select a navigation layout'),
      '#options' => array(
        'vertical' => t('Vertical'),
        'horizontal' => t('Horizontal'),
      ),
      '#default_value' => theme_get_setting('navigation_layout'),
    );

  /* array of photos form with radio buttons following

  */

    $photos_list = array(
      '1' => t('Flowers'),
      '2' => t('Field Work'),
      '3' => t('Beach'),
      '4' => t('Volkswagen'),
      '5' => t('Painting')
    );


    $form['photos'] = array(
      '#type' => 'fieldset',
      '#title' => t('Homepage photo selection'),
    );


    $form['photos']['photos_select'] = array(
      '#type' => 'radios',
      '#title' => t('Select a to display'),
      '#options' => $photos_list,
      '#default_value' => theme_get_setting('photos_select'),
      '#states' => array(
        'disabled' => array(
          ':input[name="photos_rotate"]' => array('checked' => TRUE),
        ),
      ),
    );

  /* checkbox to toggle photo rotate

  */

    $form['photos']['photos_rotate'] = array(
      '#type' => 'checkbox',
      '#title' => t('Display all photos in a slideshow'),
      '#default_value' => theme_get_setting('photos_rotate'),
    );



  }
