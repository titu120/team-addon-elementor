<div class="team-7 team-card background-image">
   <div class="team-card_content">
      <?php if (!empty($settings['team_link']['url'])) :   ?>
         <h4 class="team-card_title"><a class="ft-name" href="<?php echo esc_url($settings['team_link']['url']) ?>"><?php echo esc_html($team_name); ?></a>
         </h4>
      <?php endif ?>
      <?php if (!empty($team_designation)) :   ?>
         <span class="team-card_desig ft-designation"><?php echo esc_html($team_designation); ?></span>
      <?php endif ?>
      <div class="team-social_wrap">
         <div class="social-btn">

            <?php if (!empty($settings['facebook']['url'])) :   ?>
               <a href="<?php echo esc_url($settings['facebook']['url']) ?>">
                  <i class="fa-brands fa-facebook-f"></i>
               </a>
            <?php endif ?>

            <?php if (!empty($settings['twitter']['url'])) :   ?>
               <a href="<?php echo esc_url($settings['twitter']['url']) ?>">
                  <i class="fa-brands fa-twitter"></i>
               </a>
            <?php endif ?>

            <?php if (!empty($settings['linkedin']['url'])) :   ?>
               <a href="<?php echo esc_url($settings['linkedin']['url']) ?>">
                  <i class="fa-brands fa-linkedin-in"></i>
               </a>
            <?php endif ?>

            <?php if (!empty($settings['instagram']['url'])) :   ?>
               <a href="<?php echo esc_url($settings['instagram']['url']) ?>">
                  <i class="fa-brands fa-instagram"></i>
               </a>
            <?php endif ?>


            <?php if (!empty($settings['pinterest']['url'])) :   ?>
               <a href="<?php echo esc_url($settings['pinterest']['url']) ?>">
                  <i class="fa-brands fa-pinterest"></i>
               </a>
            <?php endif ?>

            <?php if (!empty($settings['youtube']['url'])) :   ?>
               <a href="<?php echo esc_url($settings['youtube']['url']) ?>">
                  <i class="fa-brands fa-youtube"></i>
               </a>
            <?php endif ?>

            <?php if (!empty($settings['tiktok']['url'])) :   ?>
               <a href="<?php echo esc_url($settings['tiktok']['url']) ?>">
                  <i class="fa-brands fa-tiktok"></i>
               </a>
            <?php endif ?>

            <?php if (!empty($settings['github']['url'])) :   ?>
               <a href="<?php echo esc_url($settings['github']['url']) ?>">
                  <i class="fa-brands fa-github"></i>
               </a>
            <?php endif ?>

            <?php if (!empty($settings['whatsapp']['url'])) :   ?>
               <a href="<?php echo esc_url($settings['whatsapp']['url']) ?>">
                  <i class="fa-brands fa-whatsapp"></i>
               </a>
            <?php endif ?>

            <?php if (!empty($settings['behance']['url'])) :   ?>
               <a href="<?php echo esc_url($settings['behance']['url']) ?>">
                  <i class="fa-brands fa-behance"></i>
               </a>
            <?php endif ?>

            <?php if (!empty($settings['custom']['url'])) :   ?>
               <a href="<?php echo esc_url($settings['custom']['url']) ?>">
                  <i class="fa-solid fa-globe"></i>
               </a>
            <?php endif ?>


         </div>
      </div>
   </div>

   <?php if (!empty($team_image['url'])) :   ?>
      <div class="team-card_img">
         <img class="ft-image" src="<?php echo esc_url($team_image['url']); ?>" alt="<?php echo esc_attr($team_name); ?>">
      </div>
   <?php endif ?>

   <a href="tel:<?php echo esc_attr($settings['number']) ?>" class="contact-btn-wrap">
      <span class="number ft-number"><?php echo esc_html($settings['number']) ?></span>
      <div class="icon-btn">
         <i class="fa-solid fa-phone"></i>
      </div>
   </a>
</div>