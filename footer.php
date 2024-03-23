	<div class="popUp none">
		<div class="design_stripes_inBlok">
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
		</div>
		<div class="popUp_form ">
			<div class="popUp_header">
				<h2 ><span class="up-string-gray">Termin buchen</span> </h2>
			</div>
			<div class="footer_support-form">
				<div class="popUp_footer mob-ver">
					<h3>info@lubina-eng.ch </h3>
					<h3>(+41) 71 558 81 01</h3>
				</div>

		         <!-- <form action="<?php site_url(); ?>/thanks" method="POST" class="form" id="form_popUp"> -->
				<form action="<?php  bloginfo('template_url'); ?>/thanks.php" method="POST" class="form" id="form_popUp" >

		            <div class="form_item">
		               <input type="text" name="popName" placeholder="name">
		               <input type="text"  name="popPhone" placeholder="telefon">
		               <input type="text" name="popEmail" placeholder="e-mail">
		            </div>
		            <div class="form_item">
		               <textarea name="additionalText" placeholder="Bitte beschreiben Sie Ihr Anliegen "></textarea>
		            </div>
		            <div class="form_item">
		               <p class="small-text">Ihre Anfrage über</p>
		               <input type="submit" name="popUp_first_btn" value ="Allgemeine anfrage">
		               <input type="submit" name="popUp_second_btn" value ="ANGEBOT GEWÜNSCHT">
		               <input type="submit" name="popUp_third_btn" value ="Karriere">

		               	<div class="popUp_footer desc-ver">
							<h3>info@lubina-eng.ch </h3>
							<h3>(+41) 71 558 81 01</h3>
						</div>
					</div>
		            <div class="form_item">
		             	<p class="small-text">Datum wählen</p>
		               	<input type="date" name="date" class="booking_date" min="" max="">
		               	<div class="addInfo">
		                 	<h3 class="orange">Jetzt buchen</h3>
		                	<a href="#">
		                    	<div class="addInfo-image">
			                        <img src="<?php echo get_template_directory_uri(); ?>/img/arrowOrange.svg" class="desc-ver" alt="">	
			                        <img src="<?php echo get_template_directory_uri(); ?>/img/phoneOrange.svg" class="mob-ver" alt="">	
			                    </div>
			                 </a>
		               </div>
		            </div>
		         </form>

		    </div>
		</div>
	</div>



	<footer class="footer ">
	   <div class="design_stripes_inBlok">
	      <div></div>
	      <div></div>
	      <div></div>
	      <div></div>
	      <div></div>
	      <div></div>
	   </div>
	   <div class="footer_support">
	      <div class="footer_support-info">
	         <p class="overhead">Kontaktieren Sie uns für ein unverbindliches Angebot.</p>
	         <h2>Sie benötigen Unterstützung?</h2>
	         <p class="footer_ovehead">RUFEN SIE JETZT AN ODER SCHREIBEN <br> SIE UNS EINE NACHRICHT!</p>
	         <div class="footer_heading">
	            <p class="h1 desc-ver up-string">+41 71 558 81 01</p>
	            <p class="h1 mob-ver up-string-mob">+41 71 558 81 01</p>
	         </div>
	         <div class="footer_additionaly">
	            <p class="small-text white">Arbeiten Sie mit uns zusammen – gemeinsam werden wir die  beste Lösung finden, welche Ihren Anforderungen entspricht.</p>
	         </div>
	      </div>
	       <div class="footer_map mob-ver" id="footer_map_mob">
			   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2270.0000047027556!2d9.315795542920325!3d47.42168996539045!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x479ae03580454bf3%3A0x25d7e8f853f6378b!2sHauptstrasse%2032%2C%209030%20Abtwil%20SG%2C%20Schweiz!5e0!3m2!1sde!2sua!4v1613524412438!5m2!1sde!2sua" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
		   </div>
	      <div class="footer_support-form" id="footer_form_box">
	      	<!-- форма отправляется с помошью функции footerFormSend() в js -->
			<!-- <form action="<?php //site_url(); ?>/thanks" method="post" class="form" id="footer_form" > -->
			<form action="<?php  bloginfo('template_url'); ?>/thanks.php" method="POST" class="form" id="footer_form" >
			<!-- <form action="" method="get" class="form" id="footer_form" > -->
				<!-- <div class="form" id="footer_form">	 -->
					<div class="form_item">
					   <input type="text" name="name" placeholder="name" >
					   <input type="text" name="phone"  placeholder="telefon" >
					   <input type="text" name="email"  placeholder="e-mail" >
					</div>
					<div class="form_item">
					   <!-- <textarea placeholder="ANLIEGEN" name="additionalText">ddkkkkdd</textarea> -->
					   <textarea placeholder="ANLIEGEN" name="additionalText"></textarea>
					</div>
					<div class="form_item">
					   <p class="small-text">Ihre Anfrage über</p>
					   <input type="submit" name="first_btn" class="first_btn" value ="Allgemeine anfrage">
					   <input type="submit" name="second_btn" value ="ANGEBOT GEWÜNSCHT">
					   <input type="submit" name="third_btn" value ="Karriere">
					   <!-- <button>Allgemeine anfrage</button> -->

					</div>
					<div class="form_item">
					   <div class="addInfo">
					      <a href="#">
					         <div class="addInfo-image">
					            <img src="<?php echo get_template_directory_uri(); ?>/img/mail.svg" alt="">	
					         </div>
					      </a>
					      <h3 class="orange">KontaKtiereN sie uns</h3>
					   </div>
					</div>
				<!-- </div> -->
			</form>

	      </div>
	   </div>
	   <div class="footer_map desc-ver" id="footer_map_desc">
		   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2270.0000047027556!2d9.315795542920325!3d47.42168996539045!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x479ae03580454bf3%3A0x25d7e8f853f6378b!2sHauptstrasse%2032%2C%209030%20Abtwil%20SG%2C%20Schweiz!5e0!3m2!1sde!2sua!4v1613524412438!5m2!1sde!2sua" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
	   </div>
	   <div class="footer_navigation">
	      <div class="footer_navigation-first">
	         <div>
	            <div class="logo">
	            	<img src="<?php echo get_template_directory_uri(); ?>/img/footer/footer_logo.svg" alt="">
	              <!--  <div>
	                  <div class="loga_name">LUBINA</div>
	                  <p>ENGINEERING GmbH</p>
	                  <div class="logo_line">
	                     <div></div>
	                  </div>
	               </div> -->
	            </div>
	            <p class="small-text">Lubina Engineering GmbH</p>
	         </div>
	         <div>
	            <ul>
	               <li><a href="#">Hauptstrasse 32</a></li>
	               <li><a href="#">9030 Abtwil</a></li>
	               <li><a href="#">Schweiz</a></li>
	            </ul>
	         </div>
	      </div>
	      <div class="footer_navigation-services">
	         <h3>Dienstleistungen</h3>
	         <div>
	         	<?php 	$pc = new WP_Query('category_name=services-extra-menu&order=ASC');
			       	while ($pc->have_posts()) : $pc->the_post(); ?>
			            <li><a href="<?php the_permalink(); ?>"><?php the_field('extra_name'); ?></a></li>
			    <?php endwhile; ?>
	         </div>
	      </div>
	      <div class="footer_navigation-important">
	         <h3>Wichtiges</h3>
	         <ul>
	            <li><a href="<?php site_url(); ?>/contact">Kontakt</a></li>
	            <li><a href="<?php site_url(); ?>/imprint">Impressum</a></li>
	            <li><a href="<?php site_url(); ?>/privacy-policy">Datenschutz</a></li>
	         </ul>
	      </div>
	      <div class="footer_navigation-contacts">
	         <div>
	            <h3>info@lubina-eng.ch </h3>
	            <h3>(+41) 71 558 81 01</h3>
	         </div>
	         <div>
	            <ul>
	               <li><a href="https://www.facebook.com/pages/Lubina-engineering-GmbH/43548009730245">Facebook</a></li>
	               <li><a href="https://www.instagram.com/lubina_engineering">Instagram</a></li>
	               <li><a href="https://ch.linkedin.com/in/lubina-dejan-7b2788123">Linkedin</a></li>
	            </ul>
	         </div>
	      </div>
	   </div>
	   <div class="footer_bottom">
	      <p class="small-text white">© Lubina Engineering GmbH, Abtwil, St. Gallen   | <br class="mob-ver"><a href="https://www.zurdattelpalme.ch/">Design & Entwicklung durch Agentur zur Dattelpalme</a> </p>
	   </div>
	</footer>



	<script type="text/javascript" src="<?= bloginfo('template_directory'); ?>/libs/jquery/jquery-3.5.1.min.js"></script>
	

	<script type="text/javascript" src='<?= bloginfo('template_directory'); ?>/libs/jquery-validation/jquery.validate.min.js'></script>
	<script type="text/javascript" src="<?= bloginfo('template_directory'); ?>/libs/owlCarousel/owl.carousel.min.js"></script>

	<script type="text/javascript" src="<?= bloginfo('template_directory'); ?>/libs/fullPage/fullpage.min.js"></script>




	<script type="text/javascript" src="<?= bloginfo('template_directory'); ?>/js/script.js"></script>
</body>
</html>