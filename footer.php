	</main>
	<footer>
		<?php $nums = get_field('contacts', 'options')['phone_numbers']; ?>
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<nav class="prenav prenav-left">
					<img src="<?php echo get_template_directory_uri(); ?>/app/img/logo-white.svg" alt="" class="img-responsive">
					</nav>
					<nav class="prenav prenav-right">
						<ul class="d-flex justify-content-end">
							<li class="menu-item-has-children mob-section-hide"><a href="javascript:void(0);"><?php echo $nums[0]['number']; ?></a>
								<ul class="sub-menu">
									<?php foreach ($nums as $num) : ?>
									<li><a
											href="tel:<?php echo preg_replace('/[\(\)\+\-\s]+/', '', $num['number']) ?>"><?php echo $num['number']; ?></a>
									</li>
									<?php endforeach ?>
								</ul>
							</li>
							<!-- <li><a href="#"><span class="icon-fb"></span></a></li> -->
							<!-- <li><a href="#"><span class="icon-phone"></span></a></li> -->
							<li><a href="skype:info.lykk?chat"><span class="icon-skype"></span></a></li>
							<!-- <li><a href="#"><span class="icon-insta"></span></a></li> -->
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
					<p>© 2019 LYKK Group | 2019</p>
				</div>
			</div>
		</div>

	</footer>
	<div class="modal fade" id="check-request-modal">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
			<?php echo do_shortcode(get_field('check_form', 1889)); ?>
			</div>
		</div>
	</div>






	<?php wp_footer(); ?>
	</body>

	</html>