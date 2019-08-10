<?php

function showTermsInSpan($terms){
	 $terms_array = [];
	 $result = '';

	 rsort($terms);

	 foreach($terms as $term){
		 $terms_array[] = $term->name;
	 }

	for($i = 0; $i < count($terms_array); $i++){
		if($i !== count($terms_array) - 1) {
			$result .= '<span>'.$terms_array[$i].', </span>';
		}else {
			$result .= '<span>'.$terms_array[$i].'</span>';
		}
	 }
	return $result;
}

function clear_phone($phone){
	return str_replace(['(',')','-','+', ' '], '', $phone);
}

function vardump($var) {
	echo '<pre>';
	var_dump($var);
	echo '</pre>';
}

function carbon_lang() {
	$suffix = '';
	if ( ! defined( 'ICL_LANGUAGE_CODE' ) ) {
		return $suffix;
	}
	$suffix = '_' . ICL_LANGUAGE_CODE;
	return $suffix;
}

function trim_content($content, $count){
	$trimmed_content = wp_trim_words( $content, $count, '<a href="'. get_permalink() .'"></a>' );
	return $trimmed_content;
}

function get_lang(){
	$suffix = '';
	
	if(get_locale() == 'en_US'){
		$suffix = '_en';
	}
	if(get_locale() == 'ru_RU'){
		$suffix = '_ru';
	}
	if(get_locale() == 'ro_RO'){
		$suffix = '_ro';
	}
	
	return strtolower($suffix);
}

function my_revisions_to_keep( $revisions ) {
	return 2;
}
add_filter( 'wp_revisions_to_keep', 'my_revisions_to_keep' );

function modify_main_query( $query )
{
	if ( is_admin() || ! $query->is_main_query() ) {
		return;
	}
	
	if ( is_post_type_archive( 'portfolio' ) ) {
		// Display 10 posts for a custom post type called 'portfolio'
		$query->set( 'posts_per_page', 10 );
		return;
	}
}
add_action( 'pre_get_posts', 'modify_main_query' );


