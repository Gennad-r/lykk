<?php get_header(); ?>
<section>
	<div class="container">
		<?php while (have_posts()) :
		the_post();
		 ?>
		<div class="row">
			<div class="col-12 mb-4">
				<h1 class="mb-3"><?php echo get_the_title(); ?></h1>
			</div>
				<?php if (has_post_thumbnail($post->ID)) : ?>
				<div class="col-md-4">
					<div class="img-holder mt-2">
						<img src="<?php echo get_the_post_thumbnail_url($post->ID, 'product') ?>" alt="" class="img-responsive">
					</div>
				</div>
				<div class="col-md-8 content-area">
					<p class="text-right"><?php the_date('j F Y', get_field('translations', 'options')['published'] . ' ', ' ' . get_field('translations', 'options')['year']); ?></p>
					<?php the_content(); 
					echo post_share_icons_small();
					?>
				</div>
				<?php else : ?>
				<div class="col-12 content-area">
					<p class="text-right"><?php the_date('j F Y', get_field('translations', 'options')['published'] . ' ', ' ' . get_field('translations', 'options')['year']); ?></p>
					<?php the_content(); 
					echo post_share_icons_small();
					?>
				</div>
				<?php endif ?>
		</div>
		<?php endwhile ?>
	</div>
</section>
<?php get_footer(); ?>