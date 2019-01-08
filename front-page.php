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
				

				<div class="row about-company">
						<?php 
						echo do_shortcode( '[directions_menu_code]' );
						?>
				</div>

				<div class="row mt-3">
					<div class="col-12">
						<h2>Чем занимается компания LYKK</h2>
						<div class="column-text">
							<p>Компания LYKK это – разработка, поставка, монтаж, пуско-наладочные работы, гарантийное и постгарантийное обслуживание оборудования для водоочистки и водоподготовки. Подготовка проектно-сметной документации. Системы водоподготовки для промышленности и частного сектора. Работаем по всей территории Украины с 2011 года. Внедряение новго оборудования и реконструкция старого. Производство широкого спектра продукции по собственным технологическим изысканиям.</p>
							<p>В настоящее время компания LYKK занимает лидирующую позицию в рейтинге надежности и качества среди организаций, занимающихся водоподготовкой в Украине.</p>
						</div>
						<div class="col-12 text-right">
								<a href="about.html" class="btn">
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
						<div class="col-lg-2 col-md-4">
							<a href="#" data-order="0" class="solution active">
								<div class="solution__icon"><span class="icon-lamp-brain"></span></div>
								<div class="solution__text">Предпроектные работы</div>
							</a> <!-- solution -->
						</div>
						<div class="col-lg-2 col-md-4">
							<a href="#" data-order="1" class="solution">
								<div class="solution__icon"><span class="icon-lamp-pen"></span></div>
								<div class="solution__text">Проектирование</div>
							</a> <!-- solution -->
						</div>
						<div class="col-lg-2 col-md-4">
							<a href="#" data-order="2" class="solution">
								<div class="solution__icon"><span class="icon-water-switcher"></span></div>
								<div class="solution__text">Строительные работы и поставка оборудования</div>
							</a> <!-- solution -->
						</div>
						<div class="col-lg-2 col-md-4">
							<a href="#" data-order="3" class="solution">
								<div class="solution__icon"><span class="icon-tool-box"></span></div>
								<div class="solution__text">Шеф-монтажные и монтажные работы</div>
							</a> <!-- solution -->
						</div>
						<div class="col-lg-2 col-md-4">
							<a href="#" data-order="4" class="solution">
								<div class="solution__icon"><span class="icon-pen-sheet"></span></div>
								<div class="solution__text">Пуско-наладка и обучение персонала</div>
							</a> <!-- solution -->
						</div>
						<div class="col-lg-2 col-md-4">
							<a href="#" data-order="5" class="solution">
								<div class="solution__icon"><span class="icon-sert"></span></div>
								<div class="solution__text">Гарантийное и пост гарантийное обслуживание</div>
							</a> <!-- solution -->
						</div>
					</div>
					<div class="row">
						<div class="col-12">
							<div class="solution__description">
								<div class="solution__text-block">
									<h2>Предпроектные работы:</h2>
									<div class="column-text">
										<p>Для исключения возможности принятия некорректных технологических решений, основанных на неточных или неверных исходных данных, перед тем, как приступить к разработке проекта строительства очистных сооружений, специалисты компании LYKK проводят комплексное исследование сточных вод предприятия с определением возможности применения различных методов очистки для достижения их требуемого качества наиболее рациональным путем.</p>
										<p>Комплексное обследование проводится от мест образования сточных вод до места выпуска, включает определение оптимального направления распределения потоков сточных вод от производственных участков, анализ сточных вод на выходе из основных источников образования и в месте выпуска.</p>
									</div>
								</div> <!-- text-block -->
								<div class="solution__text-block">
									<h2>Проектирование:</h2>
									<div class="column-text">
										<p>Одним из основных видов деятельности нашей компании является проектирование объектов водоснабжения, водоотведения и очистных сооружений. Проектирование – это основа при строительстве очистных сооружений канализации, учитывающая особенности размещения и работу комплекса очистки сточных вод. Данный процесс включает в себя разработку специальных материалов, которые являются необходимыми и достаточными для строительства ОС.</p>
										<p>При проектировании мы применяем передовые технологии в области водоотведения и очистки сточных вод. Этот подход позволяет нам выбирать оптимальное решение и обеспечить максимальную эффективность инвестиционно-экологического проекта. Кроме того мы всегда учитываем пожелания Заказчика.</p>
									</div>
								</div> <!-- text-block -->
								<div class="solution__text-block">
									<h2>Строительные работы и поставка оборудования:</h2>
									<div class="column-text">
										<p>Компания LYKK выполняет полный комплекс работ по строительству и реконструкции очистных сооружений. Основными принципами при выполнении работ для нас являются критерии качества и гарантированного выполнения взятых на себя обязательств в соответствии с требованиями Заказчика и природоохранного законодательства. Мы готовы в сжатые сроки и с надлежащим качеством выполнить любые самые сложные задачи, связанные со строительством и реконструкцией очистных сооружений. На все виды предлагаемых работ и услуг компания имеет Государственную лицензию.</p>
										<p>В своих проектах мы используем широкий спектр водоочистного оборудования, в том числе и собственного производства. Выполняя проекты, как муниципальных очистных сооружений, так и очистных сооружений промышленных предприятий, наши специалисты не ограничиваются оборудованием собственного производства, также используя оборудование, производимое нашими партнерами.</p>
									</div>
								</div> <!-- text-block -->
								<div class="solution__text-block">
									<h2>Шеф-монтажные и монтажные работы:</h2>
									<div class="column-text">
										<p>Шеф-монтажные работы представляют собой наблюдение, организацию и техническое руководство за поставкой и монтажом оборудования на всех стадиях монтажного и пусконаладочного периода. Кроме того, туда входит контроль соблюдения требований изготовителя при монтаже оборудования и решение всех технических вопросов, которые могут возникнуть во время проведения монтажных работ, на высоком квалификационном уровне.</p>
										<p>Монтажные работы по установке технологического и подъемно-транспортного, электрического и прочего оборудования, металлоконструкций и трубопроводных систем, состоят в сборке и установке в положение, указанное в проектной и рабочей документации. В состав этих работ также входит проверка и испытание качества монтажа и смонтированного оборудования, исключая установку санитарно-технических систем, монтаж которых включается в состав строительных работ.</p>
									</div>
								</div> <!-- text-block -->
								<div class="solution__text-block">
									<h2>Пуско-наладка и обучение персонала:</h2>
									<div class="column-text">
										<p>Пусконаладочные работы - это комплекс технических мероприятий, начиная от рассмотрения проектной документации, анализа принятых проектом технологических решений, на соответствие действующим нормам и правилам, и заканчивая вводом в эксплуатацию. Целью проведения пусконаладочных работ является безаварийная и безопасная работа и ввод его в эксплуатацию, а так же вывод на проектные показатели.</p>
										<p>По итогу пусконаладочных работ разрабатывается регламент работы и режимные карты, которые отображают возможные ситуации на объекте и порядок действий в этом случае. Персонал проходит обучение по работе с новым оборудованием и технологиями.</p>
									</div>
								</div> <!-- text-block -->
								<div class="solution__text-block">
									<h2>Гарантийное и пост гарантийное обслуживание:</h2>
									<div class="column-text">
										<p>Компания LYKK осуществляет гарантийное обслуживание оборудования собственного производства, что, несомненно, является плюсом и избавляет Заказчика от любых сложностей. Срок гарантии определен для каждого вида оборудования в отдельности.</p>
										<p>Пост гарантийное обслуживание - это, прежде всего, комплекс организационных, технических и финансовых мероприятий, направленных на оптимизацию расходов предприятия и поддержание технологического оборудования в работоспособном состоянии.</p>
									</div>
								</div> <!-- text-block -->
								<p class="text-right"><a href="project.html" class="btn">Закажите проект</a></p>
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
		 -->		<section class="finished-projects">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<h1>реализованные проекты</h1>
					</div>
				</div>
				<div class="row project-posts">
					<div class="col-12">
						<div class="post-holder mb-3">
							<div class="img-holder"><img src="<?php echo get_template_directory_uri(); ?>/app/img/news-01.jpg" alt="" class="img-responsive"></div>
							<div class="text-holder">
								<div class="date">04.06.2017</div>
								<div class="post-header">Нефтеуловительная система АЗС ОККО</div>
								<p>Не успели утихнуть страсти относительно общедомовых счетчиков газа, как вступило в силу законодательство, которое фактически отменяет поквартирный учет воды и тепла. Если с тепловыми счетчиками все более-менее понятно, учет тепла итак ведется общедомовой или подъездный за редким исключением, то со счетчиками воды – вопросов больше чем ответов. Итак, прежде всего Закон «О коммерческом учете тепловой энергии и водоснабжения» предписывает установить общедомовые приборы учета на все дома, присоединенные к внешним тепловым сетям, горячего и холодного водоснабжения. Согласно Закону, счетчики должны быть установлены операторами внешних сетей к 1 октября 2018 (для жилых домов), либо к 1 октября 2017 (для нежилых зданий).</p>
								<p class="read-more text-right"><a href="projects.html">читать больше...</a></p>
							</div>
						</div>
						<div class="post-holder mb-3">
							<div class="img-holder"><img src="<?php echo get_template_directory_uri(); ?>/app/img/news-02.jpg" alt="" class="img-responsive"></div>
							<div class="text-holder">
								<div class="date">04.06.2017</div>
								<div class="post-header">Нефтеуловительная система АЗС ОККО</div>
								<p>Не успели утихнуть страсти относительно общедомовых счетчиков газа, как вступило в силу законодательство, которое фактически отменяет поквартирный учет воды и тепла. Если с тепловыми счетчиками все более-менее понятно, учет тепла итак ведется общедомовой или подъездный за редким исключением, то со счетчиками воды – вопросов больше чем ответов. Итак, прежде всего Закон «О коммерческом учете тепловой энергии и водоснабжения» предписывает установить общедомовые приборы учета на все дома, присоединенные к внешним тепловым сетям, горячего и холодного водоснабжения. Согласно Закону, счетчики должны быть установлены операторами внешних сетей к 1 октября 2018 (для жилых домов), либо к 1 октября 2017 (для нежилых зданий).</p>
								<p class="read-more text-right"><a href="projects.html">читать больше...</a></p>
							</div>
						</div>
						<div class="post-holder mb-3">
							<div class="img-holder"><img src="<?php echo get_template_directory_uri(); ?>/app/img/news-03.jpg" alt="" class="img-responsive"></div>
							<div class="text-holder">
								<div class="date">04.06.2017</div>
								<div class="post-header">Нефтеуловительная система АЗС ОККО</div>
								<p>Не успели утихнуть страсти относительно общедомовых счетчиков газа, как вступило в силу законодательство, которое фактически отменяет поквартирный учет воды и тепла. Если с тепловыми счетчиками все более-менее понятно, учет тепла итак ведется общедомовой или подъездный за редким исключением, то со счетчиками воды – вопросов больше чем ответов. Итак, прежде всего Закон «О коммерческом учете тепловой энергии и водоснабжения» предписывает установить общедомовые приборы учета на все дома, присоединенные к внешним тепловым сетям, горячего и холодного водоснабжения. Согласно Закону, счетчики должны быть установлены операторами внешних сетей к 1 октября 2018 (для жилых домов), либо к 1 октября 2017 (для нежилых зданий).</p>
								<p class="read-more text-right"><a href="projects.html">читать больше...</a></p>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<p class="text-right">
							<a href="project.html" class="btn">
								Релизованные проекты
							</a>
						</p>
					</div>
				</div>
			</div>
		</section>
		<section class="news">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<h1>новости</h1>
					</div>
				</div>
				<div class="row news-posts">
					<div class="col-lg-3">
						<div class="post-holder mb-3">
							<div class="img-holder"><img src="<?php echo get_template_directory_uri(); ?>/app/img/news-001.jpg" alt="" class="img-responsive"></div>
							<div class="text-holder">
								<div class="date">04.06.2017</div>
								<div class="post-header">Международный водный форум «AQUA UKRAINE 2018»</div>
								<p>AQUA UKRAINE - это одобренный UFI и уже ставший традиционным ежегодный Международный водный форум, который проводится по распоряжению Кабинета Министров Украины с целью внедрения мировых стандартов и передовых достижений в водном ...</p>
								<p class="read-more text-right"><a href="objects.html">читать больше...</a></p>
							</div>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="post-holder mb-3">
							<div class="img-holder"><img src="https://picsum.photos/270/270?image=57" alt="" class="img-responsive"></div>
							<div class="text-holder">
								<div class="date">04.06.2017</div>
								<div class="post-header">Нефтеуловительная система АЗС ОККО</div>
								<p>Не успели утихнуть страсти относительно общедомовых счетчиков газа, как вступило в силу законодательство, которое фактически отменяет поквартирный учет воды и тепла. Если с тепловыми счетчиками все более-менее понятно, учет тепла итак ведется общедомовой...</p>
								<p class="read-more text-right"><a href="objects.html">читать больше...</a></p>
							</div>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="post-holder mb-3">
							<div class="img-holder"><img src="https://picsum.photos/270/270?image=89" alt="" class="img-responsive"></div>
							<div class="text-holder">
								<div class="date">04.06.2017</div>
								<div class="post-header">Нефтеуловительная система АЗС ОККО</div>
								<p>Не успели утихнуть страсти относительно общедомовых счетчиков газа, как вступило в силу законодательство, которое фактически отменяет поквартирный учет воды и тепла. Если с тепловыми счетчиками все более-менее понятно, учет тепла итак ведется общедомовой...</p>
								<p class="read-more text-right"><a href="objects.html">читать больше...</a></p>
							</div>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="post-holder mb-3">
							<div class="img-holder"><img src="https://picsum.photos/270/270?image=87" alt="" class="img-responsive"></div>
							<div class="text-holder">
								<div class="date">04.06.2017</div>
								<div class="post-header">Нефтеуловительная система АЗС ОККО</div>
								<p>Не успели утихнуть страсти относительно общедомовых счетчиков газа, как вступило в силу законодательство, которое фактически отменяет поквартирный учет воды и тепла. Если с тепловыми счетчиками все более-менее понятно, учет тепла итак ведется общедомовой...</p>
								<p class="read-more text-right"><a href="objects.html">читать больше...</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
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