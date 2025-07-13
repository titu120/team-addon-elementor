<div class="transpi__team-item wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 200ms; animation-name: fadeInUp;">
   <div class="team__top">
      <?php if (!empty($team_image['url'])) :   ?>
         <div class="team_img">
            <img class="ft-image" decoding="async" src="<?php echo esc_url($team_image['url']); ?>" alt="<?php echo esc_attr($team_name); ?>">
         </div>
      <?php endif ?>

      <div class="team_overlay">
         <span class="tm_hover">
            <i class="fa-solid fa-share"></i>
         </span>
         <div class="social_icon">

            <?php if (!empty($settings['facebook']['url'])) :   ?>
               <a class="social-link-icon" href="<?php echo esc_url($settings['facebook']['url']) ?>">
                  <i class="fa-brands fa-facebook-f"></i>
               </a>
            <?php endif ?>

            <?php if (!empty($settings['twitter']['url'])) :   ?>
               <a class="social-link-icon" href="<?php echo esc_url($settings['twitter']['url']) ?>">
                  <i class="fa-brands fa-twitter"></i>
               </a>
            <?php endif ?>

            <?php if (!empty($settings['linkedin']['url'])) :   ?>
               <a class="social-link-icon" href="<?php echo esc_url($settings['linkedin']['url']) ?>">
                  <i class="fa-brands fa-linkedin-in"></i>
               </a>
            <?php endif ?>

            <?php if (!empty($settings['instagram']['url'])) :   ?>
               <a class="social-link-icon" href="<?php echo esc_url($settings['instagram']['url']) ?>">
                  <i class="fa-brands fa-instagram"></i>
               </a>
            <?php endif ?>

            <?php if (!empty($settings['pinterest']['url'])) :   ?>
               <a class="social-link-icon" href="<?php echo esc_url($settings['pinterest']['url']) ?>">
                  <i class="fa-brands fa-pinterest"></i>
               </a>
            <?php endif ?>

            <?php if (!empty($settings['youtube']['url'])) :   ?>
               <a class="social-link-icon" href="<?php echo esc_url($settings['youtube']['url']) ?>">
                  <i class="fa-brands fa-youtube"></i>
               </a>
            <?php endif ?>

            <?php if (!empty($settings['tiktok']['url'])) :   ?>
               <a class="social-link-icon" href="<?php echo esc_url($settings['tiktok']['url']) ?>">
                  <i class="fa-brands fa-tiktok"></i>
               </a>
            <?php endif ?>


            <?php if (!empty($settings['github']['url'])) :   ?>
               <a class="social-link-icon" href="<?php echo esc_url($settings['github']['url']) ?>">
                  <i class="fa-brands fa-github"></i>
               </a>
            <?php endif ?>
            <?php if (!empty($settings['whatsapp']['url'])) :   ?>

               <a class="social-link-icon" href="<?php echo esc_url($settings['whatsapp']['url']) ?>">
                  <i class="fa-brands fa-whatsapp"></i>
               </a>
            <?php endif ?>

            <?php if (!empty($settings['behance']['url'])) :   ?>
               <a class="social-link-icon" href="<?php echo esc_url($settings['behance']['url']) ?>">
                  <i class="fa-brands fa-behance"></i>
               </a>
            <?php endif ?>

            <?php if (!empty($settings['custom']['url'])) :   ?>
               <a class="social-link-icon" href="<?php echo esc_url($settings['custom']['url']) ?>">
                  <i class="fa-solid fa-globe"></i>
               </a>
            <?php endif ?>

            
         </div>
      </div>
   </div>

   <div class="team_content">
      <?php if (!empty($settings['team_link']['url'])) :   ?>
         <h3><a class="ft-name" href="<?php echo esc_url($settings['team_link']['url']) ?>"><?php echo esc_html($team_name); ?></a></h3>
      <?php endif ?>
      <?php if (!empty($team_designation)) :   ?>
         <span class="ft-designation"><?php echo esc_html($team_designation); ?></span>
      <?php endif ?>
   </div>

</div>