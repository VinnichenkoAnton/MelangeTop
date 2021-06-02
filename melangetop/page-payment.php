<?php
/*
Template Name: Оплата и доставка
*/
?>

<?php
    get_header();
?>

<section class="payment">
    <div class="container">
        <h1 class="title"><?php the_field('paymentfirst_title') ?></h1>
        <div class="payment__animation">
            <?php 
                $image = get_field('paymentfirst_img');
                if(!empty($image)):  ?>
                <img
                    src="<?php echo $image['url']; ?>"
                    alt="<?php echo $image['alt']; ?>"
                >
                <?php endif;
            ?>
        </div>
        <h2 class="payment__subtitle"><?php the_field('paymentsecond_subtitle1'); ?></h2>
        <div class="payment__item payment__item_checked">
            <h3 class="payment__variant"><?php the_field('paymentsecond_name1'); ?></h3>
            <p class="payment__descr"><?php the_field('paymentsecond_descr1'); ?></p>
        </div>
        <div class="payment__item payment__item_unchecked">
            <h3 class="payment__variant"><?php the_field('paymentsecond_name2'); ?></h3>
            <p class="payment__descr"><?php the_field('paymentsecond_descr2'); ?>
                <a href="<?php the_field('paymentsecond_link1'); ?>" targe="_blank"><?php the_field('paymentsecond_linktext1'); ?></a>
            </p>
        </div>
        <h2 class="payment__subtitle"><?php the_field('paymentsecond_subtitle2'); ?></h2>
        <div class="payment__item payment__item_unchecked">
            <p class="payment__descr payment__descr_margin"><?php the_field('paymentsecond_descr3'); ?></p>
        </div>
        <div class="payment__item payment__item_checked">
            <p class="payment__descr"><?php the_field('paymentsecond_descr4'); ?></p>
        </div>
        <h2 class="payment__subtitle"><?php the_field('paymentsecond_subtitle3'); ?></h2>
        <p class="payment__descr payment__descr_modified"><?php the_field('paymentsecond_textbefore'); ?>
            <a href="<?php the_field('paymentsecond_link2'); ?>" target="_blank"><?php the_field('paymentsecond_linktext2'); ?></a> <?php the_field('paymentsecond_textafter'); ?></p>


    </div>
</section>

<?php
    get_footer();
?>