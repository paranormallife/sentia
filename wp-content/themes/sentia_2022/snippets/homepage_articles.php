<?php
    $default_hero_image = get_theme_mod('default_hero_image');
    $article1 = get_theme_mod('featured_page_1');
    $article2 = get_theme_mod('featured_page_2');
    $title1 = get_theme_mod('featured_page_1_title');
    $title2 = get_theme_mod('featured_page_2_title');
    $customImage1 = get_theme_mod('featured_page_1_image');
    $customImage2 = get_theme_mod('featured_page_2_image');
    $customTitle = get_theme_mod('articles_title');
    if( $customTitle ) {
        $title = $customTitle;
    } else {
        $title = 'What\'s New';
    }
?>

<section class="homepage-articles page-width">
    <h2><?= $title; ?></h2>
    <div class="articles-grid">
        <?php if( $article1 ) : ?>
            <article>
                <a href="<?= get_the_permalink( $article1 ); ?>">
                    <?php
                        $thumb1 = get_the_post_thumbnail_url( $article1, 'large' );
                        if( $customImage1 ) {
                            $image1 = $customImage1;
                        } elseif( $thumb1 ) {
                            $image1 = $thumb1;
                        } else {
                            $image1 = $default_hero_image;
                        }
                    ?>
                    <div class="thumbnail" style="background-image: url('<?= $image1 ?>');"></div>
                    <h3>
                        <?php if( $title1 ) { 
                            echo $title1;
                        } else {
                            echo get_the_title( $article1 );
                        } ?>
                    </h3>
                    <div class="excerpt">
                        <?php 
                            echo get_the_excerpt( $article1 );
                            echo ' <span class="read-more">Learn More &rarr;</a>';
                        ?>
                    </div>
                </a>
            </article>
        <?php endif; ?>
        <?php if( $article1 ) : ?>
            <article>
                <a href="<?= get_the_permalink( $article2 ); ?>">
                    <?php
                        $thumb2 = get_the_post_thumbnail_url( $article2, 'large' );
                        if( $customImage2 ) {
                            $image2 = $customImage2;
                        } elseif( $thumb2 ) {
                            $image2 = $thumb2;
                        } else {
                            $image2 = $default_hero_image;
                        }
                    ?>
                    <div class="thumbnail" style="background-image: url('<?= $image2 ?>');"></div>
                    <h3>
                        <?php if( $title2 ) { 
                            echo $title2;
                        } else {
                            echo get_the_title( $article2 );
                        } ?>
                    </h3>
                    <div class="excerpt">
                        <?php 
                            echo get_the_excerpt( $article2 );
                            echo ' <span class="read-more">Learn More &rarr;</a>';
                        ?>
                    </div>
                </a>
            </article>
        <?php endif; ?>
        <?php $the_query = new WP_Query( array(
            'post_type' => 'post',
            'posts_per_page' => 1
        ) ); ?>
        <?php if ( $the_query->have_posts() ) : ?>
            <article>
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
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
                    <h3><?php the_title(); ?></h3>
                    <div class="excerpt">
                        <?php 
                            echo get_the_excerpt();
                            echo ' <span class="read-more">Read More &rarr;</a>';
                        ?>
                    </div>
                </a>
            <?php endwhile; ?>
            </article>
            <?php wp_reset_postdata(); ?>
        <?php else : ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>
    </div>
</section>