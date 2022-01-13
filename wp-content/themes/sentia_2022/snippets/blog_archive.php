<?php 
    $the_query = new WP_Query( array(
        'post_type' => 'post',
        'posts_per_page' => -1
    ) );
    $default_hero_image = get_theme_mod('default_hero_image');
?>
<?php if ( $the_query->have_posts() ) : ?>
    <div class="articles-grid page-width blog-archive">
        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <article>
                <a href="<?= get_the_permalink(); ?>">
                    <?php
                        $post_thumb = get_the_post_thumbnail_url( $post->ID, 'large' );
                        if( $post_thumb ) {
                            $thumb = $post_thumb;
                        } else {
                            $thumb = $default_hero_image;
                        }
                    ?>
                    <div class="thumbnail" style="background-image: url('<?= $thumb ?>');"></div>
                    <h2><?php the_title(); ?></h2>
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