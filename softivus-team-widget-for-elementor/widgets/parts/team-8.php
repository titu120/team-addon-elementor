<div class="team-8">


   <div class="team-staf-item tilt bg2-clr text-center py-xxl-8 py-xl-6 py-5 px-xxl-7 px-xl-5 px-4">

      <?php if (!empty($team_image['url'])) :   ?>
         <div class="thumb">
            <img loading="lazy" decoding="async" width="330" height="370" src="<?php echo esc_url($team_image['url']); ?>" alt="<?php echo esc_attr($team_name); ?>" class="ft-image attachment-post-thumbnail size-post-thumbnail wp-post-image">
         </div>
      <?php endif ?>

      <?php if (!empty($settings['team_link']['url'])) :   ?>
         <h4 class="team-card_title text-center"><a class="ft-name" href="<?php echo esc_url($settings['team_link']['url']) ?>"><?php echo esc_html($team_name); ?></a>
         </h4>
      <?php endif ?>


      <div class="content pb-xxl-4 pb-3 mb-xxl-6 mb-xl-4 mb-3 bb-border">

      </div>

      <ul class="trans-social d-flex align-items-center justify-content-center gap-xxl-5 gap-xl-4 gap-3 flex-wrap">
         
         <?php if (!empty($settings['facebook']['url'])) :   ?>
            <li><a href="<?php echo esc_url($settings['facebook']['url']) ?>" target="_blank" rel="noopener noreferrer">
                  <i class="fa-brands fa-facebook-f"></i>
               </a></li>
         <?php endif ?>

         <?php if (!empty($settings['twitter']['url'])) :   ?>
            <li><a href="<?php echo esc_url($settings['twitter']['url']) ?>" target="_blank" rel="noopener noreferrer">
                  <i class="fa-brands fa-twitter"></i>
               </a></li>
         <?php endif ?>

         <?php if (!empty($settings['linkedin']['url'])) :   ?>
            <li><a href="<?php echo esc_url($settings['linkedin']['url']) ?>" target="_blank" rel="noopener noreferrer">
                  <i class="fa-brands fa-linkedin-in"></i>
               </a></li>
         <?php endif ?>

         <?php if (!empty($settings['instagram']['url'])) :   ?>
            <li><a href="<?php echo esc_url($settings['instagram']['url']) ?>" target="_blank" rel="noopener noreferrer">
                  <i class="fa-brands fa-instagram"></i>
               </a></li>
         <?php endif ?>

         <?php if (!empty($settings['pinterest']['url'])) :   ?>
            <li><a href="<?php echo esc_url($settings['pinterest']['url']) ?>" target="_blank" rel="noopener noreferrer">
                  <i class="fa-brands fa-pinterest"></i>
               </a></li>
         <?php endif ?>

         <?php if (!empty($settings['youtube']['url'])) :   ?>
            <li><a href="<?php echo esc_url($settings['youtube']['url']) ?>" target="_blank" rel="noopener noreferrer">
                  <i class="fa-brands fa-youtube"></i>
               </a></li>
         <?php endif ?>

         <?php if (!empty($settings['tiktok']['url'])) :   ?>
            <li><a href="<?php echo esc_url($settings['tiktok']['url']) ?>" target="_blank" rel="noopener noreferrer">
                  <i class="fa-brands fa-tiktok"></i>
               </a></li>
         <?php endif ?>

         <?php if (!empty($settings['github']['url'])) :   ?>
            <li><a href="<?php echo esc_url($settings['github']['url']) ?>" target="_blank" rel="noopener noreferrer">
                  <i class="fa-brands fa-github"></i>
               </a></li>
         <?php endif ?>

         <?php if (!empty($settings['whatsapp']['url'])) :   ?>
            <li><a href="<?php echo esc_url($settings['whatsapp']['url']) ?>" target="_blank" rel="noopener noreferrer">
                  <i class="fa-brands fa-whatsapp"></i>
               </a></li>
         <?php endif ?>

         <?php if (!empty($settings['behance']['url'])) :   ?>
            <li><a href="<?php echo esc_url($settings['behance']['url']) ?>" target="_blank" rel="noopener noreferrer">
                  <i class="fa-brands fa-behance"></i>
               </a></li>
         <?php endif ?>

         <?php if (!empty($settings['custom']['url'])) :   ?>
            <li><a href="<?php echo esc_url($settings['custom']['url']) ?>" target="_blank" rel="noopener noreferrer">
                  <i class="fa-solid fa-globe"></i>
               </a></li>
         <?php endif ?>

      </ul>

   </div>

</div>