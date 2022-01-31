<div class="footer">
    <div class="footer-icon">
        <div class="footer__icon-1">
            <a href="<?php the_field('twitter-link') ?>">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/twitter.png" alt="icon">
            </a>
        </div>
        <div class="footer__icon-2">
            <a href="<?php the_field('dribbble-link') ?>">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/dribbble.png" alt="icon">
            </a>
        </div>

        <div class="footer__icon-3">
            <a href="<?php the_field('facebook-link') ?>">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/facebook.png" alt="icon">
            </a>
        </div>
    </div>
    <div class="footer-autor">
        <p>© Raphael Lechner</p>
        <p>Imprint</p>
    </div>
</div>
<a href="#header" class="top">
    <i class="fas fa-angle-double-up"></i>
</a>
</div>
<?php wp_footer() ?>
</body>
</html>