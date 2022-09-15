<?php
    $theme = get_stylesheet_directory_uri();
    $placeholder = $theme .  '/assets/images/placeholder.png';
    $featured_image = get_the_post_thumbnail_url( $post->ID, 'large' );
    if( $featured_image ) {
        $thumb = $featured_image;
    } else {
        $thumb = $placeholder;
    }
    $team = new WP_Query( array(
        'post_type' => 'team',
        'posts_per_page' => -1,
        'orderby' => 'menu_order'
    ) );
    $parentID = get_the_id();
?>
<div class="team-member-profile">
    <h1><?php the_title(); ?></h1>
    <h2><?= get_post_meta( $post->ID, 'role', true) ?></h2>
    <div class="columns">
        <div class="image-column">
            <img src="<?= $thumb; ?>" alt="Photo of <?= get_the_title(); ?>" />
            <div class="summary">
                <?= get_post_meta( $post->ID, 'summary', true) ?>
            </div>
        </div>
        <div class="bio-column">
            <?= get_post_meta( $post->ID, 'bio', true) ?>
        </div>
        <div class="nav-column">
            <div class="heading">
                <a href="<?= get_bloginfo('wpurl'); ?>/our-team">The Sentia Team</a>
            </div>
            <ul>            
                <?php if ( $team->have_posts() ) : ?>
                    <?php while ( $team->have_posts() ) : $team->the_post(); ?>
                    <?php $childID = get_the_id(); ?>
                        <li <?php if( $parentID == $childID ) { echo 'class="current"'; } ?>>
                            <a href="<?= get_the_permalink(); ?>">
                                <?php the_title(); ?>
                            </a>
                        </li>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</div>