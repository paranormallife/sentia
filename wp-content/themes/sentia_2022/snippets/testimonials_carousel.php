<?php 
$the_query = new WP_Query( array(
    'post_type' => 'testimonial',
    'posts_per_page' => -1
) ); ?>
 
<?php if ( $the_query->have_posts() ) : ?>
    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <h2><?php the_title(); ?></h2>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
<?php endif; ?>