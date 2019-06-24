<?php get_header(); ?>
<section>
	<div class="container">
		<?php while (have_posts()) :
		the_post();
		 ?>
		<div class="row mb-4">
			<div class="col-12">
				<h1><?php echo get_the_title(); ?></h1>
			</div>
			<div class="col-4">
				<img src="<?php echo get_the_post_thumbnail_url($post->ID, 'product'); ?>" alt="<?php echo get_the_title(); ?>" class="img-responsive">
			</div>
			<div class="col-8 content-area">
				<?php the_content(); ?>
			</div>
		</div>
		<?php endwhile ?>
	</div>
</section>
<?php get_footer(); ?>