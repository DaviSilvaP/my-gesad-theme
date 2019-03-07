<?php 

// Incluindo os arquivos da TGM
require_once get_template_directory() . '/inc/class-tgm-plugin-activation.php';
require_once get_template_directory() . '/inc/required-plugins.php';

// Requerendo o arquivo do Customizer
require get_template_directory() . '/inc/customizer.php';

// Carregando nossos scripts e folhas de estilos
function load_scripts(){
	wp_enqueue_script( 'bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', array( 'jquery' ), '4.0.0', true );
	wp_enqueue_style( 'bootstrap-css', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css', array(), '4.0.0', 'all' );
	wp_enqueue_style( 'template', get_template_directory_uri() . '/css/template.css', array(), '1.0', 'all' );
  wp_enqueue_script( 'fitvids', get_template_directory_uri() . '/js/fitvids.js', array( 'jquery' ), null, true );
  wp_enqueue_style( 'material-fonts', 'http://fonts.googleapis.com/css?family=Material+Icons|Open+Sans:400italic,600italic,700italic,400,700,600|Merriweather:400italic,400,700' );
  wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');

}
add_action( 'wp_enqueue_scripts', 'load_scripts' );

function wpcurso_editor_styles(){
	wp_enqueue_style( 'editor-styles', get_template_directory_uri() . '/css/style-editor.css' );
	wp_enqueue_style( 'lato', 'https://fonts.googleapis.com/css?family=Lato:400,900' );
	wp_enqueue_style( 'oswald', 'https://fonts.googleapis.com/css?family=Oswald:400,900' );
}
add_action( 'enqueue_block_editor_assets', 'wpcurso_editor_styles' );

// Função de Configuração do Tema
function wpcurso_config(){
	// Registrando nossos menus
	register_nav_menus(
		array(
			'my_main_menu' => __( 'Main Menu', 'wpcurso' ),
			'footer_menu' => __( 'Footer Menu', 'wpcurso' )
		)
	);	

	// Adicionando suporte ao tema
	$args = array(
		'height'	=> 225,
		'width'		=> 1920
	);
	add_theme_support( 'custom-header', $args );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'post-formats', array( 'video', 'image' ) );
	add_theme_support( 'title-tag');
	add_theme_support( 'custom-logo', array( 'height' => 110, 'width' => 200 ) );

	// Habilitando suporte à tradução
	$textdomain = 'wpcurso';
	load_theme_textdomain( $textdomain, get_stylesheet_directory() . '/languages/' );
	load_theme_textdomain( $textdomain, get_template_directory() . '/languages/' );

	// Suporte ao Gutenberg
	add_theme_support( 'align-wide' );
	add_theme_support( 'editor-color-palette', array(
		array(
			'name' => __( 'Blood Red' , 'wpcurso' ),
			'slug' => 'blood-red',
			'color' => '#b9121b'
		),
		array(
			'name' => __( 'White' , 'wpcurso' ),
			'slug' => 'white',
			'color' => '#ffffff'
		)		
	) );
	add_theme_support( 'disable-custom-colors' );

}
add_action( 'after_setup_theme', 'wpcurso_config', 0 );






// BEGIN Notícias 

// add_action('init', 'type_post_noticias');
 
//     function type_post_noticias() { 
//         $labels = array(
//             'name' => _x('Notícias', 'post type general name'),
//             'singular_name' => _x('Notícia', 'post type singular name'),
//             'add_new' => _x('Adicionar Novo', 'Novo item'),
//             'add_new_item' => __('Novo Item'),
//             'edit_item' => __('Editar Item'),
//             'new_item' => __('Novo Item'),
//             'view_item' => __('Ver Item'),
//             'search_items' => __('Procurar Itens'),
//             'not_found' =>  __('Nenhum registro encontrado'),
//             'not_found_in_trash' => __('Nenhum registro encontrado na lixeira'),
//             'parent_item_colon' => '',
//             'menu_name' => 'Notícias'
//         );

//         $args = array(
//             'labels' => $labels,
//             'public' => true,
//             'public_queryable' => true,
//             'show_ui' => true,           
//             'query_var' => true,
//             'rewrite' => true,
//             'capability_type' => 'post',
//             'has_archive' => true,
//             'hierarchical' => false,
//             'menu_position' => null,
//             'supports' => array('title','editor','thumbnail','comments', 'excerpt', 'custom-fields', 'revisions', 'trackbacks')
//           );
 
// register_post_type( 'noticias' , $args );
// flush_rewrite_rules();
// }
// END Notícias

// BEGIN Eventos
add_action('init', 'type_post_eventos');
 
    function type_post_eventos() { 
        $labels = array(
            'name' => _x('Eventos', 'post type general name'),
            'singular_name' => _x('Evento', 'post type singular name'),
            'add_new' => _x('Adicionar Novo', 'Novo item'),
            'add_new_item' => __('Novo Item'),
            'edit_item' => __('Editar Item'),
            'new_item' => __('Novo Item'),
            'view_item' => __('Ver Item'),
            'search_items' => __('Procurar Itens'),
            'not_found' =>  __('Nenhum registro encontrado'),
            'not_found_in_trash' => __('Nenhum registro encontrado na lixeira'),
            'parent_item_colon' => '',
            'menu_name' => 'Eventos'
        );

        $args = array(
            'labels' => $labels,
            'public' => true,
            'public_queryable' => true,
            'show_ui' => true,           
            'query_var' => true,
            'rewrite' => true,
            'capability_type' => 'post',
            'has_archive' => true,
            'hierarchical' => false,
            'menu_position' => null,
            'supports' => array('title','editor','thumbnail','comments', 'excerpt', 'custom-fields', 'revisions', 'trackbacks')
          );
 
register_post_type( 'eventos' , $args );
flush_rewrite_rules();
}
// END Eventos

// BEGIN Publicacoes
add_action('init', 'type_post_publicacoes');
 
    function type_post_publicacoes() { 
        $labels = array(
            'name' => _x('Publicações', 'post type general name'),
            'singular_name' => _x('Publicação', 'post type singular name'),
            'add_new' => _x('Adicionar Novo', 'Novo item'),
            'add_new_item' => __('Novo Item'),
            'edit_item' => __('Editar Item'),
            'new_item' => __('Novo Item'),
            'view_item' => __('Ver Item'),
            'search_items' => __('Procurar Itens'),
            'not_found' =>  __('Nenhum registro encontrado'),
            'not_found_in_trash' => __('Nenhum registro encontrado na lixeira'),
            'parent_item_colon' => '',
            'menu_name' => 'Publicação'
        );

        $args = array(
            'labels' => $labels,
            'public' => true,
            'public_queryable' => true,
            'show_ui' => true,           
            'query_var' => true,
            'rewrite' => true,
            'capability_type' => 'post',
            'has_archive' => true,
            'hierarchical' => false,
            'menu_position' => null,
            'supports' => array('title','editor','thumbnail','comments', 'excerpt', 'custom-fields', 'revisions', 'trackbacks')
          );
 
register_post_type( 'publicacoes' , $args );
flush_rewrite_rules();
}