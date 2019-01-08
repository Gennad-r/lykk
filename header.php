<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>

</head>

<body>

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
								<li class="has-submenu"><a href="#">+ 38 066 66 66 687</a></li>
								<li><a href="#"><span class="icon-fb"></span></a></li>
								<li><a href="#"><span class="icon-phone"></span></a></li>
								<li><a href="#"><span class="icon-skype"></span></a></li>
								<li><a href="#"><span class="icon-insta"></span></a></li>
								<li class="has-submenu"><a href="#">Ру</a></li>
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
					<!-- <nav>
						<ul class="d-flex">
							<li class="has-submenu"><a href="about.html">О компании</a>
								<ul>
									<li><a href="#">Новости компании</a></li>
									<li><a href="#">Публикации и семинары</a></li>
									<li><a href="#">Лицензии и сертификаты</a></li>
									<li><a href="#">Партнеры</a></li>
									<li><a href="#">Отзывы заказчиков</a></li>
								</ul>
							</li>
							<li class="has-submenu"><a href="equipment.html">Оборудование</a>
								<ul>
									<li class="has-submenu"><a href="#">Собственное производство</a>
										<ul>
											<li><a href="#">Установки  биологической очистки</a></li>
											<li><a href="#">Жироуловители</a></li>
											<li><a href="#">Нефтеуловители</a></li>
											<li><a href="#">Станции перекачивания сточных вод</a></li>
											<li><a href="#">Нестандартное емкостное оборудование</a></li>
											<li><a href="#">Другое оборудование</a></li>
										</ul>
									</li>
									<li><a href="#">Другое оборудование</a></li>
								</ul>
							</li>
							<li class="has-submenu"><a href="solutions.html">Решения</a>
								<ul>
									<li><a href="">Комплексные решения по очистке сточных вод</a></li>
									<li><a href="">Очистка бытовых сточных вод</a></li>
									<li><a href="">Очистка промышленных сточных вод</a></li>
									<li><a href="">Утилизация осадков</a></li>
									<li><a href="">Обеззараживание воды</a></li>
								</ul>
							</li>
							<li class="has-submenu"><a href="project.html">Проектирование</a>
								<ul>
									<li><a href="">Проектирование узлов учета воды и тепла</a></li>
									<li><a href="">Проектирование внутренних систем водоснабжения и канализаций</a></li>
									<li><a href="">Проектирование наружных систем водоснабжения и канализаций</a></li>
									<li><a href="">Проектирование очистных сооружений канализации</a></li>
								</ul>
							</li>
							<li class="has-submenu"><a href="devices.html">Приборы учета</a>
								<ul>
									<li><a href="#">Поверка приборов учета воды</a></li>
									<li><a href="#">Установка приборов учета воды и тепла</a></li>
									<li><a href="#">Комплексные решения по дистанционному считыванию данных</a></li>
								</ul>
							</li>
							<li class="has-submenu"><a href="">Анализ воды</a>
								<ul>
									<li><a href="#">Лабораторные исследования питьевой и сточной воды</a></li>
									<li><a href="#">Оборудование для мониторинга качества</a></li>
								</ul>
							</li>
							<li><a href="objects.html">Объекты</a></li>
							<li><a href="">Законодательство</a></li>
							<li><a href="">Контакты</a></li>
						</ul>
					</nav> -->
				</div>
			</div>
		</div>
	</header>
	<main>