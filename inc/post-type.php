<?php

if( ! defined('ABSPATH') ) exit;

add_action( 'init', 'register_post_types' );
function register_post_types(){
	register_post_type('specialist', array(
		'label'  => null,
		'labels' => array(
		'name'               => __( 'Specialisti', 'text-domain' ),
		'singular_name'      => __( 'Specialist', 'text-domain' ),
		'add_new'            => __( 'Adauga un specialist', 'text-domain' ),
		'add_new_item'       => __( 'Adauga un specialist', 'text-domain' ),
		'edit_item'          => __( 'Editeaza un specialist', 'text-domain' ),
		'new_item'           => __( 'Adauga un specialist', 'text-domain' ),
		'view_item'          => __( 'Vezi un specialist', 'text-domain' ),
		'search_items'       => __( 'Cauta un specialist', 'text-domain' ),
		'not_found'          => __( 'Nu este nimic', 'text-domain' ),
		'not_found_in_trash' => __( 'Nu este nimic', 'text-domain' ),
		'parent_item_colon'  => __( 'Parent Singular Name:', 'text-domain' ),
		'menu_name'          => __( 'Specialisti', 'text-domain' ),
		),
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => null, // зависит от public
		'exclude_from_search' => null, // зависит от public
		'show_ui'             => null, // зависит от public
		'show_in_menu'        => null, // показывать ли в меню адмнки
		'show_in_admin_bar'   => null, // по умолчанию значение show_in_menu
		'show_in_nav_menus'   => null, // зависит от public
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => null,
		'menu_icon'           => null, 
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => array('title','editor', 'excerpt'), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => array(),
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	) );
}