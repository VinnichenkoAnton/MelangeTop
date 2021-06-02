<?php
/*
Template Name: О компании
*/
?>

<?php
    get_header();
?>

<section class="about">
    <div class="container">
        <h1 class="title"><?php the_field('about_title1') ?></h1>
        <div class="about__item">
            <div class="about__text">
                <h2 class="about__text-title"><?php the_field('about_name1') ?></h2>
                <p class="about__text-descr"><?php the_field('about_descr1') ?></p>
            </div>
            <div class="about__img">
                <?php 
                    $image = get_field('about_img1');
                    if(!empty($image)): ?>
                        <img
                            src="<?php echo $image['url']; ?>"
                            alt="<?php echo $image['alt']; ?>">
                    <?php endif;
                ?> 
            </div>
        </div>
        <div class="about__item">
            <div class="about__img">
                <?php 
                    $image = get_field('about_img2');
                    if(!empty($image)): ?>
                        <img
                            src="<?php echo $image['url']; ?>"
                            alt="<?php echo $image['alt']; ?>">
                    <?php endif;
                ?> 
            </div>
            <div class="about__text">
                <h2 class="about__text-title"><?php the_field('about_name2') ?></h2>
                <p class="about__text-descr"><?php the_field('about_descr2') ?></p>
            </div>
        </div>
        <div class="about__item">
            <div class="about__text">
                <h2 class="about__text-title"><?php the_field('about_name3') ?></h2>
                <p class="about__text-descr"><?php the_field('about_descr3') ?></p>
            </div>
            <div class="about__img">
                <?php 
                    $image = get_field('about_img3');
                    if(!empty($image)): ?>
                        <img
                            src="<?php echo $image['url']; ?>"
                            alt="<?php echo $image['alt']; ?>">
                    <?php endif;
                ?> 
            </div>
        </div>
    </div>
</section>

<section class="numbers">
    <div class="container">
        <h2 class="title">О нас в цифрах</h2>
        <div class="numbers__wrapper">
            <div class="numbers__item">
                <div class="numbers__icn">
                    <?php 
                        $image = get_field('aboutsecond_img1');
                        if(!empty($image)): ?>
                            <img
                                src="<?php echo $image['url']; ?>"
                                alt="<?php echo $image['alt']; ?>">
                        <?php endif;
                    ?> 
                    <h3 class="numbers__text-title"><?php the_field('aboutsecond_number1') ?></h3>
                </div>
                <h4 class="numbers__text-descr"><?php the_field('aboutsecond_descr1') ?></h4>
            </div>
            <div class="numbers__item">
                <div class="numbers__icn">
                    <?php 
                        $image = get_field('aboutsecond_img2');
                        if(!empty($image)): ?>
                            <img
                                src="<?php echo $image['url']; ?>"
                                alt="<?php echo $image['alt']; ?>">
                        <?php endif;
                    ?> 
                    <h3 class="numbers__text-title"><?php the_field('aboutsecond_number2') ?></h3>
                </div>
                <h4 class="numbers__text-descr"><?php the_field('aboutsecond_descr2') ?></h4>
            </div>
            <div class="numbers__item">
                <div class="numbers__icn">
                    <?php 
                        $image = get_field('aboutsecond_img3');
                        if(!empty($image)): ?>
                            <img
                                src="<?php echo $image['url']; ?>"
                                alt="<?php echo $image['alt']; ?>">
                        <?php endif;
                    ?> 
                    <h3 class="numbers__text-title"><?php the_field('aboutsecond_number3') ?></h3>
                </div>
                <h4 class="numbers__text-descr"><?php the_field('aboutsecond_descr3') ?></h4>
            </div>
            <div class="numbers__item">
                <div class="numbers__icn">
                    <?php 
                        $image = get_field('aboutsecond_img4');
                        if(!empty($image)): ?>
                            <img
                                src="<?php echo $image['url']; ?>"
                                alt="<?php echo $image['alt']; ?>">
                        <?php endif;
                    ?> 
                    <h3 class="numbers__text-title"><?php the_field('aboutsecond_number4') ?></h3>
                </div>
                <h4 class="numbers__text-descr"><?php the_field('aboutsecond_descr4') ?></h4>
            </div>
        </div>
    </div>
</section>

<section class="comments">
    <div class="container">
        <h2 class="title"><?php the_field('aboutthird_title') ?></h2>
        <div class="comments__slider">
            <div class="comments__slider-wrapper">
                <div class="comments__slider-inner">

                    <?php 
                        $posts = get_posts( array(
                            'numberposts' => -1,
                            'category_name'    => 'comments',
                            'orderby'     => 'date',
                            'order'       => 'ASC',
                            'post_type'   => 'post',
                            'suppress_filters' => true, 
                        ) );

                        foreach( $posts as $post ){
                            setup_postdata($post);
                            ?>
                            <div class="comments__slide">
                                <div class="comments__img">
                                    <?php 
                                        $image = get_field('comments_img');
                                        if(!empty($image)): ?>
                                            <img
                                                src="<?php echo $image['url']; ?>"
                                                alt="<?php echo $image['alt']; ?>">
                                        <?php endif;
                                    ?>  
                                </div>
                                <div class="comments__text">
                                    <p class="comments__text-name"><?php the_field('comments_name') ?></p>
                                    <p class="comments__text-descr"><?php the_field('comments_text') ?></p>
                                </div>
                            </div>

                            <?php
                        }

                        wp_reset_postdata();
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="review">
    <div class="container">
        <h2 class="title"><?php the_field('aboutfourth_title') ?></h2>
        <?php echo do_shortcode('[contact-form-7 id="339" title="Форма отзывов"]') ?>
    </div>
</section>

<?php
    get_footer();
?>