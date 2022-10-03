<?php
    $hostID = $post->ID;
    $thumb = get_the_post_thumbnail_url( $post->ID, 'large' );
?>
<div class="post-single slim-width">
    <div class="article">
        <h1><?php the_title(); ?></h1>
        <?php if( $thumb ) : ?>
            <div class="post-thumbnail">
                <img src="<?= $thumb; ?>" alt="<?= get_the_title(); ?>" />
            </div>
        <?php endif; ?>
        <div class="blog-content">
            <?php the_content(); ?>
        </div>
    </div>
    <div class="blog-list">
        <h2>More</h2>
        <ul>
            <?php 
            $the_query = new WP_Query( array(
                'post_type' => 'post',
                'posts_per_page' => 25,
                'orderby' => 'date',
                'order' => 'DESC'
            ) ); ?>
            <?php if ( $the_query->have_posts() ) : ?>
                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                    <?php $postID = $post->ID; ?>
                    <?php if( $hostID != $postID ) : ?>
                        <li>
                            <a href="<?= get_the_permalink(); ?>">
                                <?php the_title(); ?>
                            </a>
                        </li>
                    <?php endif; ?>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php endif; ?>
        </ul>
    </div>
</div>