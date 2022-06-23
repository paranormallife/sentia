<?php 
$the_query = new WP_Query( array(
    'post_type' => 'testimonial',
    'posts_per_page' => -1
) ); ?>
 
<?php if ( $the_query->have_posts() ) : ?>
    <div class="testimonials-carousel-container">
        <div class="testimonials-carousel page-width">
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                <div class="testimonial">
                    <div class="quote"><?= get_the_excerpt(); ?></div>
                    <div class="attribution">-<?= get_the_title(); ?></div>
                </div>
            <?php endwhile; ?>
        </div>
        <div class="testimonials-cta">
            <a class="button light" href="<?= get_bloginfo('wpurl'); ?>/testimonials">Success Stories</a>
        </div>
        <div class="testimonials-navigation page-width"></div>
    </div>
    <?php wp_reset_postdata(); ?>
<?php endif; ?>

<script>
    jQuery('.testimonials-carousel').slick({
        infinite: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        appendArrows: '.testimonials-navigation',
        appendDots: '.testimonials-navigation',
        nextArrow: '<div class="carousel-arrow next"><ion-icon name="chevron-forward-outline"></ion-icon></div>',
        prevArrow: '<div class="carousel-arrow prev"><ion-icon name="chevron-back-outline"></ion-icon></div>',
    });
</script>