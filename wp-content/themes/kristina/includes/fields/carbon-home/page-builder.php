<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;
use Carbon_Fields\Helper\Helper;

include ('elements.php');

Container::make( 'post_meta', __( 'Page Builder', 'crb' ) )
  ->show_on_template(array(
    'templates/home.php',
  ))
  ->add_fields( array(
    Field::make( 'complex', 'carbon_sections', 'Sections' )
    ->set_layout('tabbed-vertical')

  )); // end add_fields;
