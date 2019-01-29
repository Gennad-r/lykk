<?php get_header(); ?>
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
						<h2>Чем занимается компания LYKK</h2>
						<div class="column-text">
							<p><strong>Представительство «LYKK Sp. z.o.o.»</strong> - одна из ведущих Компаний на рынке Украины в сфере водоснабжения, водоотведения и очистки сточных вод. Мы предоставляем весь спектр услуг связанных с реализацией комплексных решений по очистке сточных вод, водоподготовке, учету воды и тепла: начиная от разработки проектных решений и заканчивая монтажом, пуско-наладкой и гарантийным обслуживанием.</p>
							<p>«LYKK» - современная производственная компания, которая выпускает широкий ассортимент инновационных высокоэффективных систем очистки сточных вод (бытовые и промышленные) из полипропилена. Качество всего предлагаемого оборудования и услуг соответствует европейским стандартам и имеет оптимальное соотношение качество/цена.</p>
							<p>Производственно-техническая база Представительства «LYKK Sp. z.o.o.» расположена в городе Харькове (Украина).</p>
							<p>Высокий профессиональной уровень подготовки специалистов и возможности передового высокотехнологичного производства позволяют Компании решать задачи любой сложности.</p>
						</div>
						<div class="col-12 text-right">
								<a href="/about" class="btn">
									Больше о компании LYKK
								</a>
						</div>
					</div>
				</div>

			</div>
		</section>
		<section class="production">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<h1>производимое оборудование</h1>
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
						<a href="<?php echo get_term_link( $item->term_id, 'equipments' ) ?>" class="production-item"> 
							<img src="<?php echo wp_get_attachment_image_url(get_field('img_eq', $item), 'product'); ?>" alt="<?php echo $item->name; ?>" class="img-responsive">
							<div class="production-item__inner"><span><?php echo $item->name; ?></span></div>
						</a>
					</div> <!-- production-item -->
					<?php endforeach ?>


					
					<div class="col-lg-4"> 
						<a href="equipment-clear-dragon-2018.html" class="production-item"> 
							<img src="<?php echo get_template_directory_uri(); ?>/app/img/product-img-06.jpg" alt="" class="img-responsive">
							<div class="production-item__inner"><span>другое оборудование</span></div>
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
						<h1>комплексные решения по очистке сточных вод</h1>
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
								
								<p class="text-right"><a href="/proektirovanie" class="btn">Подробнее</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
