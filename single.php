<?php
/**
 * Template for displaying all single posts
 *
 */

get_header(); ?>
  <main id="main_area">
    <div id="main_content">
      <div id="content" role="main" class="container">

        <?php system2018_get_breadcrumbs(); ?>

        <?php
        /*
         * Run the loop to output the post.
         * If you want to overload this in a child theme then include a file
         * called loop-single.php and that will be used instead.
         */
        get_template_part( 'loop', 'single' );
        ?>

      </div><!-- #content -->

<?php get_footer(); ?>
