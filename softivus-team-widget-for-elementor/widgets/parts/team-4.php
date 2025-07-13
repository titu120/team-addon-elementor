<div class="magnetic-wrap team-four">
   <div class="team-card  magnetic-item">
      <div class="team-img">
         <?php if (!empty($team_image['url'])) :   ?>
            <img class="ft-image" decoding="async" src="<?php echo esc_url($team_image['url']); ?>" alt="<?php echo esc_attr($team_name); ?>">
         <?php endif ?>
         <ul class="social-list">

            <?php if (!empty($settings['facebook']['url'])) :   ?>
               <li>
                  <a href="<?php echo esc_url($settings['facebook']['url']) ?>">
                     <i class="fa-brands fa-facebook-f"></i>
                  </a>
               </li>
            <?php endif ?>

            <?php if (!empty($settings['twitter']['url'])) :   ?>
               <li>
                  <a href="<?php echo esc_url($settings['twitter']['url']) ?>">
                     <i class="fa-brands fa-twitter"></i>
                  </a>
               </li>
            <?php endif ?>

            <?php if (!empty($settings['linkedin']['url'])) :   ?>
               <li>
                  <a href="<?php echo esc_url($settings['linkedin']['url']) ?>">
                     <i class="fa-brands fa-linkedin-in"></i>
                  </a>
               </li>
            <?php endif ?>

            <?php if (!empty($settings['instagram']['url'])) :   ?>
               <li>
                  <a href="<?php echo esc_url($settings['instagram']['url']) ?>">
                     <i class="fa-brands fa-instagram"></i>
                  </a>
               </li>
            <?php endif ?>

            <?php if (!empty($settings['pinterest']['url'])) :   ?>
               <li>
                  <a href="<?php echo esc_url($settings['pinterest']['url']) ?>">
                     <i class="fa-brands fa-pinterest"></i>
                  </a>
               </li>
            <?php endif ?>


            <?php if (!empty($settings['youtube']['url'])) :   ?>

               <li>
                  <a href="<?php echo esc_url($settings['youtube']['url']) ?>">
                     <i class="fa-brands fa-youtube"></i>
                  </a>
               </li>
            <?php endif ?>


            <?php if (!empty($settings['tiktok']['url'])) :   ?>

               <li>
                  <a href="<?php echo esc_url($settings['tiktok']['url']) ?>">
                     <i class="fa-brands fa-tiktok"></i>
                  </a>
               </li>
            <?php endif ?>

            <?php if (!empty($settings['github']['url'])) :   ?>

               <li>
                  <a href="<?php echo esc_url($settings['github']['url']) ?>">
                     <i class="fa-brands fa-github"></i>
                  </a>
               </li>
            <?php endif ?>

            <?php if (!empty($settings['whatsapp']['url'])) :   ?>

               <li>
                  <a href="<?php echo esc_url($settings['whatsapp']['url']) ?>">
                     <i class="fa-brands fa-whatsapp"></i>
                  </a>
               </li>
            <?php endif ?>

            <?php if (!empty($settings['behance']['url'])) :   ?>

               <li>
                  <a href="<?php echo esc_url($settings['behance']['url']) ?>">
                     <i class="fa-brands fa-behance"></i>
                  </a>
               </li>
            <?php endif ?>

            <?php if (!empty($settings['custom']['url'])) :   ?>

               <li>
                  <a href="<?php echo esc_url($settings['custom']['url']) ?>">
                     <i class="fa-solid fa-globe"></i>
                  </a>
               </li>
            <?php endif ?>


         </ul>
      </div>
      <div class="team-content">
         <?php if (!empty($team_name)) :   ?>
            <h5 class="ft-name"><?php echo esc_html($team_name); ?></h5>
         <?php endif ?>
         <?php if (!empty($team_designation)) :   ?>
            <span class="ft-designation"><?php echo esc_html($team_designation); ?></span>
         <?php endif ?>
      </div>
   </div>
</div>