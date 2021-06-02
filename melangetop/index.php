
    <?php get_header(); ?>

    <section class="advantages">
        <div class="container">
            <h1 class="title"><?php the_field('main_title1') ?></h1>
            <div class="advantages__wrapper">
                <div class="advantages__item">
                    <div class="advantages__icn">
                        <?php 
                            $image = get_field('mainfirst_icn1');
                            if(!empty($image)): ?>
                                <img
                                    src="<?php echo $image['url']; ?>"
                                    alt="<?php echo $image['alt']; ?>">
                            <?php endif;
                        ?>  
                    </div>
                    <h2 class="advantages__title"><?php the_field('mainfirst_name1') ?></h2>
                    <h3 class="advantages__subtitle"><?php the_field('mainfirst_descr1') ?></h3>
                </div>
                <div class="advantages__item">
                    <div class="advantages__icn">
                        <?php 
                            $image = get_field('mainfirst_icn2');
                            if(!empty($image)): ?>
                                <img
                                    src="<?php echo $image['url']; ?>"
                                    alt="<?php echo $image['alt']; ?>">
                            <?php endif;
                        ?>  
                    </div>
                    <h2 class="advantages__title"><?php the_field('mainfirst_name2') ?></h2>
                    <h3 class="advantages__subtitle"><?php the_field('mainfirst_descr2') ?></h3>
                </div>
                <div class="advantages__item">
                    <a href="tel:+380930403242" class="advantages__icn advantages__icn_animation">
                        <?php 
                            $image = get_field('mainfirst_icn3');
                            if(!empty($image)): ?>
                                <img
                                    src="<?php echo $image['url']; ?>"
                                    alt="<?php echo $image['alt']; ?>">
                            <?php endif;
                        ?>  
                    </a>
                    <h2 href="tel:+380930403242" class="advantages__title"><?php the_field('mainfirst_name3') ?></h2>
                    <h3 class="advantages__subtitle"><?php the_field('mainfirst_descr3') ?></h3>
                </div>
            </div>
        </div>
    </section>

    <section class="range">
        <div class="container">
            <h2 class="title"><?php the_field('main_title2') ?></h2>
            <div class="range__wrapper">

                <?php 
                $posts = get_posts( array(
                    'numberposts' => -1,
                    'category_name'    => 'range',
                    'orderby'     => 'date',
                    'order'       => 'ASC',
                    'post_type'   => 'post',
                    'suppress_filters' => true, 
                ) );

                foreach( $posts as $post ){
                    setup_postdata($post);
                    ?>
                        <div class="range__item">
                            <div class="range__img">
                                <?php 
                                    $image = get_field('range_img');
                                    if(!empty($image)): ?>
                                        <img
                                            src="<?php echo $image['url']; ?>"
                                            alt="<?php echo $image['alt']; ?>">
                                    <?php endif;
                                ?>  
                            </div>
                            <h3 class="range__title"><?php the_field('range_name') ?></h3>
                            <h4 class="range__price"><?php the_field('range_descr') ?></h4>
                            <a class="btn range__btn" href="<?php the_field('range_link') ?>">В магазин</a>
                        </div>

                    <?php
                }

                wp_reset_postdata();
                ?>

            </div>

        </div>
    </section>

    <?php get_footer(); ?>