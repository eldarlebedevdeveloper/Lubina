<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Lubina
 * @since Lubina 1.0
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" type="text/css" href="<?= bloginfo('template_directory'); ?>/libs/owlCarousel/owl.carousel.min.css">	
	<link rel="stylesheet" type="text/css" href="<?= bloginfo('template_directory'); ?>/libs/fullPage/fullpage.min.css">	



	<link rel="stylesheet" type="text/css" href="<?= bloginfo('template_directory'); ?>/css/fonts.css">

	<link rel="stylesheet" type="text/css" href="<?= bloginfo('template_directory'); ?>/css/components/normalize.css">

	<link rel="stylesheet" type="text/css" href="<?= bloginfo('template_directory'); ?>/css/components/header.css">
	<link rel="stylesheet" type="text/css" href="<?= bloginfo('template_directory'); ?>/css/components/ourTeam.css">
	<link rel="stylesheet" type="text/css" href="<?= bloginfo('template_directory'); ?>/css/components/footer.css">
	<link rel="stylesheet" type="text/css" href="<?= bloginfo('template_directory'); ?>/css/popUp.css">
	

	<link rel="stylesheet" type="text/css" href="<?= bloginfo('template_directory'); ?>/css/home.css">
	<link rel="stylesheet" type="text/css" href="<?= bloginfo('template_directory'); ?>/css/services.css">    
	<link rel="stylesheet" type="text/css" href="<?= bloginfo('template_directory'); ?>/css/jobs.css">
	<link rel="stylesheet" type="text/css" href="<?= bloginfo('template_directory'); ?>/css/portfolio.css">  
	<link rel="stylesheet" type="text/css" href="<?= bloginfo('template_directory'); ?>/css/contact.css">
	<link rel="stylesheet" type="text/css" href="<?= bloginfo('template_directory'); ?>/css/aboutUs.css">

	<link rel="stylesheet" type="text/css" href="<?= bloginfo('template_directory'); ?>/css/components/repeatElements.css">

	<link rel="stylesheet" type="text/css" href="<?= bloginfo('template_directory'); ?>/style.css">

	<?php wp_head(); ?>

	<title>Lubina Engineering GmbH</title>
</head>

