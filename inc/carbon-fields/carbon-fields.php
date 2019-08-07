<?php 
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );
function crb_attach_theme_options() {
	$basic_options_container = Container::make( 'theme_options', __( 'Basic Options', 'medical' ) )
    ->set_page_menu_title( 'Setari principala' )
    ->add_tab( 'Шапка', array(
        Field::make( 'text', 'crb_header_slogan', __( 'Slogain in header', 'medical' ) ),
    ) )
    ->add_tab( 'Slider', array(
        Field::make( 'complex', 'crb_slider_item' )
        ->add_fields( array(
            Field::make( 'image', 'crb_slider_image' )
            ->set_help_text( 'Incarcati imagini cu dimensiunile de 1920x900' ),
        ) )
    ) )
    ->add_tab( 'Timer', array(
        Field::make( 'text', 'crb_timer_title', __( 'Denumire de timer', 'medical' ) ),
        Field::make( 'separator', 'crb_separator_timer', __( 'Luni-Vineri', 'medical' ) ),
        Field::make( 'time', 'crb_monday_start', 'Inceput de timp' )
        ->set_width(50),
        Field::make( 'time', 'crb_monday_end', 'Sfirsit de timp' )
        ->set_width(50),
        Field::make( 'separator', 'crb_separator_timer_1', __( 'Simbata', 'medical' ) ),
        Field::make( 'time', 'crb_saturday_start', 'Inceput de timp' )
        ->set_width(50),
        Field::make( 'time', 'crb_saturday_end', 'Sfirsit de timp' )
        ->set_width(50),
        Field::make( 'separator', 'crb_separator_timer_2', __( 'Stationar', 'medical' ) ),
        Field::make( 'text', 'crb_timer_stationar', 'Orarul de lucru' ),
    ) )
	->add_tab( 'Medical guide', array(
		Field::make( 'separator', 'crb_sep_gid_title', __( 'Gidul medical titlu', 'medical' ) ),
		Field::make( 'text', 'crb_guid_title_1', 'Titlu de gid 1' )
		     ->set_width(50),
		Field::make( 'text', 'crb_guid_title_2', 'Titlu de gid 2' )
		     ->set_width(50),
		Field::make( 'text', 'crb_gid_descr', 'Gidul descriere' ),
	) )
    ->add_tab( 'Specialisti', array(
        Field::make( 'text', 'crb_specialist_block_title_1', 'Titlu bloculue de specialisti 1' )
        ->set_width(50),
        Field::make( 'text', 'crb_specialist_block_title_2', 'Titlu bloculue de specialisti 2' )
        ->set_width(50),
        Field::make( 'text', 'crb_specialist_description', 'Descrierea bloculue de specialisti' ),
    ) )
	->add_tab( 'Citate', array(
		Field::make( 'complex', 'crb_cite_slider', __( 'Citate', 'medical' ) )
		 ->add_fields( array(
			Field::make( 'text', 'crb_cite_text', 'Text pentru citata de pe Principala' ),
			Field::make( 'text', 'crb_cite_author', 'Author pentru citata de pe Principala' ),
		 ) )
		 ->set_layout('tabbed-horizontal')
	) );

    // Add second options page under 'Basic Options'
	Container::make( 'theme_options', __( 'Setari generale', 'medical' ) )
    ->set_page_parent( $basic_options_container ) // reference to a top level container
    ->add_tab( 'Socials', array(
        Field::make( 'text', 'crb_email', __( 'Email', 'medical' ) ),
        Field::make( 'text', 'crb_facebook', __( 'Facebook', 'medical' ) )
        ->set_help_text( 'url se incepe cu с https://' ),
        Field::make( 'text', 'crb_twitter', __( 'Twitter', 'medical' ) )
        ->set_help_text( 'url se incepe cu с https://' ),
        Field::make( 'text', 'crb_google', __( 'Google', 'medical' ) )
        ->set_help_text( 'url se incepe cu с https://' ),
        Field::make( 'text', 'crb_vimeo', __( 'Vimeo', 'medical' ) )
        ->set_help_text( 'url se incepe cu с https://' ),
        Field::make( 'text', 'crb_phone', __( 'Telefon', 'medical' ) )
        ->set_help_text( 'Utilizati urmatoarele simbole: ()-+' ),
        Field::make( 'text', 'crb_address', __( 'Adresa', 'medical' ) )
    ))
    ->add_tab( 'Footer', array(
        Field::make( 'separator', 'crb_sep_footer', __( 'Telefon de urgenta', 'medical' ) ),
        Field::make( 'text', 'crb_emergency_title', 'Titlu de urgenta' )
        ->set_width(50),
        Field::make( 'text', 'crb_emergency_phone', 'Telefon de urgenta' )
        ->set_width(50),
        Field::make( 'separator', 'crb_sep_footer_1', __( 'Copyright', 'medical' ) ),
        Field::make( 'text', 'crb_copyright_text', 'Copyright text' ),
    ) )
    ->add_tab( 'Images', array(
        Field::make('image', 'crb_subanner_img', 'Adauga imagine pentru banner')
        ->set_help_text('Dimensiunile imaginei 1900x290')
        ->set_required(),
    ) )
    ->add_tab( 'Articole', array(
        Field::make( 'separator', 'crb_sep_post_1', __( 'Articole cu categoria ambulator si stationar', 'medical' ) ),
        Field::make('text', 'crb_category_amb_stat_default_img', 'Id pentru poza')
        ->set_help_text('Adauga id la poza de default din media biblioteca')
        ->set_required(),

        Field::make( 'separator', 'crb_sep_post_2', __( 'Articole pentru specialist', 'medical' ) ),
        Field::make( 'text', 'crb_specialist_post_title_1', 'Titlu pagina specialist 1' )
        ->set_width(50),
        Field::make( 'text', 'crb_specialist_post_title_2', 'Titlu pagina specialist 2' )
        ->set_width(50),
        Field::make( 'text', 'crb_specialist_post_desription', __( 'Descriere pentru pagina specialist', 'medical' ) )
    ) );


    // Add second options page under 'Basic Options'
    Container::make( 'theme_options', __( 'Setari categorie Servicii', 'medical' ) )
    ->set_page_parent( $basic_options_container ) // reference to a top level container
    ->add_tab( 'Titlu', array(
        Field::make( 'text', 'crb_services_post_title_1', 'Titlu pagina Servicii 1' )
        ->set_width(50),
        Field::make( 'text', 'crb_services_post_title_2', 'Titlu pagina Servicii 2' )
        ->set_width(50),
        Field::make( 'text', 'crb_services_post_desription', __( 'Descriere pentru pagina Servicii', 'medical' ) )
    ) );

	// Add second options page under 'Basic Options'
	Container::make( 'theme_options', __( 'Setari Pagina Contacte' ) )
	         ->set_page_parent( $basic_options_container ) // reference to a top level container
	         ->add_tab( 'Map', array(
				Field::make( 'separator', 'crb_sep_contacts', __( 'Titlu  pentru forma de contact', 'medical' ) ),
				Field::make( 'text', 'crb_contacts_title_1', 'Titlu  1 pagina contact' )
					 ->set_width(30),
				Field::make( 'text', 'crb_contacts_title_2', 'Titlu 2 pagina contact' )
					 ->set_width(30),
				Field::make( 'text', 'crb_contacts_title_3', 'Titlu 3 pagina contact' )
					 ->set_width(30),

				Field::make( 'separator', 'crb_sep_address_contacts', __( 'Titlu  de adresa', 'medical' ) ),
				Field::make( 'text', 'crb_contacts_address_1', 'Titlu  1 pagina contact' )
					 ->set_width(50),
				Field::make( 'text', 'crb_contacts_address_2', 'Titlu 2 pagina contact' )
					 ->set_width(50),

				Field::make( 'separator', 'crb_sep_contacts_2', __( 'Telefoane', 'medical' ) ),
				Field::make( 'text', 'crb_contacts_phone_1', 'Telefonul nr 1' ),
				Field::make( 'text', 'crb_contacts_phone_2', 'Telefonul nr 2' ),
				Field::make( 'text', 'crb_contacts_phone_3', 'Telefonul nr 3' ),
				Field::make( 'text', 'crb_contacts_phone_4', 'Telefonul nr 4' )
		) );


//	Prezentare
	Container::make( 'theme_options', __( 'Setari Pagina Prezentare', 'medical' ) )
		->set_page_parent( $basic_options_container ) // reference to a top level container
		->add_tab( 'Sala de primire', array(
			Field::make( 'text', 'crb_presentation_intro_sallon_title', 'Titlu sala de primire' ),
			Field::make( 'text', 'crb_presentation__intro_sallon_text', 'Text sala de primire' ),
			Field::make( 'image', 'crb_presentation__intro_sallon_img', 'Imagine sala de primire' ),
		) )
		->add_tab( 'Intro', array(
			Field::make( 'text', 'crb_presentation_intro_title', 'Titlu block intro' ),
			Field::make( 'rich_text', 'crb_presentation__intro_text', __( 'Text pentru blocul intro', 'medical' ) ),
			Field::make( 'image', 'crb_presentation__intro_img', __( 'Imagine pentru blocul intro', 'medical' ) ),
		) )

		 ->add_tab( 'Sala de nastere', array(
			 Field::make( 'text', 'crb_presentation_birth_title', 'Titlu block nastere' ),
		 ) )

		->add_tab( 'Blocul operator', array(
			Field::make( 'text', 'crb_presentation_operation_title', 'Titlu block operare' ),
			Field::make( 'rich_text', 'crb_presentation_operation_text', 'Text block operare' ),
			Field::make( 'complex', 'crb_presentation_operation_gallery', __( 'Galerea pentru sala de operatii', 'medical' ) )
			->add_fields( array(
				Field::make( 'image', 'crb_presentation_operation_gallery__image', __( 'Imagine', 'medical' ) )
			) )
			->set_layout('tabbed-horizontal')
		) )

		 ->add_tab( 'Saloanul de terapie', array(
			 Field::make( 'text', 'crb_presentation_saloon_title', 'Titlu block salon de terapie' ),
			 Field::make( 'rich_text', 'crb_presentation_saloon_text', 'Text salon de terapie' ),
			 Field::make( 'complex', 'crb_presentation_saloon_gallery', __( 'Galerea pentru salonul de terapie', 'medical' ) )
			      ->add_fields( array(
				      Field::make( 'image', 'crb_presentation_saloon_gallery__image', __( 'Imagine', 'medical' ) )
			      ) )
			      ->set_layout('tabbed-horizontal')
		 ) )

		->add_tab( 'Saloanele', array(
			Field::make( 'text', 'crb_presentation_saloons_title', 'Titlu block saloane' ),
			Field::make( 'rich_text', 'crb_presentation_saloons_text', 'Text saloane' ),
			Field::make( 'complex', 'crb_presentation_saloons_gallery', __( 'Galerea pentru saloane', 'medical' ) )
				 ->add_fields( array(
					 Field::make( 'image', 'crb_presentation_saloons_gallery__image', __( 'Imagine', 'medical' ) )
				 ) )
				 ->set_layout('tabbed-horizontal')
		) );
}
