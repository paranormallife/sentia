<?php 
    $testimonial = get_post_meta( $post->ID, 'featured_testimonial', true);
    $the_query = new WP_Query( array(
        'post_type' => 'testimonial',
        'posts_per_page' => 1,
        'p' => $testimonial
    ) ); 
    $placeholder = get_stylesheet_directory_uri() . '/assets/images/placeholder.png';
?>
 
<?php if ( $the_query->have_posts() ) : ?>
    <div class="featured_testimonial page-width slim-width">
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                <?php 
                    $featured_image = get_the_post_thumbnail_url( $post->ID, 'thumbnail' );
                    if( $featured_image ) {
                        $thumb = $featured_image;
                    } else {
                        $thumb = $placeholder;
                    }
                ?>
                <div class="testimonial">
                    <div class="thumbnail" style="background-image: url('<?= $thumb; ?>');">&nbsp;</div>
                    <div class="quote"><?php the_content(); ?></div>
                    <div class="attribution">-<?= get_the_title(); ?></div>
                </div>
            <?php endwhile; ?>
        <div class="testimonials-cta">
            <a class="button light" href="<?= get_bloginfo('wpurl'); ?>/testimonials">More Success Stories</a>
        </div>
    </div>
    <?php wp_reset_postdata(); ?>
<?php endif; ?>
