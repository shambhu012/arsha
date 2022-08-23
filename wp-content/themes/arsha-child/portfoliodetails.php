<?php
/*Template Name: portfolio Details


*/
get_header();
?>

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="<?php echo get_bloginfo('url'); ?>">Home</a></li>
          <li>Portfolio Details</li>
        </ol>
        <h2>Portfolio Details</h2>

      </div>
    </section><!-- End Breadcrumbs -->
<!-- ======= Portfolio Details Section ======= -->
    <?php
    if ( have_posts() ) :
    while ( have_posts() ) : the_post();
        // Your loop code
    endwhile;
else :
    _e( 'Sorry, no posts were found.', 'textdomain' );
endif;
     ?>

  </main><!-- End #main -->


<?php
get_footer();
?>