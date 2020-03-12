<?php
/*
 * Remember that this file is only used if you have chosen to override event pages with formats in your event settings!
 * You can also override the single event page completely in any case (e.g. at a level where you can control sidebars etc.), as described here - http://codex.wordpress.org/Post_Types#Template_Files
 * Your file would be named single-event.php
 */
/*
 * This page displays a single event, called during the the_content filter if this is an event page.
 * You can override the default display settings pages by copying this file to yourthemefolder/1plugins/events-manager/templates/ and modifying it however you need.
 * You can display events however you wish, there are a few variables made available to you:
 *
 * $args - the args passed onto EM_Events::output()
 */
global $EM_Event;
/* @var $EM_Event EM_Event */

echo '<div class="event_manager container">';
echo $EM_Event->output_single(); ?>

  <h3><?php the_title(); ?> (products for event): </h3>
  <div class="product-list_wrapper">

    <?php
    $posts = get_field('prod');

    if( $posts ): ?>
      <?php foreach( $posts as $post): ?>
        <?php setup_postdata($post); ?>
        <div class="product-item">

<!--          --><?php //var_dump( $post); ?>

          <?php $prod_id = $post->ID;
          $string = 'columns="1"';

          $product = do_shortcode( '[product id="'. $prod_id . ' " columns="1"]' );
          echo $product;?>
        </div>
      <?php endforeach; ?>
      <?php wp_reset_postdata();?>
    <?php endif; ?>
  </div>
<?php echo '</div>'; ?>
