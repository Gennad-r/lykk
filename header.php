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
					<div class="row">
						<nav class="prenav prenav-left">
							<div class="logo-holder">
								<a href="<?php echo site_url(); ?>"><svg viewBox="0 0 117 26" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M52.988 20.24H41.036V0.368H34.304V26H52.988V20.24ZM70.5352 0.368H63.0472L57.7912 9.98L52.6432 0.368H45.0112L54.4432 16.316V26H61.1032V16.424L70.5352 0.368ZM91.9549 0.368H83.6749L75.1069 10.16V0.368H68.5549V26H75.1789V18.08L77.9149 15.236L84.8269 26H93.1429L82.4509 10.412L91.9549 0.368ZM115.038 0.368H106.758L98.1905 10.16V0.368H91.6385V26H98.2625V18.08L100.998 15.236L107.91 26H116.226L105.534 10.412L115.038 0.368Z" fill="#fff"/>
									<circle cx="13" cy="13" r="13" fill="#fff"/>
								</svg></a>
							</div>
						</nav>
						<nav class="prenav prenav-right">
							<div class="search-form icon-find">
								<form role="search" method="get" id="searchform" >
									<input type="text" value="" placeholder="Поиск" name="s" id="s">
									<input type="submit" id="searchsubmit" value="">
								</form>
							</div>
							<ul class="d-flex justify-content-end">
								<li class="menu-item-has-children"><a href="javascript:void(0);"><?php echo $nums[0]['number']; ?></a>
									<ul class="sub-menu">
										<?php foreach ($nums as $num) : ?>
											<li><a href="tel:<?php echo preg_replace('/[\(\)\+\-\s]+/', '', $num['number']) ?>"><?php echo $num['number']; ?></a></li>
										<?php endforeach ?>
									</ul>
								</li>
								<li><a href="#"><span class="icon-fb"></span></a></li>
								<li><a href="#"><span class="icon-phone"></span></a></li>
								<li><a href="#"><span class="icon-skype"></span></a></li>
								<li><a href="#"><span class="icon-insta"></span></a></li>
								<?php 
								// WP Globus menu building block --------
								echo lang_menu(); ?>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div> <!-- preheader-container end -->
		<div class="container">
			<div class="main-header-section mt-3 d-flex">
				<div class="navigation-main">
						<?php 
							wp_nav_menu( array( 
								'theme_location' => 'menu-1',
								'container' => 'nav',
								'items_wrap' => '<ul class="%1$s d-flex">%3$s</ul>'
							 ) );
						?>
				</div>
			</div>
		</div>
	</header>
	<main>
		