<?php
	/*FUNCION PARA CARGAR LOS ESTILOS*/
	function sitioBrandon_styles()

	{			
		/*AGREGA EL CSS DE NORMALIZE*/
		wp_enqueue_style('normalize', get_stylesheet_directory_uri() . '/css/normalize.css');
		/*AGREGA EL CSS DE BOOTSTRAP*/
		wp_enqueue_style('bootstrap', "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css");
		/*AGREGA EL CSS DE FONT AWESOME*/
		wp_enqueue_style('fontawesome', get_stylesheet_directory_uri() . '/css/font-awesome.min.css');
		/*AGREGA UNA FUENTE*/
		wp_enqueue_style('Merrifont', "https://fonts.googleapis.com/css?family=Merriweather");
		/*OBTIENE EL CSS DE STYLE*/
		wp_enqueue_style('style', get_stylesheet_uri());
		/*AGREGA JQUERY*/
		wp_enqueue_script('jquery');
		/*AGREGA EL JS DE BOOTSTRAP*/
		wp_enqueue_script('bootstrap', "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js", array('jquery'), '3.3.6', true);
	}
	/*AÑADE LOS SCRIPTS DE LA FUNCION ANTERIOR*/
	add_action('wp_enqueue_scripts', 'sitioBrandon_styles');
	/*PARA AÑADIR IMAGENES DESTACADAS AL TEMA*/
	add_theme_support('post-thumbnails');

	add_image_size('entradas', 750, 400, true);

	/*******Navegación*******/
	register_nav_menus(array(
		'menu_principal' => __('Menu Principal', 'sitioBrandon'),
		'sociales_menu' => __('Menu Redes sociales', 'sitioBrandon')
		 ));
	/*FUNCION PARA AÑADIR WIDGETS*/
	function sitioBrandon_widgets() {
	register_sidebar( array(
		'name'=> __('Footer_widget', 'sitioBrandon'), 
			'id' => 'footer_widget', 
			'description' => __('Widget para el footer de la pagina', 'sitioBrandon'), 
			'before_widget' => '<div id="%1$s" class="widget col-sm-6 %2$s">', 
			'after_widget' => '</div>', 
			'before_title' => '<h3 class="widget-title">', 
			'after_title' => '</h3>',
	) );
	register_sidebar( array(
	'name'=> __('Sidebar_widget', 'sitioBrandon'), 
			'id' => 'sidebar_widget', 
			'description' => __('Widget para el sidebar de la pagina', 'sitioBrandon'), 
			'before_widget' => '<div id="%1$s" class="widget %2$s">', 
			'after_widget' => '</div>', 
			'before_title' => '<h3 class="widget-title">', 
			'after_title' => '</h3>',
	));
	}	
	/*AÑADE LOS WIDGETS*/
	add_action( 'widgets_init', 'sitioBrandon_widgets' );
	
?>

