<?php
    $category_id = get_post_meta( $post->ID, 'related_posts' ,true);
    $placeholder = get_stylesheet_directory_uri() . '/assets/images/placeholder.png';
?>

<div class="related-posts page-width">
    <div class="posts-grid count-3">
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
                    <div class="thumb" style="background-image: url('<?= $thumb; ?>');">&nbsp;</div>
                    <div class="heading">
                        <a href="<?= get_the_permalink(); ?>">
                            <?php the_title(); ?>
                        </a>
                    </div>
                </article>
    
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
            
        <?php endif; ?>
    </div>
</div>