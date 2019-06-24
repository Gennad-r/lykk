<?php get_header(); ?>
<section>
	<div class="container asd">
    <div class="row">
        <h1 class="col">Результаты поиска по слову <?php echo esc_html( get_search_query() ) ?></h1>
    </div>
		<?php while (have_posts()) :
		the_post();
		 ?>
		<div class="row mb-4">
			<div class="col-12">
				<h3><?php echo get_the_title(); ?></h3>
			</div>
			<div class="col-1">
				<img src="<?php echo get_the_post_thumbnail_url($post->ID, 'thumbnail'); ?>" alt="<?php echo get_the_title(); ?>" class="img-responsive">
			</div>
			<div class="col-11 content-area">
            <a href="<?php the_permalink(); ?>">
				<?php echo letters_limit(get_the_content(),220); ?>
            </a>
			</div>
		</div>
		<?php endwhile ?>
	</div>
</section>
<?php get_footer(); ?>