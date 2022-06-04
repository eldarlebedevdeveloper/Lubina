<?php 

	// if (isset($_POST["first_btn"])) {

	// 	$to = "eldarlebedev@gmail.com";
	// 	$subject = "Письмо с сайта";
	// 	$charset = "utf-8";
	// 	$headerss ="Content-type: text/html; charset=$charset\r\n";
	// 	$headerss.="MIME-Version: 1.0\r\n";
	// 	$headerss.="Date: ".date('D, d M Y h:i:s O')."\r\n";

	// 	$msg = "Имя: ".$_POST["name"]."\n";$msg .= "Сообщение: ".$_POST["anliegen"]."\n";

	// 	echo $msg;

	// 	mail($to, $subject, $msg, $headerss);
	// 	// print "<script>(\"Сообщение first_btn\");</script>";
	// }

	// if (isset($_POST["second_btn"])) {

	// 	$to = "eldarlebedev@gmail.com";
	// 	$subject = "Письмо с сайта";
	// 	$charset = "utf-8";
	// 	$headerss ="Content-type: text/html; charset=$charset\r\n";
	// 	$headerss.="MIME-Version: 1.0\r\n";
	// 	$headerss.="Date: ".date('D, d M Y h:i:s O')."\r\n";

	// 	$msg = "Имя: ".$_POST["name"]."\n";$msg .= "Сообщение: ".$_POST["anliegen"]."\n";

	// 	mail($to, $subject, $msg, $headerss);
	// 	// print "<script>alert(\"Сообщение second_btn\");window.location = window.location.href</script>";
	// 	// print "<script>(\"Сообщение second_btn\");</script>";
	// }

	// if (isset($_POST["third_btn"])) {

	// 	$to = "eldarlebedev@gmail.com";
	// 	$subject = "Письмо с сайта";
	// 	$charset = "utf-8";
	// 	$headerss ="Content-type: text/html; charset=$charset\r\n";
	// 	$headerss.="MIME-Version: 1.0\r\n";
	// 	$headerss.="Date: ".date('D, d M Y h:i:s O')."\r\n";

	// 	$msg = "Имя: ".$_POST["name"]."\n";$msg .= "Сообщение: ".$_POST["anliegen"]."\n";

	// 	mail($to, $subject, $msg, $headerss);
	// 	// print "<script>alert(\"Сообщение third_btn\");window.location = window.location.href</script>";
	// 	// print "<script>alert(\"Сообщение third_btn\");</script>";
	// }

	

	// 	// pop up----------------------------------
	// if (isset($_POST["popUp_first_btn"])) {

	// 	$to = "eldarlebedev@gmail.com";
	// 	$subject = "Письмо с сайта";
	// 	$charset = "utf-8";
	// 	$headerss ="Content-type: text/html; charset=$charset\r\n";
	// 	$headerss.="MIME-Version: 1.0\r\n";
	// 	$headerss.="Date: ".date('D, d M Y h:i:s O')."\r\n";

	// 	$msg = "Имя: ".$_POST["popName"]."\n";$msg .= "Сообщение: ".$_POST["popAnliegen"]."\n";

	// 	mail($to, $subject, $msg, $headerss);
	// 	// print "<script>alert(\"Сообщение third_btn\");window.location = window.location.href</script>";
	// 	// print "<script>alert(\"Сообщение popUp_first_btn\");</script>";
	// }


	// if (isset($_POST["popUp_second_btn"])) {

	// 	$to = "eldarlebedev@gmail.com";
	// 	$subject = "Письмо с сайта";
	// 	$charset = "utf-8";
	// 	$headerss ="Content-type: text/html; charset=$charset\r\n";
	// 	$headerss.="MIME-Version: 1.0\r\n";
	// 	$headerss.="Date: ".date('D, d M Y h:i:s O')."\r\n";

	// 	$msg = "Имя: ".$_POST["popName"]."\n";$msg .= "Сообщение: ".$_POST["popAnliegen"]."\n";

	// 	mail($to, $subject, $msg, $headerss);
	// 	// print "<script>alert(\"Сообщение third_btn\");window.location = window.location.href</script>";
	// 	// print "<script>alert(\"Сообщение popUp_second_btn\");</script>";
	// }


	// if (isset($_POST["popUp_third_btn"])) {

	// 	$to = "eldarlebedev@gmail.com";
	// 	$subject = "Письмо с сайта";
	// 	$charset = "utf-8";
	// 	$headerss ="Content-type: text/html; charset=$charset\r\n";
	// 	$headerss.="MIME-Version: 1.0\r\n";
	// 	$headerss.="Date: ".date('D, d M Y h:i:s O')."\r\n";

	// 	$msg = "Имя: ".$_POST["popName"]."\n";$msg .= "Сообщение: ".$_POST["popAnliegen"]."\n";

	// 	mail($to, $subject, $msg, $headerss);
	// 	// print "<script>alert(\"Сообщение third_btn\");window.location = window.location.href</script>";
	// 	// print "<script>alert(\"Сообщение popUp_third_btn\");</script>";
	// }



?>

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
		

		$address = "eldarlebedev@gmail.com"; // ВНИМАНИЕ! Здесь указываем адрес электронной почты, на которую будут приходить письма
		$mes = "Имя: ".$name. "\n\nСообщение: ".$message."\n\n";
		// $send = mail ($address,$mes,"Content-type:text/plain; charset = UTF-8\r\nFrom:$email");
			// if($send) {echo 'OK';}

?>

<h1>
	<?php echo $mes; ?>
</h1>

<!-- <script>
	alert(<?php $nnn; ?>)
</script>
	 -->


	<div class="popUp"  id="thanks">
		<div class="design_stripes_inBlok">
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
		</div>




		<div class="popUp_close reception">
			<!-- <p>Termin buchen</p>
			<div class="reception_logo">
				<img src="wp-content/themes/lubina/img/close.svg" alt="">
			</div> -->
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

	<!-- <h1 class="white">dddsds <?php echo $_GET['name']; ?></h1> -->


<?php get_footer(); ?>
	

	
