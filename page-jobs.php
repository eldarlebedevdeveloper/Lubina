<?php get_header(); ?>





	<section class="jobs">
		<div class="jobs_header">
			<h2 class="desc-ver">
				<span class="up-string">Jobs</span><span>&nbsp;bei der Lubina Engineering GmbH</span> 
			</h2>
			<h2 class="mob-ver">
				<span class="up-string-mob">Jobs &nbsp;</span>
				<span class="f-left">bei der&nbsp;</span>
				<span class="f-left">Lubina&nbsp; </span> <br>
				<span class="f-left">Engineering&nbsp;</span> 
				<span class="f-left">GmbH&nbsp;</span> 
				
			</h2>
		</div>
		
			 	
		<div class="jobs_content">
			<?php $pc = new WP_Query('category_name=jobsPost&orderby=date'); ?>
			 <?php while ($pc->have_posts()) : $pc->the_post(); ?>
		 		<?php $personData = get_field('responsible_person'); ?>
				 
					<div class="jobs_content-item">
						<div>
							<h3 class="jobs_title"><?php the_title(); ?></h3>
							<div class="jobs_cart ">
								<div class="jobs_cart-item">
									<p class="smal-text">Verfügbarkeit</p>
									<p class="smal-text w-900"><?php the_field('availability'); ?></p>
								</div>
								<div class="jobs_cart-item">
									<p class="smal-text">Job-Beschreibung</p>
									<p class="smal-text "><?php the_field('requirements'); ?></p>
								</div>
								<div class="jobs_cart-item">
									<p class="smal-text">Anforderungen</p>
									<p class="smal-text "><?php the_field('description'); ?></p>
								</div>
								<div class="jobs_cart-item jobs_responsible">
									<div>
										<p class="smal-text">Zuständige Person</p>
									</div>
									<div>
										<div>
											<p class="smal-text w-900"><?php echo esc_html($personData['person_name']); ?></p>
										</div>
										<ul>
											<li>
												<img src="<?php echo get_template_directory_uri(); ?>/img/mailBlack.svg" alt="">
												<p class="smal-text desc-ver up-string "><?php echo esc_html($personData['person_email']); ?></p>
												<p class="smal-text mob-ver up-string-mob-smille"><?php echo esc_html($personData['person_email']); ?></p>
											</li>
											<li >
												<img src="<?php echo get_template_directory_uri(); ?>/img/phoneBlack.svg" alt="">
												<p class="smal-text"><span class="desc-ver up-string"><?php echo esc_html($personData['person_phone']); ?></span></p>
												<p class="smal-text mob-ver"><span class=" up-string-mob-smille"><?php echo esc_html($personData['person_phone']); ?></span></p>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>

			 <?php endwhile; ?>
		</div>
	</section>



<?php get_footer(); ?>