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
	<meta charset="<?php bloginfo('charset'); ?>" />
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
	<title>Lubina</title>
</head>

<body <?php body_class(); ?>>
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
			<nav class="menu_mobile mob-ver">
				<div class="menu_mobile-icon mb-men-white ">
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
							<a href="<?php echo wp_get_raw_referer() ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/close.svg" alt=""></a>
						</div>
					</div>
					<li>
						<?php if (is_home()) { ?>
							<span class="mobile_check"><a href="<?php is_home(); ?>">startseite</a></span>
						<?php } else { ?>
							<span><a href="<?php is_home(); ?>">startseite</a></span>
						<?php } ?>
					</li>

					<li>
						<?php if (is_page('services')) { ?>
							<span class="mobile_check"><a href="<?php site_url(); ?>/services">dienstleistungen</a></span>
						<?php } else { ?>
							<span><a href="<?php site_url(); ?>/services">dienstleistungen</a></span>
						<?php } ?>
					</li>
					<li>
						<?php if (is_page('aboutUs')) { ?>
							<span class="mobile_check"><a href="<?php site_url(); ?>/aboutUs">über uns</a></span>
						<?php } else { ?>
							<span><a href="<?php site_url(); ?>/aboutUs">über uns</a></span>
						<?php } ?>
					</li>
					<li>
						<?php if (is_page('portfolio')) { ?>
							<span class="mobile_check"><a href="<?php site_url(); ?>/portfolio">portfolio</a></span>
						<?php } else { ?>
							<span><a href="<?php site_url(); ?>/portfolio">portfolio</a></span>
						<?php } ?>
					</li>
					<li>
						<?php if (is_page('contact')) { ?>
							<span class="mobile_check"><a href="<?php site_url(); ?>/contact">kontakt</a></span>
						<?php } else { ?>
							<span><a href="<?php site_url(); ?>/contact">kontakt</a></span>
						<?php } ?>
					</li>
					<li>
						<?php if (is_page('jobs')) { ?>
							<span class="mobile_check"><a href="<?php site_url(); ?>/jobs">jobs</a></span>
						<?php } else { ?>
							<span><a href="<?php site_url(); ?>/jobs">jobs</a></span>
						<?php } ?>
					</li>
				</ul>
			</nav>
		</div>
		<div class="languages desc-ver">
			<ul>
				<li class="small-text white"><a href="https://www.instagram.com/lubina_engineering">ig</a></li>
				<li class="small-text white"><a href="https://www.facebook.com/pages/Lubina-engineering-GmbH/435480097302459">fb</a></li>
				<li class="small-text white"><a href="https://ch.linkedin.com/in/lubina-dejan-7b2788123">in</a></li>
			</ul>
		</div>
		<div class="logo">
			<div>
				<div class="loga_name">lubina</div>
				<p>engineering gmbh</p>
				<div class="logo_line">
					<div></div>
				</div>
			</div>
		</div>
		<div></div>
		<div></div>
		<div>
			<div class="popUp_close reception">
				<p class="desc-ver">Termin buchen</p>
				<div class="reception_logo">
					<a href="<?php echo wp_get_raw_referer() ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/close.svg" alt=""></a>
				</div>
			</div>
		</div>
	</header>