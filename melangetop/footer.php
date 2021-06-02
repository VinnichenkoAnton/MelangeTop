<footer class="footer">
        <div class="footer__devider"></div>
        <div class="container">
            <div class="header__wrapper header__wrapper_centered">
                <a class="header__logo" href="<?php echo get_home_url(); ?>">
                    <div class="header__logo-img">
                        <img src="
                            <?php  
                                $custom_logo__url = wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' ); 
                                echo $custom_logo__url[0]; 
                            ?>
                        " alt="Логотип">
                    </div>
                    <div class="header__logo-text">
                        <div class="header__logo-title"><?php bloginfo('name');?></div>
                        <div class="header__logo-subtitle"><?php bloginfo('description');?></div>
                    </div>
                </a>
                <div class="header__contacts header__contacts_invisible">
                    <div class="header__info header__info-social">
                        <a href="<?php the_field('headfoot_social1', 365); ?>" class="header__info-img">
                            <svg role="image" aria-label="Facebook" width="13" height="24" viewbox="0 0 13 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12.025.237L9.057.233c-3.335 0-5.49 2.21-5.49 5.633v2.597H.582a.467.467 0 00-.467.467v3.764c0 .257.21.466.467.466h2.985v9.496c0 .258.209.467.467.467h3.894c.257 0 .466-.21.466-.467V13.16h3.49a.467.467 0 00.467-.466l.001-3.764a.467.467 0 00-.467-.467h-3.49V6.261c0-1.058.252-1.595 1.63-1.595h2c.257 0 .466-.21.466-.468V.704a.467.467 0 00-.466-.467z" fill="#fff"/></svg>
                        </a>
                        <a href="<?php the_field('headfoot_social2', 365); ?>" class="header__info-img">
                            <svg role="image" aria-label="Instagram" width="23" height="23" viewbox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M16.096.443H6.409A5.973 5.973 0 00.443 6.409v9.687a5.973 5.973 0 005.966 5.966h9.687a5.973 5.973 0 005.966-5.966V6.409A5.973 5.973 0 0016.096.443zm4.048 15.653a4.053 4.053 0 01-4.048 4.048H6.409a4.052 4.052 0 01-4.048-4.048V6.409A4.053 4.053 0 016.409 2.36h9.687a4.053 4.053 0 014.048 4.048v9.687z" fill="#fff"/><path d="M11.252 5.682a5.577 5.577 0 00-5.57 5.57 5.577 5.577 0 005.57 5.571 5.577 5.577 0 005.571-5.57 5.577 5.577 0 00-5.57-5.571zm0 9.223A3.657 3.657 0 017.6 11.253 3.657 3.657 0 0111.252 7.6a3.657 3.657 0 013.653 3.653 3.657 3.657 0 01-3.652 3.652zm5.805-10.85a1.412 1.412 0 00-1.407 1.407c0 .37.151.733.413.995.261.26.624.412.994.412s.733-.151.995-.412c.262-.262.412-.625.412-.995s-.15-.734-.412-.995a1.413 1.413 0 00-.995-.412z" fill="#fff"/></svg>
                        </a>
                        <a href="<?php the_field('headfoot_social3', 365); ?>" class="header__info-img">
                            <svg role="image" aria-label="Youtube" width="29" height="29" viewbox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M27.87 6.047c-1.047-1.244-2.98-1.752-6.67-1.752H7.8c-3.775 0-5.74.54-6.783 1.866C0 7.452 0 9.356 0 11.99v5.02c0 5.103 1.206 7.694 7.8 7.694h13.4c3.2 0 4.974-.447 6.121-1.546C28.498 22.032 29 20.194 29 17.01v-5.02c0-2.778-.079-4.693-1.13-5.943zm-9.252 9.146l-6.084 3.18a.935.935 0 01-1.369-.83v-6.338a.935.935 0 011.367-.83l6.084 3.159a.936.936 0 01.002 1.66z" fill="#fff"/></svg>
                        </a>
                    </div>
                    <div class="header__info">
                        <div class="header__info-img">
                            <?php 
                                    $image = get_field('headfoot_firsticn', 365);
                                    if(!empty($image)): ?>
                                        <img
                                            src="<?php echo $image['url']; ?>"
                                            alt="<?php echo $image['alt']; ?>">
                                    <?php endif;
                            ?>  
                        </div>
                        <div class="header__info-text">
                            <div class="header__info-title"><?php the_field('headfoot_first', 365); ?></div>
                            <div class="header__info-subtitle"><?php the_field('headfoot_firstdescr', 365); ?></div>
                        </div>
                    </div>
                    <div class="header__info">
                        <div class="header__info-img">
                            <?php 
                                    $image = get_field('headfoot_secondicn', 365);
                                    if(!empty($image)): ?>
                                        <img
                                            src="<?php echo $image['url']; ?>"
                                            alt="<?php echo $image['alt']; ?>">
                                    <?php endif;
                            ?> 
                        </div>
                        <div class="header__info-text">
                            <div class="header__info-title"><?php the_field('headfoot_second', 365); ?></div>
                            <a class="header__info-subtitle header__tel" href="tel:<?php the_field('headfoot_seconddescr', 365); ?>" target="_top"><?php the_field('headfoot_seconddescr', 365); ?></a>
                        </div>
                    </div>
                    <div class="header__info">
                        <div class="header__info-img">
                            <?php 
                                    $image = get_field('headfoot_thirdicn', 365);
                                    if(!empty($image)): ?>
                                        <img
                                            src="<?php echo $image['url']; ?>"
                                            alt="<?php echo $image['alt']; ?>">
                                    <?php endif;
                            ?> 
                        </div>
                        <div class="header__info-text">
                            <div class="header__info-title"><?php the_field('headfoot_third', 365); ?></div>
                            <div class="header__info-subtitle"><?php the_field('headfoot_thirddescr', 365); ?></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer__rights">VAOLIN © 2021. ALL RIGHTS RESERVED.</div>
        </div>
    </footer>

    <div class="pageup">
        <img src="<?php echo bloginfo('template_url'); ?>/assets/icons/arrowup.png" alt="up">
    </div>

    <?php wp_footer(); ?>
</body>

</html>