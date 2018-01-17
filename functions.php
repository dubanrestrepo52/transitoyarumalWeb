<?php 


    #Aquí se crea una función que permitirá una ubicación del menú-----------------------------------------
	function register_my_menus(){
		register_nav_menus( 
				array(
					'menu-header' =>_('Menú del encabezado'),
					'menu-footer' =>_('Menú del footer'),
					'menu-principal' =>_('Menú ppal')
				)
		);
	}

	#Aquí se le agrega la función a WP----------------------------------------------------------------------
	add_action( 'init', 'register_my_menus');
	//Función para agregar imagenes destacadas


	add_theme_support( 'post-thumbnails' );


	//-------------------------------------------------------------------


	// Register Custom Navigation Walker
		require_once get_template_directory() . '/wp-bootstrap-navwalker.php';

		/**
 * Filter the CSS class for a nav menu based on a condition.
 *
 * @param array  $classes The CSS classes that are applied to the menu item's <li> element.
 * @param object $item    The current menu item.
 * @return array (maybe) modified nav menu class.
 */

	//rebajar palabras del excerpt---------------------------------------

	function wpdocs_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

/**
 * Filter the excerpt "read more" string.
 *
 * @param string $more "Read more" excerpt string.
 * @return string (Maybe) modified "read more" excerpt string.
 */
function wpdocs_excerpt_more( $more ) {
    return '...';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );

/*Agg funciones a la barrade busqueda*/
	function miplugin_register_topbar(){
		register_sidebar(
			array(
				'id'=>'topbar',
				'name' => 'barra del header',
				'description' => 'topbar para poner barra de busqueda y traductor'
			)
		);
		register_sidebar(
			array(
				'id'=>'topbar2',
				'name' => 'barra del traductor',
				'description' => 'topbar para poner barra  traductor'
			)
		);
	}
		add_action('widgets_init', 'miplugin_register_topbar');