<body <?php body_class(); ?>>
<?php

 // wp_body_open();

   // $Path = $_SERVER['REQUEST_URI'];
   // $onlyNonteHeader=str_replace('/lubina/','',$Path);
   // $onlyNonteHeader=str_replace('/','',$Path);


 ?>





	<div class="design_stripes">
		<div></div>
		<div></div>
		<div></div>
		<div></div>
		<div></div>
		<div></div>
	</div>


	<header>
		<div class="navigation">
			<nav class="menu desc-ver"> 
			
				<div class="menu_header">
					<?php  if(is_front_page()) { ?>

						<div class="menu_current" >startseite</div>

					<?php } else if (in_category('services-extra-menu')){ ?>
   

						<!-- <div class="menu_current"><?php // echo the_title(); ?></div> -->
						<div class="menu_current">dienstleistungen</div>

					<?php }else{ ?>

						<div class="menu_current" ><?php the_field('neme_in_menu'); ?></div>

					<?php } ?>

					<div class="menu_icon"><img src="<?php echo get_template_directory_uri(); ?>/img/arrowMenu.svg" alt=""></div>
				</div>

				<ul class="menu_body none">
					<li>
						<span >
							<?php if(is_home()) { ?>
								<a href="<?php echo get_home_url(); ?>" class="sel_men_item">startseite</a>
								<div class="menu_icon"><img src="<?php echo get_template_directory_uri(); ?>/img/arrowMenu.svg" alt=""></div>
							<?php }else{ ?>
								<a href="<?php echo get_home_url(); ?>">startseite</a>
								<div class="menu_icon"><img src="<?php echo get_template_directory_uri(); ?>/img/arrowMenu.svg" alt=""></div>
							<?php } ?>
						</span>
					</li>
					
					<li class="box_extra_menu ">
						<?php if(is_page('services') || in_category('services-extra-menu')) { ?>
							<?php if(is_home()) { ?>
								<span><a href="<?php site_url(); ?>/services" class="up-string">dienstleistungen</a></span>
							<?php }else{ ?>
								<span><a href="<?php site_url(); ?>/services" class="sel_men_item">dienstleistungen</a></span>
						<?php } }else{ ?>
							<span><a href="<?php site_url(); ?>/services" class="up-string">dienstleistungen</a></span>
						<?php } ?>

						<ul class="extra_nenu">
					   	    <?php $pc = new WP_Query('category_name=services-extra-menu&order=ASC'); ?>
						      <?php while ($pc->have_posts()) : $pc->the_post(); ?>
			
						    	<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
							  <?php endwhile; ?>
						</ul>
					</li>
					<li>
						<?php if(is_page('aboutus')) { ?>
							<span ><a href="<?php site_url(); ?>/aboutUs" class="sel_men_item">über uns</a></span>
						<?php }else{ ?>
							<span ><a href="<?php site_url(); ?>/aboutUs" class="up-string">über uns</a></span>
						<?php } ?>
						
					</li>
					<li>
						<?php if(is_page('portfolio')) {	 ?>
							<span><a href="<?php site_url(); ?>/portfolio" class="sel_men_item">portfolio</a></span>
						<?php }else{ ?>
							<span><a href="<?php site_url(); ?>/portfolio" class="up-string">portfolio</a></span>
						<?php } ?>
					</li>
					<li>
						<?php if(is_page('contact')) { ?>
							<span><a href="<?php site_url(); ?>/contact" class="sel_men_item">kontakt</a></span>
						<?php }else{ ?>
							<span><a href="<?php site_url(); ?>/contact" class="up-string">kontakt</a></span>
						<?php } ?>
					</li>
					<li>
						<?php if(is_page('jobs')) { ?>
							<span><a href="<?php site_url(); ?>/jobs" class="sel_men_item">jobs</a></span>
						<?php }else{ ?>
							<span><a href="<?php site_url(); ?>/jobs" class="up-string">jobs</a></span></li>
						<?php } ?>
				</ul>		
			</nav>	


			<nav class="menu_mobile mob-ver">
				<div class="menu_mobile-icon mb-men-black">
					<img src="<?php echo get_template_directory_uri(); ?>/img/header/menuMobileBlack.svg" alt="">
				</div>
				<div class="menu_mobile-icon mb-men-white none">
					<img src="<?php echo get_template_directory_uri(); ?>/img/header/menuMobileWhite.svg" alt="">
				</div>

				<ul class="menu_mobile-libs none">
					<div class="design_stripes_inBlok">
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
					</div>

					<div class=" reception close_mobile_menu">
						<p class="desc-ver">Termin buchen</p>
						<div class="reception_logo">
							<img src="<?php echo get_template_directory_uri(); ?>/img/close.svg" alt="">
						</div>	
					</div>
					<li >
						<?php if(is_front_page()) { ?>
							<span class="mobile_check"><a href="<?php echo get_home_url(); ?>">startseite</a></span>
						<?php }else{ ?>
							<span><a href="<?php echo get_home_url();?>">startseite</a></span>
						<?php } ?>

					</li>
					
					<li>
						<?php if(is_page('services') || is_page_template('template-extraMenuService.php')) { ?>
							<span class="mobile_check"><a href="<?php site_url(); ?>/services">dienstleistungen</a></span>
						<?php }else{ ?>
							<span><a href="<?php site_url(); ?>/services">dienstleistungen</a></span>
						<?php } ?>
					</li>
					<li>
						<?php if(is_page('aboutus')) { ?>
							<span class="mobile_check"><a href="<?php site_url(); ?>/aboutUs">über uns</a></span>
						<?php }else{ ?>
							<span><a href="<?php site_url(); ?>/aboutUs">über uns</a></span>
						<?php } ?>
					</li>
					<li>
						<?php if(is_page('portfolio')) { ?>
							<span class="mobile_check"><a href="<?php site_url(); ?>/portfolio">portfolio</a></span>
						<?php }else{ ?>
							<span><a href="<?php site_url(); ?>/portfolio">portfolio</a></span>
						<?php } ?>
					</li>
					<li>
						<?php if(is_page('contact')) { ?>
							<span class="mobile_check"><a href="<?php site_url(); ?>/contact">kontakt</a></span>
						<?php }else{ ?>
							<span><a href="<?php site_url(); ?>/contact">kontakt</a></span>
						<?php } ?>
					</li>
					<li >
						<?php if(is_page('jobs')) { ?>
							<span class="mobile_check"><a href="<?php site_url(); ?>/jobs">jobs</a></span>
						<?php }else{ ?>
							<span><a href="<?php site_url(); ?>/jobs">jobs</a></span>
						<?php } ?>
					</li>
				</ul>
			</nav>


		</div>
		<div class="languages desc-ver">
			<ul>
				<li class="small-text"><a href="https://www.instagram.com/lubina_engineering">ig</a></li>
				<li class="small-text"><a href="https://www.facebook.com/pages/Lubina-engineering-GmbH/435480097302459">fb</a></li>
				<li class="small-text"><a href="https://ch.linkedin.com/in/lubina-dejan-7b2788123">in</a></li>
			</ul>
		</div>
		<div class="logo">
			<a href="<?php echo get_home_url(); ?>">
				<div>
					<div class="loga_name">lubina</div>
					<p>engineering gmbh</p>
					<div class="logo_line"><div></div></div>
				</div>	
				
			</a>
				
				<!-- <img src="<?php echo get_template_directory_uri(); ?>/img/header/logo.svg" class="logo_image" alt=""> -->

		</div>
		<div></div>
		<div></div>
		<div>
			<div class="reception popUp_open">
				<p class="desc-ver">Termin buchen</p>
				<div class="reception_logo">
					<!-- <img src="<?php echo get_template_directory_uri(); ?>/img/phone.svg" class="desc-ver" alt=""> -->
					<img src="<?php echo get_template_directory_uri(); ?>/img/phoneOrange.svg"  alt="">
				</div>
			</div>
			<div class="popUp_close reception none">
				<p class="desc-ver">Termin buchen</p>
				<div class="reception_logo">
					<img src="<?php echo get_template_directory_uri(); ?>/img/close.svg" alt="">
				</div>	
			</div>
		
		</div>
		
	</header>





