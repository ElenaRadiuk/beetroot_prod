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

  <?php
    echo '$page->event_name';
    global $wpdb;
    $pages = $wpdb->get_results(
    "
    SELECT event_name, post_content 
    FROM $wpdb->posts
    WHERE post_status = 'publish' 
    AND post_type = 'event'
    "
      );
   var_dump($pages);
      /* вытаскивает из базы данных заголовки и содержимое
      всех опубликованных страниц */
      if( $pages ) {
        foreach ( $pages as $page ) {
          setup_postdata( $page );
          echo $page->event_name;
          echo '$page->event_name2';
        }
      }


    $fivesdrafts = $wpdb->get_results(
      "
      SELECT ID, post_title 
      FROM $wpdb->posts
      WHERE post_status = 'publish'
        AND post_type = 'event'
      "
    );

    foreach ( $fivesdrafts as $fivesdraft )
    {
      echo $fivesdraft->post_title;
    }
  ;?>



	</main>

<?php get_footer(); ?>
