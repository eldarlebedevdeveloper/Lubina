<?php
$name = $_POST['name'];
$popName = $_POST['popName'];
$phone = $_POST['phone'];
$popPhone = $_POST['popPhone'];
$email = $_POST['email'];
$popEmail = $_POST['popEmail'];
$date = $_POST['date'];
$message = $_POST['additionalText'];
$content;
$cameWith = $_SERVER['HTTP_REFERER'];
// pop up
if (isset($_POST["popUp_first_btn"])) {
	$mes = "popUp_first_btn Имя: " . $popName;
	$address = "dejan.lubina@lubina-eng.ch";
	$content = "Name:$popName\r\nPhone:$popPhone\r\nE-mail:$popEmail\r\nDate:$date\r\nMessage:$message";
}
// footer
if (isset($_POST["first_btn"])) {
	$mes = "first_btn Имя: " . $name;
	$address = "dejan.lubina@lubina-eng.ch";
	$content = "Name:$name\r\Phone:$phone\r\nE-mail:$email\r\nMessage:$message";
}
// pop up
if (isset($_POST["popUp_second_btn"])) {
	$mes = "popUp_second_btn Имя: " . $name;
	$address = "dejan.lubina@lubina-eng.ch";
	$content = "Name:$popName\r\nPhone:$popPhone\r\nE-mail:$popEmail\r\nDate:$date\r\nMessage:$message";
}
// footer
if (isset($_POST["second_btn"])) {
	$mes = "second_btn Имя: " . $name;
	$address = "dejan.lubina@lubina-eng.ch";
	$content = "Name:$name\r\nPhone:$phone\r\nE-mail:$email\r\nMessage:$message";
}
// pop up 
if (isset($_POST["popUp_third_btn"])) {
	$mes = "popUp_third_btn Имя: " . $name;
	$address = "dejan.lubina@lubina-eng.ch";
	$content = "Имя:$popName\r\nТелефон:$popPhone\r\nE-mail:$popEmail\r\nDate:$date\r\nMessage:$message";
}
// footer
if (isset($_POST["third_btn"])) {
	$mes = "third_btn Имя: " . $name;
	$address = "dejan.lubina@lubina-eng.ch";
	$content = "Имя:$name\r\nТелефон:$phone\r\nE-mail:$email\r\nMessage:$message";
}
$send = mail($address, $mes, $content);
$url = 'https://lubina-eng.ch/wp-content/themes/lubina';
$domain = 'https://lubina-eng.ch';
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>/libs/owlCarousel/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>/libs/fullPage/fullpage.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>/css/fonts.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>/css/components/normalize.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>/css/components/header.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>/css/components/ourTeam.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>/css/components/footer.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>/css/popUp.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>/css/home.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>/css/services.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>/css/jobs.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>/css/portfolio.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>/css/contact.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>/css/aboutUs.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>/css/components/repeatElements.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>/style.css">
	<title>Thanks</title>
</head>

<body>
	<header>
		<div class="navigation">
			<nav class="menu_mobile mob-ver">
				<div class="menu_mobile-icon mb-men-white ">
					<img src="<?php echo $url; ?>/img/header/menuMobileWhite.svg" alt="">
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
							<a href="<?php echo $cameWith; ?>"><img src="<?php echo $url; ?>/img/close.svg" alt=""></a>
						</div>
					</div>
					<li>
						<span><a href="<?php echo $domain; ?>">startseite</a></span>
					</li>
					<li>
						<span><a href="<?php echo $domain; ?>/services">dienstleistungen</a></span>
					</li>
					<li>
						<span><a href="<?php echo $domain; ?>/aboutUs">über uns</a></span>
					</li>
					<li>
						<span><a href="<?php echo $domain; ?>/portfolio">portfolio</a></span>
					</li>
					<li>
						<span><a href="<?php echo $domain;  ?>/contact">kontakt</a></span>
					</li>
					<li>
						<span><a href="<?php echo $domain; ?>/jobs">jobs</a></span>
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
					<a href="<?php echo $cameWith; ?>"><img src="<?php echo $url; ?>/img/close.svg" alt=""></a>
				</div>
			</div>
		</div>
	</header>
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
				<a href="<?php echo $cameWith; ?>">
					<div class="addInfo-image">
						<img src="<?php echo $url; ?>/img/arrowOrange.svg" alt="">
					</div>
				</a>
				<h3 class="orange">Zurück</h3>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="<?php echo $url; ?>/libs/jquery/jquery-3.5.1.min.js"></script>
	<script type="text/javascript" src='<?php echo $url; ?>/libs/jquery-validation/jquery.validate.min.js'></script>
	<script type="text/javascript" src="<?php echo $url; ?>/libs/owlCarousel/owl.carousel.min.js"></script>
	<script type="text/javascript" src="<?php echo $url; ?>/libs/fullPage/fullpage.min.js"></script>
	<script type="text/javascript" src="<?php echo $url; ?>/js/script.js"></script>
</body>

</html>