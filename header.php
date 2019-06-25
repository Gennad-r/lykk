<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>

	<?php $nums = get_field('contacts', 'options')['phone_numbers']; ?>
</head>

<body <?php body_class(); ?>>

	<!-- Custom HTML -->
	<header>
		<div class="go-top icon-up"></div>
		<div class="container-fluid bg-primary">
			<div class="row">
				<div class="container">
					<div class="row hamburger-logo-holder">
						<nav class="prenav prenav-left">
							<div class="logo-holder">
								<a href="<?php echo site_url(); ?>">
								<img src="<?php echo get_template_directory_uri(); ?>/app/img/logo-white.svg" alt="" class="img-responsive">
								</a>
							</div>
							<div class="hamburger hamburger--spin">
								<div class="hamburger-box">
									<div class="hamburger-inner"></div>
								</div>
							</div>
						</nav>
						<nav class="prenav prenav-right">
							<div class="search-form">
							<?php get_search_form(); ?>
							</div>
							<ul class="d-flex justify-content-end">
								<li class="menu-item-has-children"><a href="javascript:void(0);"><?php echo $nums[0]['number']; ?></a>
									<ul class="sub-menu">
										<?php foreach ($nums as $num) : ?>
											<li><a href="tel:<?php echo preg_replace('/[\(\)\+\-\s]+/', '', $num['number']) ?>"><?php echo $num['number']; ?></a></li>
										<?php endforeach ?>
									</ul>
								</li>
								<!-- <li><a href="#"><span class="icon-fb"></span></a></li> -->
								<!-- <li><a href="#"><span class="icon-phone"></span></a></li> -->
								<li><a href="skype:search_back?chat"><span class="icon-skype"></span></a></li>
								<!-- <li><a href="#"><span class="icon-insta"></span></a></li> -->
								<?php 
								// WP Globus menu building block --------
								echo lang_menu(); ?>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div> <!-- preheader-container end -->
		<div class="container mob-nav-hide">
			<div class="main-header-section">
				<div class="navigation-main">
						<?php 
							wp_nav_menu( array( 
								'theme_location' => 'menu-1',
								'container' => 'nav',
								'items_wrap' => '<ul class="%1$s">%3$s</ul>'
							 ) );
						?>
				</div>
			</div>
		</div>
	</header>
	<main>
		