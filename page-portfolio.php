<?php get_header(); ?>


	<section id="portfolio" class="jobs">
		<div class="jobs_header">
			<h2 class="desc-ver">
				<span class="up-string">Unser Portfolio &nbsp;</span>
			</h2>
			<h2 class="mob-ver">
				<span class="up-string-mob">Unser Portfolio &nbsp;</span>
			</h2>
			<p class="small-text desc-ver f-left">
				Sie benötigen Beratung oder ein unverbindliches Angebot? Kontaktieren Sie uns gern. Unsere Spezialisten werden Sie umfassend betreuen.
			</p>
		</div>
		<div class="jobs_content c-both">

		<?php
			 $counter = 1;
			 $counterMobile = 1;

		 ?>
		<?php $pc = new WP_Query('category_name=portfolioPost&orderby=date'); ?>
			 <?php while ($pc->have_posts()) : $pc->the_post(); ?>
		 		<?php $slider = get_field('slider'); ?>


			
			<div class="jobs_content-item">
				<div class="portfolio_content">
					<div class="jobs_cart">
						<div class="portfolio_content-number desc-ver">
							<div class="truncated_number">
					      		<p class="truncated_number-number">0<?php echo($counter++); ?></p>
					      		<p class="truncated_number-clipping"></p>
					      	</div>
						</div>
						<div class="jobs_cart-item">
							<h3 class="jobs_title"><?php the_title(); ?></h3>
							<div class="portfolio_content-number mob-ver">
								<div class="truncated_number">
						      		<p class="truncated_number-number">0<?php echo($counterMobile++); ?></p>
						      		<p class="truncated_number-clipping"></p>
						      	</div>
							</div>
						</div>	
						<div class="jobs_cart-item">
							<p class="smal-text">Leistungen:</p>
							<p class="smal-text"><?php the_field('leistungen'); ?></p>
						</div>
						<div class="jobs_cart-item">
							<p class="smal-text">Bauherrschaft:</p>
							<p class="smal-text "><?php the_field('bauherrschaft'); ?></p>
						</div>
						<div class="jobs_cart-item">
							<p class="smal-text">Architekt:</p>
							<p class="smal-text "><?php the_field('architekt'); ?></p>
						</div>
						<div class="jobs_cart-item">
							<p class="smal-text">Investitionssumme:</p>
							<p class="smal-text w-900"><?php the_field('investitionssumme'); ?> </p>
						</div>
					</div>
				</div>

		 		
		 		

		 		

				<div class="portfolio_slider">
					<div class="owl-carousel owl-theme">
						<div class="item"><img src="<?php echo esc_html($slider['slide_1']); ?>" alt=""></div>
						<div class="item"><img src="<?php echo esc_html($slider['slide_2']); ?>" alt=""></div>
						<div class="item"><img src="<?php echo esc_html($slider['slide_3']); ?>" alt=""></div>
						<div class="item"><img src="<?php echo esc_html($slider['slide_4']); ?>" alt=""></div>
						<div class="item"><img src="<?php echo esc_html($slider['slide_5']); ?>" alt=""></div>
						<div class="item"><img src="<?php echo esc_html($slider['slide_6']); ?>" alt=""></div>
					</div>
				</div>
			</div>
		<?php endwhile; ?>
			
		
		</div>
	</section>



		 		




<?php get_footer(); ?>