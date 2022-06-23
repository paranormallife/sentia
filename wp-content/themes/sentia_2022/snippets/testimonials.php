<?php 
$the_query = new WP_Query( array(
    'post_type' => 'testimonial',
    'posts_per_page' => -1,
    'orderby' => 'menu_order',
    'order' => 'ASC'
) ); ?>

<h2>What People are Saying about Sentia</h2>
 
<?php if ( $the_query->have_posts() ) : ?>
    <div class="testimonials-list">
        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <?php $thumbnail = get_the_post_thumbnail_url(); ?>
            <div class="testimonial">
                <div class="thumbnail" style="background-image: url('<?= $thumbnail; ?>');">&nbsp;</div>
                <div class="quote"><?php the_content(); ?></div>
                <div class="attribution">-<?= get_the_title(); ?></div>
            </div>
        <?php endwhile; ?>
    </div>
    <?php wp_reset_postdata(); ?>
<?php endif; ?>