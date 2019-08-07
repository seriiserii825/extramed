<?php

if( ! defined('ABSPATH') ) exit;


use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'cb_specialist_post_meta' );
function cb_specialist_post_meta() {
	Container::make('post_meta', __('Setari specialist', 'medical'))
		->where( 'post_type', '=', 'specialist' )
		->add_fields(array(
			Field::make('text', 'crb_specialist_study', 'Studii')
			->set_attribute( 'placeholder', 'Academia de medicina' ),
			Field::make('text', 'crb_specialist_experience', 'Experienta, ani')
			->set_attribute( 'placeholder', '38 ani in Germania' ),
			Field::make( 'select', 'crb_specialist_week', __( 'Zile lucratoare', 'medical' ) )
			->add_options( array(
		        'Luni-Vineri' => __( 'Luni-Vineri', 'medical' ),
		        'Luni-Simbata' => __( 'Luni-Simbata', 'medical' ),
		    ) ),
			Field::make('text', 'crb_specialist_facebook', 'Facebook')
			->set_attribute( 'placeholder', 'http://facebook.com' ),
			Field::make('text', 'crb_specialist_twitter', 'Twitter')
			->set_attribute( 'placeholder', 'https://twitter.com/' ),
			Field::make('text', 'crb_specialist_google', 'Google')
			->set_attribute( 'placeholder', 'https://google.com/' ),
			Field::make( 'image', 'crb_category_specialist_im', __( 'Image', 'medical' ) )
			->set_help_text('Dimensiunile imaginei 470x400')
			->set_required()
		));
}

