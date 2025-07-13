<div class="team-card two">
    <?php if (!empty($team_image['url'])) :   ?>
        <div class="team-img">
            <a href="<?php echo esc_url($settings['team_link']['url']) ?>">
                <img loading="lazy" decoding="async" width="648" height="748" src="<?php echo esc_url($team_image['url']); ?>" alt="<?php echo esc_attr($team_name); ?>" class="ft-image attachment-post-thumbnail size-post-thumbnail wp-post-image">
            </a>
        </div>
    <?php endif ?>

    <div class="team-content">
        <?php if (!empty($team_name)) :   ?>
            <h5><a class="ft-name" href="<?php echo esc_url($settings['team_link']['url']); ?>"><?php echo esc_html($team_name); ?></a></h5>
        <?php endif ?>
        <?php if (!empty($team_designation)) :   ?>
            <span class="ft-designation"><?php echo esc_html($team_designation); ?></span>
        <?php endif ?>
        <svg class="divider" height="6" viewBox="0 0 312 6" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M5 2.5L0 0.113249V5.88675L5 3.5V2.5ZM307 3.5L312 5.88675V0.113249L307 2.5V3.5ZM4.5 3.5H307.5V2.5H4.5V3.5Z"></path>
        </svg>

        <ul class="social-list">

            <?php if (!empty($settings['facebook']['url'])) :   ?>
                <li>
                    <a href="<?php echo esc_url($settings['facebook']['url']) ?>" class="social-area">
                        <div class="icon">
                            <i class="fa-brands fa-facebook-f"></i>
                        </div>
                        <div class="content">
                            <span class="social-title"><?php echo esc_html('Facebook') ?></span>
                        </div>
                    </a>
                </li>
            <?php endif ?>

            <?php if (!empty($settings['twitter']['url'])) :   ?>
                <li>
                    <a href="<?php echo esc_url($settings['twitter']['url']) ?>" class="social-area">
                        <div class="icon">
                            <i class="fa-brands fa-twitter"></i>
                        </div>
                        <div class="content">
                            <span class="social-title"><?php echo esc_html('Twitter') ?></span>
                        </div>
                    </a>
                </li>
            <?php endif ?>

            <?php if (!empty($settings['linkedin']['url'])) :   ?>

                <li>
                    <a href="<?php echo esc_url($settings['linkedin']['url']) ?>" class="social-area">
                        <div class="icon">
                            <i class="fa-brands fa-linkedin-in"></i>
                        </div>
                        <div class="content">
                            <span class="social-title"><?php echo esc_html('Linkedin') ?></span>
                        </div>
                    </a>
                </li>
            <?php endif ?>

            <?php if (!empty($settings['instagram']['url'])) :   ?>
                <li>
                    <a href="<?php echo esc_url($settings['instagram']['url']) ?>" class="social-area">
                        <div class="icon">
                            <i class="fa-brands fa-instagram"></i>
                        </div>
                        <div class="content">
                            <span class="social-title"><?php echo esc_html('Instagram') ?></span>
                        </div>
                    </a>
                </li>
            <?php endif ?>



            <?php if (!empty($settings['pinterest']['url'])) :   ?>
                <li>
                    <a href="<?php echo esc_url($settings['pinterest']['url']) ?>" class="social-area">
                        <div class="icon">
                            <i class="fa-brands fa-pinterest"></i>
                        </div>
                        <div class="content">
                            <span class="social-title"><?php echo esc_html('Pinterest') ?></span>
                        </div>
                    </a>
                </li>
            <?php endif ?>


            <?php if (!empty($settings['youtube']['url'])) :   ?>
                <li>
                    <a href="<?php echo esc_url($settings['youtube']['url']) ?>" class="social-area">
                        <div class="icon">
                            <i class="fa-brands fa-youtube"></i>
                        </div>
                        <div class="content">
                            <span class="social-title"><?php echo esc_html('youtube') ?></span>
                        </div>
                    </a>
                </li>
            <?php endif ?>

            <?php if (!empty($settings['tiktok']['url'])) :   ?>
                <li>
                    <a href="<?php echo esc_url($settings['tiktok']['url']) ?>" class="social-area">
                        <div class="icon">
                            <i class="fa-brands fa-tiktok"></i>
                        </div>
                        <div class="content">
                            <span class="social-title"><?php echo esc_html('Tiktok') ?></span>
                        </div>
                    </a>
                </li>
            <?php endif ?>

            <?php if (!empty($settings['github']['url'])) :   ?>
                <li>
                    <a href="<?php echo esc_url($settings['github']['url']) ?>" class="social-area">
                        <div class="icon">
                            <i class="fa-brands fa-github"></i>
                        </div>
                        <div class="content">
                            <span class="social-title"><?php echo esc_html('Github') ?></span>
                        </div>
                    </a>
                </li>
            <?php endif ?>

            <?php if (!empty($settings['whatsapp']['url'])) :   ?>
                <li>
                    <a href="<?php echo esc_url($settings['whatsapp']['url']) ?>" class="social-area">
                        <div class="icon">
                            <i class="fa-brands fa-whatsapp"></i>
                        </div>
                        <div class="content">
                            <span class="social-title"><?php echo esc_html('Whatsapp') ?></span>
                        </div>
                    </a>
                </li>
            <?php endif ?>


            <?php if (!empty($settings['behance']['url'])) :   ?>
                <li>
                    <a href="<?php echo esc_url($settings['behance']['url']) ?>" class="social-area">
                        <div class="icon">
                            <i class="fa-brands fa-behance"></i>
                        </div>
                        <div class="content">
                            <span class="social-title"><?php echo esc_html('Behance') ?></span>
                        </div>
                    </a>
                </li>
            <?php endif ?>


            <?php if (!empty($settings['custom']['url'])) :   ?>
                <li>
                    <a href="<?php echo esc_url($settings['custom']['url']) ?>" class="social-area">
                        <div class="icon">
                            <i class="fa-solid fa-globe"></i>
                        </div>
                        <div class="content">
                            <span class="social-title"><?php echo esc_html('Custom') ?></span>
                        </div>
                    </a>
                </li>
            <?php endif ?>

        </ul>
    </div>
</div>