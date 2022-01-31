<?php
/*
Template Name: home
*/
?>
<?php get_header() ?>
<div class="main" id="about">
    <div class="main-container">
        <div class="main-title">
            <h2><?php the_field('main-title') ?></h2>
            <p><?php the_field('main-subtitle') ?></p>
        </div>
        <div class="slider">
            <?php
                global $post;
                $myposts = get_posts([ 
                    'numberposts' => -1,
                ]);
            if( $myposts ){
                foreach( $myposts as $post ){
                    setup_postdata( $post );
                    ?>
            <div class="slider__item">
                <div class="info-1">
                    <?php the_post_thumbnail()?>
                    <p class="info-title"> <?php the_title() ?></p>
                    <span class="info-text"><?php the_content() ?></span>
                </div>
            </div>
            <?php } } wp_reset_postdata(); ?>
        </div>
    </div>
    <div class="main-line"></div>
</div>
<div class="gallery" id="work">
    <div class="gallery-img">
        <div class="gallery-box__1">
            <div class="img-1 block" style="background-image: url(<?php the_field('img-1') ?>);">
                <div class="block-hover">
                </div>
                <div class="img-search">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/search.svg" alt="search">
                </div>
                <div class="img-text">
                    <p class="img-title"><?php the_field('img-title') ?></p>
                    <p class="img-subtitle"><?php the_field('img-subtitle') ?></p>
                </div>
            </div>
            <div class="img-2 block" style="background-image: url(<?php the_field('img-2') ?>);">
                <div class="block-hover">
                </div>
                <div class="img-search">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/search.svg" alt="search">
                </div>
                <div class="img-text">
                    <p class="img-title"><?php the_field('img-title') ?></p>
                    <p class="img-subtitle"><?php the_field('img-subtitle') ?></p>
                </div>
            </div>
        </div>
        <div class="gallery-box__2">
            <div class="img-3 block" style="background-image: url(<?php the_field('img-3') ?>);">
                <div class="block-hover">
                </div>
                <div class="img-search">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/search.svg" alt="search">
                </div>
                <div class="img-text">
                    <p class="img-title"><?php the_field('img-title') ?></p>
                    <p class="img-subtitle"><?php the_field('img-subtitle') ?></p>
                </div>
            </div>
            <div class="img-4 block" style="background-image: url(<?php the_field('img-4') ?>);">
                <div class="block-hover">
                </div>
                <div class="img-search">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/search.svg" alt="search">
                </div>
                <div class="img-text">
                    <p class="img-title"><?php the_field('img-title') ?></p>
                    <p class="img-subtitle"><?php the_field('img-subtitle') ?></p>
                </div>
            </div>
        </div>
    </div>
    <button class="gallery-btn">
        VIEW MORE<img src="<?php bloginfo('template_url'); ?>/assets/img/ArrowBtn.png" alt="ArrowBtn">
    </button>
    <div class="gallery-line"></div>
</div>
<div class="form" id="contact">
    <div class="form-title">
        <p>Get in touch!</p>
    </div>
    <form class="form-wraper" action="#" method="POST">
        <?php echo do_shortcode('[contact-form-7 id="56" title="Форма"]') ?>
    </form>
</div>
<?php get_footer() ?>