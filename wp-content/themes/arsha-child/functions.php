<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );

if ( !function_exists( 'chld_thm_cfg_parent_css' ) ):
    function chld_thm_cfg_parent_css() {
        wp_enqueue_style( 'chld_thm_cfg_parent', trailingslashit( get_template_directory_uri() ) . 'style.css', array(  ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'chld_thm_cfg_parent_css', 10 );
         
if ( !function_exists( 'child_theme_configurator_css' ) ):
    function child_theme_configurator_css() {
        wp_enqueue_style( 'chld_thm_cfg_child', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css', array( 'chld_thm_cfg_parent' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css', 10 );

// END ENQUEUE PARENT ACTION


function arsha_child_load_stylesheets()
{
    // wp_register_style('parent-style', get_template_directory_uri() . '/', array(), 1, 'all');
    // wp_enqueue_style('parent-style');
    wp_register_style('bootstrap', get_stylesheet_directory_uri() . '/assets/vendor/bootstrap/css/bootstrap.min.css', array(), 1, 'all');
    wp_enqueue_style('bootstrap');

     wp_register_style('theme-css', get_stylesheet_directory_uri() . '/assets/css/style.css', array(), 1, 'all');
    wp_enqueue_style('theme-css');

    wp_register_style('aos', get_stylesheet_directory_uri() . '/assets/vendor/aos/aos.css', array(), 1, 'all');
    wp_enqueue_style('aos');

    

    wp_register_style('bootstrap_icons', get_stylesheet_directory_uri() . '/assets/vendor/bootstrap-icons/bootstrap-icons.css', array(), 1, 'all');
    wp_enqueue_style('bootstrap_icons');

    wp_register_style('boxicons', get_stylesheet_directory_uri() . '/assets/vendor/boxicons/css/boxicons.min.css', array(), 1, 'all');
    wp_enqueue_style('boxicons');

    wp_register_style('glightbox', get_stylesheet_directory_uri() . '/assets/vendor/glightbox/css/glightbox.min.css.css', array(), 1, 'all');
    wp_enqueue_style('glightbox');

    wp_register_style('remixicon', get_stylesheet_directory_uri() . '/assets/vendor/remixicon/remixicon.css', array(), 1, 'all');
    wp_enqueue_style('remixicon'); 

    wp_register_style('bundle', get_stylesheet_directory_uri() . '/assets/vendor/swiper/swiper-bundle.min.css', array(), 1, 'all');
    wp_enqueue_style('bundle');

    


    
}
add_action('wp_enqueue_scripts', 'arsha_child_load_stylesheets');




//   // load scripts

//   function arsha_child_load_scripts()
//   {

//     wp_enqueue_script('jquery', get_stylesheet_directory_uri(). '/assets/js/jquery-3.1.1.min.js', false);
//     //wp_enqueue_script('jquery');

//     wp_enqueue_script('bootstrap', get_stylesheet_directory_uri(). '/assets/vendor/bootstrap/js/bootstrap.bundle.min.js', false);

//     wp_enqueue_script('main', get_stylesheet_directory_uri(). '/assets/js/main.js', false);
//     //wp_enqueue_script('main');

//     wp_enqueue_script('aos', get_stylesheet_directory_uri(). '/assets/vendor/aos/aos.js', false);
//     //wp_enqueue_script('aos');

//     wp_enqueue_script('bootstrap', get_stylesheet_directory_uri(). '/assets/vendor/bootstrap/js/bootstrap.bundle.min.js', false);
//     //wp_enqueue_script('bootstrap');


//     wp_enqueue_script('glightbox', get_stylesheet_directory_uri(). '/assets/vendor/glightbox/js/glightbox.min.js', false);
//     //wp_enqueue_script('glightbox');


//     wp_enqueue_script('isotope', get_stylesheet_directory_uri(). '/assets/vendor/isotope-layout/isotope.pkgd.min.js', false);
//     //wp_enqueue_script('isotope');


//     wp_enqueue_script('swiper', get_stylesheet_directory_uri(). '/assets/vendor/swiper/swiper-bundle.min.js', false);
//     //wp_enqueue_script('swiper');


// wp_enqueue_script('noframework', get_stylesheet_directory_uri(). '/assets/vendor/waypoints/noframework.waypoints.js', false);
//     //wp_enqueue_script('noframework');


//     wp_enqueue_script('validate', get_stylesheet_directory_uri(). '/assets/vendor/php-email-form/validate.js', false);
//     //wp_enqueue_script('validate');


//   }

// add_action('wp_enqueue_scripts', 'arsha_child_load_scripts');


function arsha_sidebar_registration() {

    // Arguments used in all register_sidebar() calls.
    $shared_args = array(
        'before_title'  => '<h2 class="widget-title subheading heading-size-3">',
        'after_title'   => '</h2>',
        'before_widget' => '<div class="widget %2$s"><div class="widget-content">',
        'after_widget'  => '</div></div>',
    );

    // Footer #1.
    register_sidebar(
        
            array(
                'name'        => esc_html__( 'Footer #1'),
                'id'          => 'footer1',
                'description' => __( 'Widgets in this area will be displayed in the first column in the footer.', 'arsha' ),
            )
        );

    // Footer #2.
    register_sidebar(
            array(
                'name'        => esc_html__( 'Footer #2'),
                'id'          => 'footer2',
                'description' => __( 'Widgets in this area will be displayed in the second column in the footer.', 'arsha' ),
            )
    );

     // Footer #3.
    register_sidebar(
    
            array(
                'name'        => esc_html__( 'Footer #3'),
                'id'          => 'footer3',
                'description' => __( 'Widgets in this area will be displayed in the third column in the footer.', 'arsha' ),
            )
    );

     // Footer #4.
    register_sidebar(
            array(
                'name'        => esc_html__( 'Footer #4'),
                'id'          => 'footer4',
                'description' => __( 'Widgets in this area will be displayed in the fourth column in the footer.', 'arsha' ),
            )
        
    );

}

add_action( 'widgets_init', 'arsha_sidebar_registration' );