<?php 
/**
 	* Template Name: Дополнительное меню сервис
 	* Template Post Type: post

*/
?>

<?php get_header(); ?>
<?php get_header('sevrvicesExtraMenuMobile'); ?>



<?php 

   echo $onlyNonte;


   $Path = $_SERVER['REQUEST_URI'];
   $onlyNonte=str_replace('/lubina/','',$Path);
   $onlyNonte=str_replace('/','',$onlyNonte);



   $pc = new WP_Query(array('category_name' => 'services-extra-menu' ));
      while ($pc->have_posts()) : $pc->the_post();
      $serviceList = get_field('service_list');

      	if ( $onlyNonte ==  get_field('url_check')) {
?>  


    <section class="heatingSystems">
      	<div class="heatingSystems_header">
	      	<h2 class="desc-ver">
	      		<span class="up-string"><?php the_field('extra_name'); ?>:</span><br>
	      		<span><?php the_field('title_top'); ?></span>
	      	</h2>

            <h2 class="mob-ver">
               <span><?php the_field('extra_name');  ?></span><br>
               <span><?php the_field('title_top'); ?></span>
            </h2>
	      	<div class="truncated_number">
	      		<p class="truncated_number-number"> <?php the_field('number_product'); ?></p>
	      		<p class="truncated_number-clipping"></p>
	      	</div>
      	</div>
      	<div class="heatingSystems_picture">
      		<img src="<?php the_field('picture');?>" alt="">
      	</div>
      	
      	<div class="heatingSystems_footer">
      		<h3><?php the_field('bottom_title'); ?></h3>	
      	</div>
      </section>

      <section class="generalPlanning">
      		<div class="generalPlanning_header">
      			<h2 class="white"><?php the_field('service_title'); ?></h2>
      			<p class="small-text white"><?php the_field('service_subtitle'); ?></p>
      		</div>
      		<div id="descGeneralPlanning_container" class="generalPlanning_container">
      			<?php
      				$countCart = 1;
	      			foreach($serviceList as $value){
	      				if($value){
      			 ?>
	      			<div class="generalPlanning_container-item">
	      				<div class="number">
		      				<div class="truncated_number">
					      		<p class="truncated_number-number">0<?php echo $countCart++; ?></p>
					      		<p class="truncated_number-clipping"></p>
					      	</div>
	      				</div>
				      	<img src="<?php echo get_template_directory_uri(); ?>/img/services/generalPlanning.svg" alt="">
				      	<h3> <?php echo $value; ?>  </h3>
	      			</div>
      			<?php }} ?>  
      		
      		</div>

            <div id="mobileGeneralPlanning_container" class="generalPlanning_container addInContainer owl-carousel">
               <!-- <div> -->
               <?php
                  $countCartMobile = 1;
                  foreach($serviceList as $value){
                     if($value){
                ?>
                     <div class="generalPlanning_container-item">
                        <div class="number">
                           <div class="truncated_number">
                              <p class="truncated_number-number">0<?php echo $countCartMobile++; ?></p>
                              <p class="truncated_number-clipping"></p>
                           </div>
                        </div>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/services/generalPlanning.svg" alt="">
                        <h3> <?php echo $value; ?></h3>
                     </div>
                     
               <!-- </div> -->
               <?php }} ?>  


           
            </div>
    </section>

<?php
   	}
 endwhile; 
 ?>



      <section class="standards">
      	<h2>Mit hohem Anspruch zu den besten Lösungen.</h2>
      	<div class="standards_container">
      		<div class="standards_container-item">
      			<h3>Umfassendes Know-how in der Generalplanung – die Lubina engineering GmbH ist Ihr Generalplaner in der Schweiz. Wir ermöglichen unseren Kunden stets eine reibungslose und erfolgreiche Abwicklung in den verschiedensten Gebäudetechnikprojekten.</h3>
      		</div>
      		<div class="standards_container-item">
      			<p class="small-text">
      				Die Planung und Betreuung bei Ihrem Bauvorhaben ist unsere Leidenschaft. Zu unseren Dienstleistungen gehört die Planung von den Lüftungsanlagen und der Klimatechnik vom Konzept bis zu der Schlüsselübergabe. Dazu gehören die Beratung und Konzeption in der Anfangsphase, die Ausarbeitung eines Vorprojekts mit Kostenschätzung, Erstellung der Projektpläne für die Ausschreibung. In der Ausführungsphase erstellen wir für Sie die Ausführungspläne und übernehmen die Fachbauleitung. Bei der Inbetriebnahme und Abnahme der Anlage sind wir dabei und unterstützen Sie in der Schlussphase. Ebenfalls führen wir Energetische Messungen, Raumluftanalysen und Optimierungen durch, für eine gut funktionierende Anlage.
      			</p>
      		</div>
      		<div class="standards_container-item">
      			<div class="addInfo">
      				<h3 >Nehmen Sie Kontakt mit uns auf</h3>
					<a href="#footer_form_box">
						<div class="addInfo-image bor-orange">
							<img src="<?php echo get_template_directory_uri(); ?>/img/phoneOrange.svg" alt="">	
						</div>
					</a>
				</div>
      		</div>
      		<div class="standards_container-item">
      			
      			<div class="addInfo cancel-scrolling">
      				<h3 >Erfahren Sie mehr über uns</h3>
					<a href="<?php site_url(); ?>/aboutUs">
						<div class="addInfo-image bor-orange">
							<img src="<?php echo get_template_directory_uri(); ?>/img/infoOrange.svg" alt="">	
						</div>
					</a>
				</div>
      		</div>
      	</div>
      </section>

<?php get_footer(); ?>