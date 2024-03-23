<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="wp-content/themes/lubina/css/fonts.css">
	<link rel="stylesheet" type="text/css" href="wp-content/themes/lubina/css/components/normalize.css">
	<link rel="stylesheet" type="text/css" href="wp-content/themes/lubina/css/components/header.css">
	<link rel="stylesheet" type="text/css" href="wp-content/themes/lubina/css/popUp.css">
	<link rel="stylesheet" type="text/css" href="wp-content/themes/lubina/css/components/repeatElements.css">
	<link rel="stylesheet" type="text/css" href="wp-content/themes/lubina/style.css">
</head>

<body>
	<?php get_header('thanks'); ?>
	<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['additionalText'];
	$error = '';
	$address = "eldarlebedev@gmail.com";
	$mes = "Имя: " . $name . "\n\nСообщение: " . $message . "\n\n";
	?>
	<h1>
		<?php echo $mes; ?>
	</h1>
	<div class="popUp" id="thanks">
		<div class="design_stripes_inBlok">
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
		</div>
		<div class="popUp_close reception">
		</div>
		<div class="popUp_thanks">
			<h2>
				<p class="up-string-gray"> Herzlichen Dank!</p>
				<p>Sie werden baldmöglichst kontaktiert.</p>
			</h2>
			<div class="addInfo cancel-scrolling">
				<a href="<?php echo wp_get_raw_referer() ?>">
					<div class="addInfo-image">
						<img src="<?php echo get_template_directory_uri(); ?>/img/arrowOrange.svg" alt="">
					</div>
				</a>
				<h3 class="orange">Zurück</h3>
			</div>
		</div>
	</div>
	<?php get_footer(); ?>