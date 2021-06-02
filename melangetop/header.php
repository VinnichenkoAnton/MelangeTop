<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title><?php bloginfo('name'); echo " | "; bloginfo('description'); ?></title>
    <meta name="title" content="<?php bloginfo('name');?>">
    <meta name="description" content="Широкий выбор товаров на любой вкус. У нас вы найдете именно то, что искали">

    <meta property="og:type" content="website">
    <meta property="og:url" content="https://melangetop.vinnichenko-anton.cv.ua/">
    <meta property="og:title" content="<?php bloginfo('name');?>">
    <meta property="og:description" content="Широкий выбор товаров на любой вкус. У нас вы найдете именно то, что искали">
    <meta property="og:image" content="<?php echo bloginfo('template_url'); ?>/assets/img/meta_img.jpg">

    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://melangetop.vinnichenko-anton.cv.ua/">
    <meta property="twitter:title" content="<?php bloginfo('name');?>">
    <meta property="twitter:description" content="Широкий выбор товаров на любой вкус. У нас вы найдете именно то, что искали">
    <meta property="twitter:image" content="<?php echo bloginfo('template_url'); ?>/assets/img/meta_img.jpg">

    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo bloginfo('template_url'); ?>/assets/icons/favicon/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo bloginfo('template_url'); ?>/assets/icons/favicon/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo bloginfo('template_url'); ?>/assets/icons/favicon/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo bloginfo('template_url'); ?>/assets/icons/favicon/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo bloginfo('template_url'); ?>/assets/icons/favicon/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo bloginfo('template_url'); ?>/assets/icons/favicon/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo bloginfo('template_url'); ?>/assets/icons/favicon/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo bloginfo('template_url'); ?>/assets/icons/favicon/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo bloginfo('template_url'); ?>/assets/icons/favicon/apple-touch-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo bloginfo('template_url'); ?>/assets/icons/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="192x192" href="<?php echo bloginfo('template_url'); ?>/assets/icons/favicon/android-chrome-192x192.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo bloginfo('template_url'); ?>/assets/icons/favicon/favicon-16x16.png">
    <link rel="mask-icon" href="<?php echo bloginfo('template_url'); ?>/assets/icons/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-TileImage" content="<?php echo bloginfo('template_url'); ?>/assets/icons/favicon/mstile-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <section class="preloader">
        <div class="cssload-loader">
            <div class="cssload-inner cssload-one"></div>
            <div class="cssload-inner cssload-two"></div>
            <div class="cssload-inner cssload-three"></div>
        </div>
    </section>

    <header class="header">
        <div class="container">
            <div class="header__wrapper">
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
                <div class="header__hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div class="header__contacts">
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
        </div>
    </header>

    <nav class="navigation">
        <div class="container">
            <?php 
                wp_nav_menu( array(
                    'menu'            => 'Main',                                                
                    'container'       => false,                       
                    'menu_class'      => 'navigation__wrapper',              
                    'echo'            => true,            
                    'fallback_cb'     => 'wp_page_menu',
                    'items_wrap'      =>  '<ul class="navigation__wrapper">%3$s</ul>',
                    'depth'           => 1,             
                ) );
            ?>
        </div>
    </nav>

    <section class="slider">
        <div class="offer__slider">
            <div class="offer__slider-prev">
                <svg role="image" aria-label="Листать влево" width="25" height="35" viewbox="0 0 15 25" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M.983 13.392l11.242 11.239a1.266 1.266 0 001.787 0 1.26 1.26 0 000-1.783L3.662 12.5l10.35-10.347a1.261 1.261 0 000-1.785 1.266 1.266 0 00-1.788 0L.982 11.608a1.274 1.274 0 000 1.784z" fill="#fff"/></svg>
            </div>
            <div class="offer__slider-next">
                <svg role="image" aria-label="Листать вправо" width="25" height="35" viewbox="0 0 15 25" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M14.017 11.608L2.775.369a1.266 1.266 0 00-1.787 0 1.26 1.26 0 000 1.783L11.338 12.5.988 22.846a1.261 1.261 0 000 1.785 1.266 1.266 0 001.788 0l11.242-11.239a1.274 1.274 0 000-1.784z" fill="#fff"/></svg>
            </div>
            <div class="offer__slider-wrapper">
                <div class="offer__slider-inner">

                <?php 
                    $posts = get_posts( array(
                        'numberposts' => -1,
                        'category_name'    => 'slider',
                        'orderby'     => 'date',
                        'order'       => 'ASC',
                        'post_type'   => 'post',
                        'suppress_filters' => true, 
                    ) );

                    foreach( $posts as $post ){
                        setup_postdata($post);
                        ?>
                            <a href="<?php the_field('slider_link') ?>" class="offer__slide">
                                <?php 
                                    $image = get_field('slider_img');
                                    if(!empty($image)): ?>
                                        <img
                                            src="<?php echo $image['url']; ?>"
                                            alt="<?php echo $image['alt']; ?>">
                                    <?php endif;
                                ?>  
                            </a>

                        <?php
                    }

                    wp_reset_postdata();
                ?>
                </div>
            </div>
        </div>
    </section>