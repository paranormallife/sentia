<?php
    $theme = get_stylesheet_directory_uri();
    $placeholder = $theme .  '/assets/images/placeholder.png';
    $featured = new WP_Query( array(
        'post_type' => 'team',
        'posts_per_page' => -1,
        'orderby' => 'menu_order',
        'meta_key'   => 'featured',
        'meta_value' => 1
    ) ); 
    $team = new WP_Query( array(
        'post_type' => 'team',
        'posts_per_page' => -1,
        'orderby' => 'menu_order',
        'order' => 'ASC',
        'meta_key'   => 'featured',
        'meta_value' => 0
    ) ); 
?>


<div class="team-members-grid slim-width">
    <?php if ( $featured->have_posts() ) : ?>
        <?php while ( $featured->have_posts() ) : $featured->the_post(); ?>
            <?php
                $featured_image = get_the_post_thumbnail_url( $post->ID, 'large' );
                if( $featured_image ) {
                    $thumb = $featured_image;
                } else {
                    $thumb = $placeholder;
                }
            ?>
            <div class="featured-team-member">
                <div class="headshot">
                    <div class="image" style="background-image: url('<?= $thumb; ?>');">&nbsp;</div>
                    <div class="overlay">&nbsp;</div>
                </div>
                <div class="content">
                    <a href="<?= get_the_permalink(); ?>">
                        <div class="heading"><?php the_title(); ?></div>
                    </a>
                    <div class="subheading"><?= get_post_meta( $post->ID, 'role', true ); ?></div>
                    <div class="text"><?= get_post_meta( $post->ID, 'bio', true ); ?></div>
                </div>
            </div>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
    <?php endif; ?>

    <div class="grid-items">    
        <?php if ( $team->have_posts() ) : ?>
            <?php while ( $team->have_posts() ) : $team->the_post(); ?>
                <?php
                    $featured_image = get_the_post_thumbnail_url( $post->ID, 'large' );
                    if( $featured_image ) {
                        $thumb = $featured_image;
                    } else {
                        $thumb = $placeholder;
                    }
                ?>
                <div class="team-member">
                    <a href="<?= get_the_permalink(); ?>">
                        <div class="headshot">
                            <div class="image" style="background-image: url('<?= $thumb; ?>');">&nbsp;</div>
                            <div class="overlay"><?= get_post_meta( $post->ID, 'summary', true ); ?></div>
                        </div>
                        <div class="content">
                            <div class="heading"><?php the_title(); ?></div>
                            <div class="subheading"><?= get_post_meta( $post->ID, 'role', true ); ?></div>
                        </div>
                    </a>
                </div>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        <?php endif; ?>
    </div>
</div>