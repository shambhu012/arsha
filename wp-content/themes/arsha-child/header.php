<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Arsha
 * @since Arsha 1.0
 */

?>
<!doctype html>

<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>
    <?php echo get_the_title(); ?> |
    <?php bloginfo('name'); ?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.png" rel="icon">
  <link href="<?php echo get_template_directory_uri(); ?>/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  
  <?php wp_head(); ?>
  
</head>

<body>
<!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="<?php echo get_home_url(); ?>">Arsha</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      <nav id="navbar" class="navbar">
        <?php
      wp_nav_menu(
        array(
          'theme_location' => 'top_menu',
          
          'container' => 'ul',
          'container_id' => 'navbar',
          'container_class' => 'navbar', 

        )
      );?>
      <li><a class="getstarted scrollto menu" href="#about">Get Started</a></li>
      </nav>
      

    </div>
  </header>
  
