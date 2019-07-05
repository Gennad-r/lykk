<?php 
$eq = get_post_type($post);
if ($eq == 'equipment'){
	wp_redirect( '/proizvodimoe-oborudovanie', 301 );
	exit;
}
//var_dump($post);?>
<?php get_header(); ?>
		
		<section class="production">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<h1><?php echo single_term_title(); ?></h1>
					</div>
					
					<?php 
					if (have_posts()) :

					while (have_posts()) :
                    the_post(); 
                    ?>



					<div class="col-lg-4"> 
						<a href="<?php echo get_the_permalink(); ?>" class="production-item"> 
							<img class="img-responsive" src="<?php echo get_the_post_thumbnail_url($post->ID, 'product'); ?>" alt="<?php echo $post->post_title; ?>" class="img-responsive">
							<div class="production-item__inner"><span><?php echo $post->post_title; ?></span></div>
						</a>
					</div> <!-- production-item -->
						
					<?php
					endwhile;
					 else : ?>
					<div class="col-lg-12">
						<h2 class="text-center mt-4 mb-4"><?php echo get_field('translations', 'options')['no_exist'] ?></h2>
					</div>
					<?php

				endif;
					 ?>
					
				</div>
			</div>
		</section>

<?php get_footer(); ?>