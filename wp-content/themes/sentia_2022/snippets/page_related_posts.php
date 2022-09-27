<?php
    $category_id = get_post_meta( $post->ID, 'related_posts' ,true);
    $placeholder = get_stylesheet_directory_uri() . '/assets/images/placeholder.png';
?>

<div class="related-posts page-width slim-width">
    <h2>Related Blog Posts</h2>
    <div class="articles-grid">
        <?php $the_query = new WP_Query( array( 
            'post_type' => 'post', 
            'posts_per_page' => 3,
            'cat' => $category_id,
            'orderby' => 'date',
            'order' => 'DESC'
        ) ); ?>
        <?php if ( $the_query->have_posts() ) : ?>
    
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <?php 
                $featured_image = get_the_post_thumbnail_url( $post->ID, 'thumbnail' );
                if( $featured_image ) {
                    $thumb = $featured_image;
                } else {
                    $thumb = $placeholder;
                }
            ?>
    
            <article>
                <a href="<?= get_the_permalink(); ?>">
                    <div class="thumbnail" style="background-image: url('<?= $thumb ?>');">&nbsp;</div>
                    <h3><?php the_title(); ?></h3>
                </a>
            </article>
    
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
            
        <?php endif; ?>
    </div>
</div>