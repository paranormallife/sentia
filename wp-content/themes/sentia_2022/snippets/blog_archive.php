<?php
    if( is_front_page() ) {
        $postCount = 3;
    } else {
        $postCount = -1;
    }
    $the_query = new WP_Query( array(
        'post_type' => 'post',
        'posts_per_page' => $postCount
    ) );
?>
<?php if ( $the_query->have_posts() ) : ?>
    <div class="articles-grid blog-archive">
        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <article>
                <a href="<?= get_the_permalink(); ?>">
                    <?php
                        $post_thumb = get_the_post_thumbnail_url( $post->ID, 'large' );
                    ?>
                    <div class="thumbnail" style="background-image: url('<?= $post_thumb ?>');">&nbsp;</div>
                    <h3><?php the_title(); ?></h3>
                    <div class="excerpt">
                        <?php 
                            echo get_the_excerpt();
                            echo ' <span class="read-more">Read More &rarr;</a>';
                        ?>
                    </div>
                </a>
            </article>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
    </div>
<?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>