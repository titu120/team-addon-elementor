<div class="magnetic-wrap team-three">
    <div class="team-card2 two magnetic-item">
        <div class="team-img">

            <?php if (!empty($settings['team_link']['url'])) :   ?>
                <a href="<?php echo esc_url($settings['team_link']['url']) ?>"><img decoding="async" width="648" height="748" src="<?php echo $team_image['url']; ?>" class="ft-image attachment-post-thumbnail size-post-thumbnail wp-post-image"></a>
            <?php endif ?>

            <ul class="social-list">

                <?php if (!empty($settings['facebook']['url'])) :   ?>
                    <li><a href="<?php echo esc_url($settings['facebook']['url']) ?>">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a></li>
                <?php endif ?>

                <?php if (!empty($settings['twitter']['url'])) :   ?>
                    <li><a href="<?php echo esc_url($settings['facebook']['url']) ?>">
                            <i class="fa-brands fa-twitter"></i>
                        </a></li>
                <?php endif ?>


                <?php if (!empty($settings['instagram']['url'])) :   ?>
                    <li><a href="<?php echo esc_url($settings['instagram']['url']) ?>">
                            <i class="fa-brands fa-instagram"></i>
                        </a></li>
                <?php endif ?>


                <?php if (!empty($settings['linkedin']['url'])) :   ?>
                    <li><a href="<?php echo esc_url($settings['linkedin']['url']) ?>">
                            <i class="fa-brands fa-linkedin-in"></i>
                        </a></li>
                <?php endif ?>

                <?php if (!empty($settings['pinterest']['url'])) :   ?>
                    <li><a href="<?php echo esc_url($settings['pinterest']['url']) ?>">
                            <i class="fa-brands fa-pinterest"></i>
                        </a></li>
                <?php endif ?>

                <?php if (!empty($settings['youtube']['url'])) :   ?>
                    <li><a href="<?php echo esc_url($settings['youtube']['url']) ?>">
                            <i class="fa-brands fa-youtube"></i>
                        </a></li>
                <?php endif ?>

                <?php if (!empty($settings['tiktok']['url'])) :   ?>
                    <li><a href="<?php echo esc_url($settings['tiktok']['url']) ?>">
                            <i class="fa-brands fa-tiktok"></i>
                        </a></li>
                <?php endif ?>

                <?php if (!empty($settings['github']['url'])) :   ?>
                    <li><a href="<?php echo esc_url($settings['github']['url']) ?>">
                            <i class="fa-brands fa-github"></i>
                        </a></li>
                <?php endif ?>

                <?php if (!empty($settings['whatsapp']['url'])) :   ?>
                    <li><a href="<?php echo esc_url($settings['whatsapp']['url']) ?>">
                            <i class="fa-brands fa-whatsapp"></i>
                        </a></li>
                <?php endif ?>

                <?php if (!empty($settings['behance']['url'])) :   ?>
                    <li><a href="<?php echo esc_url($settings['behance']['url']) ?>">
                            <i class="fa-brands fa-behance"></i>
                        </a></li>
                <?php endif ?>

                <?php if (!empty($settings['custom']['url'])) :   ?>
                    <li><a href="<?php echo esc_url($settings['custom']['url']) ?>">
                            <i class="fa-solid fa-globe"></i>
                        </a></li>
                <?php endif ?>


            </ul>
        </div>
        <div class="team-content">
            <?php if (!empty($team_name)) :   ?>
                <h5><a class="ft-name" href="https://mortar-wp.egenstheme.com/team/mr-jorche-milton-2/"><?php echo $team_name; ?></a></h5>
            <?php endif ?>
            <?php if (!empty($team_designation)) :   ?>
                <span class="ft-designation"><?php echo $team_designation; ?></span>
            <?php endif ?>
        </div>
    </div>
</div>