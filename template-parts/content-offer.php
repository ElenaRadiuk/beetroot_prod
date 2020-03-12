<div class="offer__wrapper">
  <div class="offer_arrow">
    <img src="<?php bloginfo('template_url'); ?>/assets/images/arrow.svg" alt="youtube"/>
  </div>

  <div class="offer_item">
    <?php $offer = get_field('offer');?>
    <?php echo do_shortcode($offer) ?>
  </div>
</div>
