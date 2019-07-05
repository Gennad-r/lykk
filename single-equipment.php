<?php get_header(); ?>
<section>
	<div class="container">
		<div class="row pages-second-level">
		<?php while (have_posts()) :
		the_post(); ?>
		<div class="col-12 mb-3">
			<h1><?php echo get_the_title(); ?></h1>
		</div>

		<?php
		$imgs = get_field('equipment_pics', $post->ID);
		$tabs = get_field('description', $post->ID);
			//var_dump($post->ID);
			//var_dump($imgs);
		if ($imgs) :
			foreach ($imgs as $value) : ?>
			<div class="col-md-4 mb-2">
				<?php $img_src = wp_get_attachment_image_url($value['img'], 'product'); ?>
				<img src="<?php echo $img_src ?>" alt="" class="img-responsive">
			</div>
			<?php endforeach;?>
		<?php endif; ?>

		
		<?php if($tabs) : ?>
			<div class="col-12 tabs">
				<ul class="tabs-controls">
			<?php foreach ($tabs as $key => $tab) : ?>
				<li data-order="<?php echo $key; ?>"<?php echo ($key == 0)?' class="active"':''; ?>><?php echo $tab['title']; ?></li>
			<?php endforeach; ?>
				</ul>
				<ul class="tabs-content">
			<?php foreach ($tabs as $tab) : ?>
				<li>
					<?php echo $tab['text_content']; ?>
				</li>
			<?php endforeach; ?>
				</ul>
				<p class="text-right">
					<a class="btn" href="/kontaktyi"><?php echo get_field('translations', 'options')['ask_manager'] ?></a>
				</p>
			</div>
		<?php endif; ?>


		<?php endwhile; ?>
		</div>
	</div>
</section>
<?php get_footer(); ?>