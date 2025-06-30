<div class="team-one-item team-line w-dyn-item">
   <div class="team-one-link">
      <?php if (!empty($team_image['url'])) :   ?>
         <div class="team-one-image-wrap">
            <img class="ft-image" src="<?php echo esc_url($team_image['url']); ?>" alt="<?php echo esc_attr($team_name); ?>" class="team-one-preview">
         </div>
      <?php endif ?>
      <div class="team-one-content">
         <?php if (!empty($team_name)) :   ?>
            <div class="team-one-designation ft-name"><?php echo esc_html($team_name); ?></div>
         <?php endif ?>
         <?php if (!empty($team_designation)) :   ?>
            <h2 class="team-one-title  ft-designation"><?php echo esc_html($team_designation); ?></h2>
         <?php endif ?>
         <?php if (!empty($settings['number'])) :   ?>
            <div class="ft-number team-one-contact"><?php echo esc_html($settings['number']) ?></div>
         <?php endif ?>
      </div>
   </div>
</div>