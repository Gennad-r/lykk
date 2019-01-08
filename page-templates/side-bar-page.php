<?php
/**
 * Template Name: Страница с боковым меню
 *
 * @package WordPress
 * @subpackage Lykk
 */

get_header(); ?>

<section>
	<div class="container">
		<?php while (have_posts()) :
		the_post();
		 ?>
		<div class="row">
			<div class="col-12 mt-3">
				<h1><?php echo get_the_title(); ?></h1>
			</div>

			<div class="col-12 col-md-3">
				
			</div>


			<div class="col-12 col-md-9 content-area">
				<?php if (has_post_thumbnail($post->ID)) : ?>
				<div class="img-holder mb-3">
					<img src="<?php echo get_the_post_thumbnail_url($post->ID, 'full_wide') ?>" alt="" class="img-responsive">
				</div>
				<?php endif ?>
				<?php the_content(); ?>
			</div>
		</div>
		<?php endwhile ?>
	</div>
</section>
<?php get_footer(); ?>