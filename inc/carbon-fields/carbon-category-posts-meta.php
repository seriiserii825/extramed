<?php

if( ! defined('ABSPATH') ) exit;

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_category_stationar_post_meta' );
function crb_category_stationar_post_meta() {
	Container::make('post_meta', __('Setari articol', 'medical'))
		->where( 'post_term', '=', array(
			'field' => 'slug',
			'value' => 'ambulator',
			'taxonomy' => 'category',
		) )
		->or_where( 'post_term', '=', array(
			'field' => 'slug',
			'value' => 'stationar',
			'taxonomy' => 'category',
		) )
		->add_fields(array(
			Field::make('text', 'crb_category_amb_stat_posts', 'Adauga un titlu alternativ'),
			Field::make( 'image', 'crb_category_amb_stat_posts_img', __( 'Image', 'medical' ) )
			->set_help_text('Dimensiunile imaginei 570x425'),
		));
}


