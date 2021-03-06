<?php get_header(); ?>
<?php //$special_class = is_front_page() : ''?>
	<main id="main" class="page-main page-container" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php // If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif; ?>

		<?php endwhile; ?>

	</main>

<?php get_footer(); ?>
