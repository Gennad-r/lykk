	</main>
	<footer>
		<?php $nums = get_field('contacts', 'options')['phone_numbers']; ?>
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<nav class="prenav prenav-left">
						<img src="img/logo-white.svg" alt="">		
					</nav>
					<nav class="prenav prenav-right">
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
							<li class="has-submenu"><a href="#">Ру</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row pt-2">
				<div class="col-md-6">
					<p>Компания LYKK – разработка, поставка, монтаж, пуско-наладочные работы, гарантийное и постгарантийное обслуживание оборудования для водоочистки и водоподготовки. Подготовка проектно-сметной документации. Системы водоподготовки для промышленности и частного сектора. Работаем по всей территории Украины с 2011 года. Внедряем новое оборудование и реконструируем старое. Производим широкий спектр продукции по собственным технологическим изысканиям. В настоящее время компания LYKK занимает лидирующую позицию в рейтинге надежности и качества среди организаций, занимающихся водоподготовкой в Украине</p>
				</div>
				<div class="col-md-2 offset-md-4">
					<p>Cвяжитесь с нами наша сеть предложения о работе карта сайта юридическая база</p>
				</div>
			</div>
		</div>
	</footer>
	<?php wp_footer(); ?>
</body>
</html>
