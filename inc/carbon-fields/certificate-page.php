<?php

if( ! defined('ABSPATH') ) exit;

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_certificates_post_meta' );
function crb_certificates_post_meta() {
	Container::make('post_meta', __('Setari articol', 'medical'))
	->where( 'post_type', '=', 'page' )
	->where( 'post_id', '=', 157 )
	 ->add_fields(array(
		 Field::make( 'complex', 'crb_slider', __( 'Gallery', 'medical' ) )
		      ->add_fields( array(
			      Field::make( 'image', 'photo', __( 'Gallery image', 'medical' ) ),
		      ) )
	 ));
}