<!-- 		<section class="water-counter">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<h1>установки узлов учета воды и тепла</h1>
					</div>
					<div class="col-12">
						<div class="acc-block active">
							<div class="acc-block__header"><i class="bull"></i> Поставка приборов учета воды и тепла</div>
							<div class="column-text">
								<p>Не успели утихнуть страсти относительно общедомовых счетчиков газа, как вступило в силу законодательство, которое фактически отменяет поквартирный учет воды и тепла. Если с тепловыми счетчиками все более-менее понятно, учет тепла итак ведется общедомовой или подъездный за редким исключением, то со счетчиками воды – вопросов больше чем ответов.</p>
								<p>Итак, прежде всего Закон «О коммерческом учете тепловой энергии и водоснабжения» предписывает установить общедомовые приборы учета на все дома, присоединенные к внешним тепловым сетям, горячего и холодного водоснабжения. Согласно Закону, счетчики должны быть установлены операторами внешних сетей к 1 октября 2018 (для жилых домов), либо к 1 октября 2017 (для нежилых зданий).</p>
								<p>Подвох для потребителей кроется в механизме начислений за водоснабжение. Индивидуальные счетчики воды, которые установлены у 90% абонентов, теперь не являются приборами коммерческого учета, а всего лишь информативным устройством, позволяющим определить долю каждого потребителя в общедомовом потреблении воды.</p>
								<p>Таким образом, согласно нового закона, начисление будет производится по общедомовому счетчику – на весь объем воды потребленной жильцами дома. И уже данный объем будет распределяться между потребителями пропорционально их потреблению по индивидуальным счетчикам. То есть, все внутридомовые потери, кражи воды, текущая труба в подвале и т п. – будут равномерно распределяться между абонентами данного дома.</p>
							</div>
						</div>
						<div class="acc-block">
							<div class="acc-block__header"><i class="bull"></i> Поставка приборов учета воды и тепла</div>
							<div class="column-text">
								<p>Не успели утихнуть страсти относительно общедомовых счетчиков газа, как вступило в силу законодательство, которое фактически отменяет поквартирный учет воды и тепла. Если с тепловыми счетчиками все более-менее понятно, учет тепла итак ведется общедомовой или подъездный за редким исключением, то со счетчиками воды – вопросов больше чем ответов.</p>
								<p>Итак, прежде всего Закон «О коммерческом учете тепловой энергии и водоснабжения» предписывает установить общедомовые приборы учета на все дома, присоединенные к внешним тепловым сетям, горячего и холодного водоснабжения. Согласно Закону, счетчики должны быть установлены операторами внешних сетей к 1 октября 2018 (для жилых домов), либо к 1 октября 2017 (для нежилых зданий).</p>
								<p>Подвох для потребителей кроется в механизме начислений за водоснабжение. Индивидуальные счетчики воды, которые установлены у 90% абонентов, теперь не являются приборами коммерческого учета, а всего лишь информативным устройством, позволяющим определить долю каждого потребителя в общедомовом потреблении воды.</p>
								<p>Таким образом, согласно нового закона, начисление будет производится по общедомовому счетчику – на весь объем воды потребленной жильцами дома. И уже данный объем будет распределяться между потребителями пропорционально их потреблению по индивидуальным счетчикам. То есть, все внутридомовые потери, кражи воды, текущая труба в подвале и т п. – будут равномерно распределяться между абонентами данного дома.</p>
							</div>
						</div>
						<div class="acc-block">
							<div class="acc-block__header"><i class="bull"></i> Поставка приборов учета воды и тепла</div>
							<div class="column-text">
								<p>Не успели утихнуть страсти относительно общедомовых счетчиков газа, как вступило в силу законодательство, которое фактически отменяет поквартирный учет воды и тепла. Если с тепловыми счетчиками все более-менее понятно, учет тепла итак ведется общедомовой или подъездный за редким исключением, то со счетчиками воды – вопросов больше чем ответов.</p>
								<p>Итак, прежде всего Закон «О коммерческом учете тепловой энергии и водоснабжения» предписывает установить общедомовые приборы учета на все дома, присоединенные к внешним тепловым сетям, горячего и холодного водоснабжения. Согласно Закону, счетчики должны быть установлены операторами внешних сетей к 1 октября 2018 (для жилых домов), либо к 1 октября 2017 (для нежилых зданий).</p>
								<p>Подвох для потребителей кроется в механизме начислений за водоснабжение. Индивидуальные счетчики воды, которые установлены у 90% абонентов, теперь не являются приборами коммерческого учета, а всего лишь информативным устройством, позволяющим определить долю каждого потребителя в общедомовом потреблении воды.</p>
								<p>Таким образом, согласно нового закона, начисление будет производится по общедомовому счетчику – на весь объем воды потребленной жильцами дома. И уже данный объем будет распределяться между потребителями пропорционально их потреблению по индивидуальным счетчикам. То есть, все внутридомовые потери, кражи воды, текущая труба в подвале и т п. – будут равномерно распределяться между абонентами данного дома.</p>
							</div>
						</div>
						<div class="acc-block">
							<div class="acc-block__header"><i class="bull"></i> Поставка приборов учета воды и тепла</div>
							<div class="column-text">
								<p>Не успели утихнуть страсти относительно общедомовых счетчиков газа, как вступило в силу законодательство, которое фактически отменяет поквартирный учет воды и тепла. Если с тепловыми счетчиками все более-менее понятно, учет тепла итак ведется общедомовой или подъездный за редким исключением, то со счетчиками воды – вопросов больше чем ответов.</p>
								<p>Итак, прежде всего Закон «О коммерческом учете тепловой энергии и водоснабжения» предписывает установить общедомовые приборы учета на все дома, присоединенные к внешним тепловым сетям, горячего и холодного водоснабжения. Согласно Закону, счетчики должны быть установлены операторами внешних сетей к 1 октября 2018 (для жилых домов), либо к 1 октября 2017 (для нежилых зданий).</p>
								<p>Подвох для потребителей кроется в механизме начислений за водоснабжение. Индивидуальные счетчики воды, которые установлены у 90% абонентов, теперь не являются приборами коммерческого учета, а всего лишь информативным устройством, позволяющим определить долю каждого потребителя в общедомовом потреблении воды.</p>
								<p>Таким образом, согласно нового закона, начисление будет производится по общедомовому счетчику – на весь объем воды потребленной жильцами дома. И уже данный объем будет распределяться между потребителями пропорционально их потреблению по индивидуальным счетчикам. То есть, все внутридомовые потери, кражи воды, текущая труба в подвале и т п. – будут равномерно распределяться между абонентами данного дома.</p>
							</div>
						</div>
						<P class="text-right"><span class="buttom btn">Консультация менеджера</span></P>
					</div>
				</div>
			</div>
		</section>

