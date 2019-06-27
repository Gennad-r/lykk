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

	<?php 
			$news_posts = get_posts(array('category' => 1, 'numberposts' => 4));
			if (count($news_posts) >= 4) :
		?>
		<section class="news">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<h1><?php echo get_field('news_title', 2006) ?></h1>
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

<?php 
	$public_posts = get_posts(array('category' => 14, 'numberposts' => 3));
	if (count($public_posts) >= 3) :
?>
	<div class="container mb-4">
		<div class="row">
			<div class="col-12">
				<h2><?php echo get_field('pub_title', $page_id) ?></h2>
			</div>
		</div>
		<div class="row news-posts">
			<div class="col-12">
				<?php foreach ($public_posts as $value) :
				?>
				<div class="publication-excerpt">
					<div class="date"><?php echo get_the_date($d='',$value->ID); ?></div>
					<p class="excerpt">
						<a href="<?php echo get_permalink($value->ID); ?>"><strong><?php echo $value->post_title; ?></strong> | <?php echo letters_limit($value->post_content, 200) ?></a>                   
					</p>
				</div>
				<?php endforeach ?>
			</div>
		</div>
	</div>
<?php endif ?>

<?php 
	$sert_posts = get_posts(array('category' => 15));
	if (count($sert_posts) >= 4) :
?>
	<div class="container mb-4">
		<div class="row">
			<div class="col-12">
				<h2><?php echo get_field('sert_title', $page_id) ?></h2>
			</div>
		<?php foreach ($sert_posts as $value) : 
			$img = get_the_post_thumbnail_url($value->ID, 'certificate'); ?>
			<div class="col-6 col-md-3"><a href="<?php echo get_permalink($value->ID); ?>"><img src="<?php echo $img ?>" alt="<?php echo $value->post_title; ?>" class="img-responsive"></a></div>
		<?php endforeach ?>
		</div>
	</div>
<?php endif ?>



<?php 
	$partner_posts = get_posts(array('category' => 16));
	if (count($partner_posts) >= 4) :
?>
	<div class="container mb-4">
		<div class="row">
			<div class="col-12">
				<h2><?php echo get_field('part_title', $page_id) ?></h2>
			</div>
		<?php foreach ($partner_posts as $value) : 
			$img = get_the_post_thumbnail_url($value->ID, 'partner'); ?>
			<div class="col-6 col-md-3 mb-3"><a href="<?php echo get_permalink($value->ID); ?>"><img src="<?php echo $img ?>" alt="<?php echo $value->post_title; ?>" class="img-responsive"></a></div>
		<?php endforeach ?>
		</div>
	</div>
<?php endif ?>


</section>

<?php get_footer(); ?>