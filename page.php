<?php get_header(); ?>
<section>
	<div class="container">
		<?php while (have_posts()) :
		the_post();
		 ?>
		<div class="row">
			<div class="col-12">
				<h1><?php echo get_the_title(); ?></h1>
			</div>
			<div class="col-12 content-area">
				<?php the_content(); ?>
			</div>
		</div>
		<?php endwhile ?>
	</div>
</section>
<?php get_footer(); ?>