-->		

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
						<h1>реализованные проекты</h1>
					</div>
				</div>
				<div class="row project-posts">
					<div class="col-12">
						<?php foreach ($real_projects as $key => $project) : ?>
						<div class="post-holder mb-3">
							<div class="img-holder"><img src="<?php echo get_the_post_thumbnail_url( $project, 'product' ); ?>" alt="<?php echo $project->post_title; ?>" class="img-responsive"></div>
							<div class="text-holder">
								<div class="date"><?php echo get_post_time('d.m.Y', $project->ID); ?></div>
								<div class="post-header"><?php echo $project->post_title; ?></div>
								<?php echo letters_limit($project->post_content, 500); ?>
								<p class="read-more text-right"><a href="<?php echo get_permalink($project->ID); ?>">читать больше...</a></p>
							</div>
						</div>
						<?php endforeach; ?>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<p class="text-right">
							<a href="/projects" class="btn">
								Релизованные проекты
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
						<h1>новости</h1>
					</div>
				</div>
				<div class="row news-posts">
					<?php foreach ($news_posts as $value) :
					mb_internal_encoding('utf-8'); 
					$img = get_the_post_thumbnail_url($value->ID, 'product');
					
					?>
					
					<div class="col-lg-3">
						<div class="post-holder mb-3">
							<a href="<?php echo get_permalink($value->ID); ?>">
							<div class="img-holder"><img src="<?php echo $img; ?>" alt="" class="img-responsive"></div>
							<div class="text-holder">
								<div class="date"><?php echo get_the_date($d='',$value->ID); ?></div>
								<div class="post-header"><?php echo letters_limit($value->post_title, 26) ?></div>
								<p><?php echo letters_limit($value->post_content, 120) ?></p>
							</div>
							</a>
						</div>
					</div>
					<?php endforeach ?>
					
				</div>
			</div>
		</section>
		<?php endif ?>
		<sections class="contacts">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<h1>контакты</h1>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4">
						<div class="map-holder">
							<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d4308.020287566211!2d36.3396669760339!3d50.056994824979355!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2sua!4v1537737306291" width="100%" height="300px" frameborder="0" style="border:0" allowfullscreen></iframe>
						</div>
					</div>
					<div class="col-lg-8">
						<form>
							<div class="row">
								<div class="col-6">
									<div class="field-holder">
										<input type="text" required placeholder="Компания*">
									</div>
									<div class="field-holder">
										<input type="text" required placeholder="Имя*">
									</div>
									<div class="field-holder">
										<input type="text" required placeholder="Email*">
									</div>
									<div class="field-holder">
										<input type="text" required placeholder="Контактный номер*">
									</div>
									<div class="field-holder">
										<input type="text" required placeholder="Город*">
									</div>
									<div class="field-holder">
										<input type="text" required placeholder="Страна*">
									</div>
								</div>
								<div class="col-6">
									<div class="field-holder">
										<textarea placeholder="Написать сообщение*" cols="30" rows="10"></textarea>
									</div>
								</div>
								<div class="col-12">
									<p class="text-right"><button class="btn">Отправить сообщение</button></p>
								</div>
							</div>	
						</form>
					</div>
				</div>
			</div>
		</sections>
		<?php get_footer(); ?>