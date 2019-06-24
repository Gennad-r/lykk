<?php get_header(); 
$page_id = 2006;
?>
		<section class="about-company">
			<div class="container">
				<div class="row">
					<?php if ( get_field('slider_title', 'options') != '' ) : ?>
					<div class="col-12">
						<h1><?php echo get_field('slider_title', 'options') ?></h1>
					</div>
					<?php endif ?>
				</div>
				<?php 
				$slider = get_field('slider', 'options');
				if (count($slider) > 0) :
				?>
				<div class="row">
					<div class="col-12">
						<div class="owl-carousel pict-slider">
							<?php foreach ($slider as $slide) : ?>
							<div class="pict-slider__item-holder">
								<img src="<?php echo wp_get_attachment_image_url($slide['image'], 'full_wide'); ?>">
							</div> <!-- item-holder -->
							<?php endforeach ?>
						</div>
					</div>
				</div>
				<?php endif ?>
				

						<?php 
						echo do_shortcode( '[directions_menu_code]' );
						?>
				<div class="row mt-3">
					<div class="col-12">
					<?php 
					
					echo apply_filters('the_content', $post->post_content);
					?>
						
					</div>
				</div>

			</div>
		</section>
		<section class="production">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<h1>
							<?php echo get_field('eq_title', $page_id) ?>
						</h1>
					</div>

					<?php $args = array(
							'taxonomy' => 'equipments', 
							'parent' => 4, 
							'number' => 5, 
							'hide_empty' => false, 
						);
					
						$equipments = get_terms($args);
						foreach ($equipments as $item) : 
						//var_dump(get_term_link( $item->term_id, 'equipments' ));
						//var_dump(get_field('img_eq', $item)); ?>
					<div class="col-lg-4"> 
					<?php $link = get_field('custom_link', $item)?get_field('custom_link', $item):get_term_link( $item->term_id, 'equipments' );
					?>
						<a href="<?php echo $link; ?>" class="production-item"> 
							<img src="<?php echo wp_get_attachment_image_url(get_field('img_eq', $item), 'product'); ?>" alt="<?php echo $item->name; ?>" class="img-responsive">
							<div class="production-item__inner"><span><?php echo $item->name; ?></span></div>
						</a>
					</div> <!-- production-item -->
					<?php endforeach ?>


					
					<div class="col-lg-4"> 
						<a href="equipment-clear-dragon-2018.html" class="production-item"> 
							<img src="<?php echo get_template_directory_uri(); ?>/app/img/product-img-06.jpg" alt="" class="img-responsive">
							<div class="production-item__inner"><span><?php echo get_field('another_eq', $page_id) ?></span></div>
						</a>
					</div> <!-- production-item -->
				</div>
			</div>
		</section>
		<section class="complex-solutions">
			<?php 
			$solutions = get_field('complex_solutions', 'options');
			?>
			<div class="container">
				<div class="row">
					<div class="col-12">
						<h1><?php echo get_field('pr_title', $page_id) ?></h1>
					</div>
				</div>
			</div>

			<div class="bg-image">
				<div class="container">
					<div class="row pt-3 mb-3">
						<?php foreach ($solutions as $key => $solution) : ?>
						<div class="col-lg-2 col-md-4">
							<a href="#" data-order="<?php echo $key ?>" class="<?php echo !$key?'active ':'' ?>solution">
								<div class="solution__icon"><span class="<?php echo $solution['icon'] ?>"></span></div>
								<div class="solution__text"><?php echo $solution['title'] ?></div>
							</a> <!-- solution -->
						</div>	
						<?php endforeach ?>
					</div>
					<div class="row">
						<div class="col-12">
							<div class="solution__description">
								<?php foreach ($solutions as $solution) : ?>
								<div class="solution__text-block">
									<h2><?php echo $solution['title'] ?>:</h2>
									<div class="column-text">
										<?php echo $solution['text'] ?>
									</div>
								</div> <!-- text-block -->
								<?php endforeach ?>
								
								<p class="text-right"><a href="/proektirovanie" class="btn"><?php echo get_field('more', $page_id) ?></a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>


		<?php $real_projects = get_posts(array(
			'post_type' => 'projects',
			'numberposts' => 4
		)); 
			
		if ($real_projects) :
		?>

		<section class="finished-projects">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<h1><?php echo get_field('real_title', $page_id) ?></h1>
					</div>
				</div>
				<div class="row project-posts">
					<div class="col-12">
						<?php foreach ($real_projects as $key => $post) :
						setup_postdata($post);	?>
						<div class="post-holder mb-3">
							<div class="img-holder"><img src="<?php echo get_the_post_thumbnail_url( $post, 'product' ); ?>" alt="" class="img-responsive"></div>
							<div class="text-holder">
								<div class="date"><?php echo get_post_time('d.m.Y', $post->ID); ?></div>
								<div class="post-header"><?php echo apply_filters('the_title', $post->post_title); ?></div>
								<p><?php $post_content = apply_filters('the_content', $post->post_content); ?></p>
								<?php echo letters_limit($post_content, 500); ?>
								<p class="read-more text-right"><a href="<?php echo get_permalink($post->ID); ?>"><?php echo get_field('more', $page_id) ?></a></p>
							</div>
						</div>
						<?php 
					wp_reset_postdata();
					endforeach; ?>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<p class="text-right">
							<a href="/projects" class="btn">
							<?php echo get_field('real_title', $page_id) ?>
							</a>
						</p>
					</div>
				</div>
			</div>
		</section>
		<?php endif; ?>

		<?php 
			$news_posts = get_posts(array('category' => 1, 'numberposts' => 4));
			if (count($news_posts) >= 4) :
		?>
		<section class="news">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<h1><?php echo __('новости')?></h1>
					</div>
				</div>
				<div class="row news-posts">
					<?php foreach ($news_posts as $post) :
					setup_postdata($post);
					$post_content = apply_filters('the_content', $post->post_content);
					$post_title = apply_filters('the_title', $post->post_title);
					mb_internal_encoding('utf-8'); 
					$img = get_the_post_thumbnail_url($post->ID, 'product');
					?>
					
					<div class="col-lg-3">
						<div class="post-holder mb-3">
							<a href="<?php echo get_permalink($post->ID); ?>">
							<div class="img-holder"><img src="<?php echo $img; ?>" alt="" class="img-responsive"></div>
							<div class="text-holder">
								<div class="date"><?php echo get_the_date($d='',$post->ID); ?></div>
								<div class="post-header"><?php echo letters_limit($post_title, 26) ?></div>
								<p><?php echo letters_limit($post_content, 120) ?></p>
							</div>
							</a>
						</div>
					</div>
					<?php 
					wp_reset_postdata();
					endforeach ?>
					
				</div>
			</div>
		</section>
		<?php endif ?>
		<section class="contacts">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<h1><?php echo __('контакты')?></h1>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4">
						<div class="map-holder">
							<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d4308.020287566211!2d36.3396669760339!3d50.056994824979355!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2sua!4v1537737306291" width="100%" height="300px" frameborder="0" style="border:0" allowfullscreen></iframe>
						</div>
					</div>
					<div class="col-lg-8">
						<?php echo do_shortcode(get_field('contact', $page_id)); ?>
					</div>
				</div>
			</div>
		</section>
		<?php get_footer(); ?>