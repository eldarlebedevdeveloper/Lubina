<div class="extra_menu_mobile mob-ver">
   <div class="extra_header_box">
      <?php
      $PathService = $_SERVER['REQUEST_URI'];
      $onlyNonteHeaderService = str_replace('/lubina/', '', $PathService);
      $onlyNonteHeaderService = str_replace('/', '', $onlyNonteHeaderService);
      ?>
      <div class="extra_header">
         <?php if ($onlyNonteHeaderService === 'services') {  ?>
            <div class="extra_header-title">Heizungsanlagen</div>
         <?php } else { ?>
            <?php $pc = new WP_Query('category_name=services-extra-menu&order=ASC');
            while ($pc->have_posts()) : $pc->the_post();
               if (get_field('url_check') == $onlyNonteHeaderService) { ?>
                  <div class="extra_header-title"><?php the_title(); ?></div>
            <?php }
            endwhile; ?>
         <?php }  ?>
         <div class="extra_header-icon"><img src="<?php echo get_template_directory_uri(); ?>/img/arrowMenu.svg" alt=""></div>
      </div>
   </div>
   <ul class="extra_body none">
      <?php $pc = new WP_Query('category_name=services-extra-menu&order=ASC'); ?>
      <?php while ($pc->have_posts()) : $pc->the_post(); ?>
         <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
      <?php endwhile; ?>
   </ul>
</div>