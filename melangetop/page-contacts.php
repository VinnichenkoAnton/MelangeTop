<?php
/*
Template Name: Контакты
*/
?>

<?php
    get_header();
?>

<section class="contacts">
    <div class="container">
        <h1 class="title"><?php the_field('contact_title'); ?></h1>
        <div class="contacts__wrapper">
            <div class="contacts__map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2483.6162173060548!2d31.30788541576968!3d51.501909879634226!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46d548f5894f1a57%3A0xa2d66c17012dacf6!2z0L_RgNC-0YHQvy4g0J_QvtCx0LXQtNGLLCAxMzksINCn0LXRgNC90LjQs9C-0LIsINCn0LXRgNC90LjQs9C-0LLRgdC60LDRjyDQvtCx0LvQsNGB0YLRjCwgMTQwMDA!5e0!3m2!1sru!2sua!4v1618838905566!5m2!1sru!2sua"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <div class="contacts__line">
                <p class="contacts__location"><?php the_field('contactfirst_address'); ?></p>
                <h2 class="contacts__subtitle"><?php the_field('contactfirst_subtitle1'); ?></h2>
                <div class="contacts__item">
                    <div class="contacts__item-img">
                        <?php 
                            $image = get_field('contactfirst_img1');
                            if(!empty($image)):  ?>
                            <img
                                src="<?php echo $image['url']; ?>"
                                alt="<?php echo $image['alt']; ?>"
                            >
                            <?php endif;
                        ?>
                    </div>
                    <h3 class="contacts__item-text"><?php the_field('contactfirst_name1'); ?></h3>
                    <a class="contacts__item-link" href="tel:<?php the_field('contactfirst_linktext1'); ?>" target="_top"><?php the_field('contactfirst_linktext1'); ?></a>
                </div>
                <div class="contacts__item">
                    <div class="contacts__item-img">
                        <?php 
                            $image = get_field('contactfirst_img2');
                            if(!empty($image)):  ?>
                            <img
                                src="<?php echo $image['url']; ?>"
                                alt="<?php echo $image['alt']; ?>"
                            >
                            <?php endif;
                        ?>
                    </div>
                    <h3 class="contacts__item-text"><?php the_field('contactfirst_name2'); ?></h3>
                    <a class="contacts__item-link" href="mailto:<?php the_field('contactfirst_linktext2'); ?>" target="_top"><?php the_field('contactfirst_linktext2'); ?></a>
                </div>
            </div>
        </div>
        <div class="contacts__fill">
            <h2 class="contacts__subtitle contacts__subtitle_centered"><?php the_field('contactfirst_subtitle2'); ?></h2>
            <?php echo do_shortcode('[contact-form-7 id="340" title="Форма обратной связи"]') ?>
        </div>

    </div>
</section>

<?php
    get_footer();
?>