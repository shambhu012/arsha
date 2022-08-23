<?php
/**
 * Arsha functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage arsha
 * @since Arsha 1.0
 */

add_theme_support('menus');
register_nav_menus(
    array(
        'primary_menu' => __('Primary Menu', 'theme'),
    )
);

function selected_class($classes, $item)
{
    if(in_array('current-menu-item', $classes))
    {
        $classes[] = 'selected';
    }
    return $classes; 
    
}
add_filter('nav_menu_css_class', 'selected_class', 10,2); 


function arsha_load_stylesheets()
{
	// wp_register_style('parent-style', get_template_directory_uri() . '/', array(), 1, 'all');
	// wp_enqueue_style('parent-style');
    wp_register_style('bootstrap', get_template_directory_uri() . '/assets/vendor/bootstrap/css/bootstrap.min.css', array(), 1, 'all');
    wp_enqueue_style('bootstrap');

     wp_register_style('theme-css', get_template_directory_uri() . '/assets/css/style.css', array(), 1, 'all');
    wp_enqueue_style('theme-css');

	wp_register_style('aos', get_template_directory_uri() . '/assets/vendor/aos/aos.css', array(), 1, 'all');
	wp_enqueue_style('aos');

    

    wp_register_style('bootstrap_icons', get_template_directory_uri() . '/assets/vendor/bootstrap-icons/bootstrap-icons.css', array(), 1, 'all');
    wp_enqueue_style('bootstrap_icons');

    wp_register_style('boxicons', get_template_directory_uri() . '/assets/vendor/boxicons/css/boxicons.min.css', array(), 1, 'all');
    wp_enqueue_style('bootstrap_icons');

    wp_register_style('glightbox', get_template_directory_uri() . '/assets/vendor/glightbox/css/glightbox.min.css.css', array(), 1, 'all');
    wp_enqueue_style('bootstrap_icons');

    wp_register_style('remixicon', get_template_directory_uri() . '/assets/vendor/remixicon/remixicon.css', array(), 1, 'all');
    wp_enqueue_style('remixicon'); 

    wp_register_style('bundle', get_template_directory_uri() . '/assets/vendor/swiper/swiper-bundle.min.css', array(), 1, 'all');
    wp_enqueue_style('bundle'); 
    
}
add_action('wp_enqueue_scripts', 'arsha_load_stylesheets');




  // load scripts

  function arsha_load_scripts()
  {

    wp_enqueue_script('jquery', get_template_directory_uri(). '/assets/js/jquery-3.1.1.min.js', false);
    //wp_enqueue_script('jquery');

    wp_enqueue_script('bootstrap', get_template_directory_uri(). '/assets/vendor/bootstrap/js/bootstrap.bundle.min.js', false);

    wp_enqueue_script('main', get_template_directory_uri(). '/assets/js/main.js', false);
    //wp_enqueue_script('main');

    wp_enqueue_script('aos', get_template_directory_uri(). '/assets/vendor/aos/aos.js', false);
    //wp_enqueue_script('aos');

    wp_enqueue_script('bootstrap', get_template_directory_uri(). '/assets/vendor/bootstrap/js/bootstrap.bundle.min.js', false);
    //wp_enqueue_script('bootstrap');


    wp_enqueue_script('glightbox', get_template_directory_uri(). '/assets/vendor/glightbox/js/glightbox.min.js', false);
    //wp_enqueue_script('glightbox');


    wp_enqueue_script('isotope', get_template_directory_uri(). '/assets/vendor/isotope-layout/isotope.pkgd.min.js', false);
    //wp_enqueue_script('isotope');


    wp_enqueue_script('swiper', get_template_directory_uri(). '/assets/vendor/swiper/swiper-bundle.min.js', false);
    //wp_enqueue_script('swiper');


wp_enqueue_script('noframework', get_template_directory_uri(). '/assets/vendor/waypoints/noframework.waypoints.js', false);
    //wp_enqueue_script('noframework');


    wp_enqueue_script('validate', get_template_directory_uri(). '/assets/vendor/php-email-form/validate.js', false);
    //wp_enqueue_script('validate');


  }

add_action('wp_enqueue_scripts', 'arsha_load_scripts');



