<?php
/*
 * Template Name: Events
 */
?>

<?php get_header(); ?>
  <div class="page-event__img">
    <img src="<?php bloginfo('template_url'); ?>/assets/images/footballbanner.jpg" alt="img"/>
  </div>
	<main id="main" class="page-main event page-container container" role="main">
    <?php if ( have_posts() ) : ?>
      <?php while ( have_posts() ) : the_post();

        echo do_shortcode('[events_list limit="50"]') ?>

      <?php endwhile; ?>
    <?php endif; ?>

	</main>

<?php get_footer(); ?>
