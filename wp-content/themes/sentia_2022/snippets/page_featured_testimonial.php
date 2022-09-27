<?php 
$testimonial = get_post_meta( $post->ID, 'featured_testimonial', true);
$the_query = new WP_Query( array(
    'post_type' => 'testimonial',
    'posts_per_page' => 1,
    'p' => $testimonial

) ); ?>
 
<?php if ( $the_query->have_posts() ) : ?>
    <div class="featured_testimonial page-width slim-width">
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                <div class="testimonial">
                    <div class="quote"><?= get_the_excerpt(); ?></div>
                    <div class="attribution">-<?= get_the_title(); ?></div>
                </div>
            <?php endwhile; ?>
        <div class="testimonials-cta">
            <a class="button light" href="<?= get_bloginfo('wpurl'); ?>/testimonials">More Success Stories</a>
        </div>
    </div>
    <?php wp_reset_postdata(); ?>
<?php endif; ?>
