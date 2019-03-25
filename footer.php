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
							<?php echo lang_menu(); ?>
							</li>
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
	<div class="modal fade" id="check-request-modal">
	  <div class="modal-dialog modal-lg">
	    <div class="modal-content">
	    	<h1 class="mb-4">Заявка на поверку счетчика</h1>
	    	<form action="">
	    		<div class="container">
	    			<div class="row mb-3">
				    	<div class="col-12">
				    		<h4>Контактные данные</h4>
				    	</div>
				    </div>
				    <div class="row mb-3">
				    	<div class="col-md-2 d-flex">
				    		<p>Район</p>
				    	</div>
	    				<div class="col-md-10 input-group">
	    					<input type="text" class="form-control" name="Район">
	    				</div>
	    			</div>
				    <div class="row mb-3">
				    	<div class="col-md-2 d-flex">
				    		<p>Улица</p>
				    	</div>
	    				<div class="col-md-10 input-group">
	    					<input type="text" class="form-control" name="Улица">
	    				</div>
	    			</div>
				    <div class="row mb-3">
				    	<div class="col-md-2 d-flex">
				    		<p>Дом</p>
				    	</div>
	    				<div class="col-md-2 input-group">
	    					<input type="text" class="form-control" name="Дом">
	    				</div>
				    	<div class="col-md-2 d-flex">
				    		<p>Корпус</p>
				    	</div>
	    				<div class="col-md-2 input-group">
	    					<input type="text" class="form-control" name="Корпус">
	    				</div>
				    	<div class="col-md-2 d-flex">
				    		<p>Квартира</p>
				    	</div>
	    				<div class="col-md-2 input-group">
	    					<input type="text" class="form-control" name="Квартира">
	    				</div>
	    			</div>

	    			<div class="row mb-3">
				    	<div class="col-md-2 d-flex">
				    		<p>Ф.И.О.</p>
				    	</div>
	    				<div class="col-md-10 input-group">
	    					<input type="text" class="form-control" name="Ф.И.О.">
	    				</div>
	    			</div>

	    			<div class="row mb-3">
				    	<div class="col-md-2 d-flex">
				    		<p>Телефон</p>
				    	</div>
	    				<div class="col-md-10 input-group">
	    					<input type="text" class="form-control" name="Телефон">
	    				</div>
	    			</div>

	    			<div class="row mb-3">
				    	<div class="col-md-2 d-flex">
				    		<p>Email</p>
				    	</div>
	    				<div class="col-md-10 input-group">
	    					<input type="email" class="form-control" name="Email">
	    				</div>
	    			</div>
					<div class="row">
				    	<div class="col-12 d-flex">
				    		<h4>Количество счетчиков</h4>
				    	</div>
				    </div>
				    <div class="row mb-3">
				    	<div class="col-md-10 d-flex">
				    		<p>Количество счетчиков холодной воды</p>
				    	</div>
	    				<div class="col-md-2 input-group">
	    					<select class="custom-select" id="inputGroupSelect02" name="Количество счетчиков холодной воды">
				    		    <option selected="">...</option>
				    		    <option value="1">1</option>
				    		    <option value="2">2</option>
				    		    <option value="3">3</option>
				    		</select>
	    				</div>
	    			</div>

				    <div class="row mb-3">
	    				<div class="col-12 input-group al-c">
	    					<input type="checkbox" aria-label="Checkbox for following text input" name="Механический счетчик">
	    					<span class="ml-2">Механический счетчик</span>
	    				</div>
	    				<div class="col-12 input-group al-c">
	    					<input type="checkbox" aria-label="Checkbox for following text input" name="Многотарифный счетчик">
	    					<span class="ml-2">Многотарифный счетчик</span>
	    				</div>
	    			</div>

				    <div class="row mb-3">
				    	<div class="col-md-10">
				    		<p>Количество счетчиков горячей воды</p>
				    	</div>
	    				<div class="col-md-2 input-group">
	    					<select class="custom-select" id="inputGroupSelect02" name="Количество счетчиков горячей воды">
				    		    <option selected="">...</option>
				    		    <option value="1">1</option>
				    		    <option value="2">2</option>
				    		    <option value="3">3</option>
				    		</select>
	    				</div>
	    			</div>

				    <div class="row mb-3">
	    				<div class="col-12 input-group al-c">
	    					<input type="checkbox" aria-label="Checkbox for following text input" name="Механический счетчик">
	    					<span class="ml-2">Механический счетчик</span>
	    				</div>
	    				<div class="col-12 input-group al-c">
	    					<input type="checkbox" aria-label="Checkbox for following text input" name="Многотарифный счетчик ЛВ-4Т">
	    					<span class="ml-2">Многотарифный счетчик ЛВ-4Т</span>
	    				</div>
	    			</div>

				    <div class="row mb-3">
				    	<div class="col-md-12">
				    		<p>Дополнительня информация</p>
				    	</div>
	    				<div class="col-md-12 input-group">
	    					<textarea class="form-control" aria-label="With textarea" name="Дополнительня информация"></textarea>
	    				</div>
	    			</div>

					<div class="row mb-4 mt-4">
						<div class="col-12 text-center">
							<input type="submit" id="check-request" class="btn" value="Заказать поверку">
						</div>
						<div class="col-12 mt-4">
							<span>Многоканальный телефон службы поддержки</span> <a href="tel:+ 38 066 66 66 687">+ 38 066 66 66 687</a>
						</div>
					</div>

    			</div>
    		</form></div>
            
          </div>
          <!-- Hidden Required Fields -->
		<input type="hidden" name="project_name" value="Lykk-WEB-Site">
		<input type="hidden" name="form_subject" value="Counter-Check-Request">
			<!-- END Hidden Required Fields -->
	    	
	    </div>
	<?php wp_footer(); ?>
</body>
</html>
