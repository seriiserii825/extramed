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

// хук для регистрации
add_action( 'init', 'create_profession' );
function create_profession(){
	// список параметров: http://wp-kama.ru/function/get_taxonomy_labels
	register_taxonomy('profession', array('specialist'), array(
		'label'                 => '', // определяется параметром $labels->name
		'labels'                => array(
			'name'              => esc_html__( 'Профессии', 'bs-dental' ),
			'singular_name'     => esc_html__( 'Профессия', 'bs-dental' ),
			'search_items'      => esc_html__( 'Найти профессию', 'bs-dental' ),
			'all_items'         => esc_html__( 'Все профессии', 'bs-dental' ),
			'view_item '        => esc_html__( 'Посмотреть профессию', 'bs-dental' ),
			'parent_item'       => esc_html__( 'профессию', 'bs-dental' ),
			'parent_item_colon' => esc_html__( 'профессию', 'bs-dental' ),
			'edit_item'         => esc_html__( 'Редактировать', 'bs-dental' ),
			'update_item'       => esc_html__( 'Обновить', 'bs-dental' ),
			'add_new_item'      => esc_html__( 'Добавить', 'bs-dental' ),
			'new_item_name'     => esc_html__( 'Профессия', 'bs-dental' ),
			'menu_name'         => esc_html__( 'Профессии', 'bs-dental' ),
		),
		'description'           => '', // описание таксономии
		'public'                => true,
		'publicly_queryable'    => null, // равен аргументу public
		'show_in_nav_menus'     => true, // равен аргументу public
		'show_ui'               => true, // равен аргументу public
		'show_in_menu'          => true, // равен аргументу show_ui
		'show_tagcloud'         => true, // равен аргументу show_ui
		'show_in_rest'          => null, // добавить в REST API
		'rest_base'             => null, // $taxonomy
		'hierarchical'          => false,
		//'update_count_callback' => '_update_post_term_count',
		'rewrite'               => true,
		//'query_var'             => $taxonomy, // название параметра запроса
		'capabilities'          => array(),
		'meta_box_cb'           => null, // html метабокса. callback: `post_categories_meta_box` или `post_tags_meta_box`. false — метабокс отключен.
		'show_admin_column'     => false, // Позволить или нет авто-создание колонки таксономии в таблице ассоциированного типа записи. (с версии 3.5)
		'_builtin'              => false,
		'show_in_quick_edit'    => null, // по умолчанию значение show_ui
	) );
}